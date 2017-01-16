<?php
function index()
{
	global $video,$db,$request;
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'video` order by case ordering when 0 then id else ordering end desc) as `video` where channelId='.$request['p'],'ordering desc',$db,20);
	$video = new DataTable($sb,'视频列表');
	$video->add_col('编号','id','db',40,'"$rs[id]"');
	$video->add_col('主题','title','db',0,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[title]</a>"');
	$video->add_col('预览','preview','text',40,'"<a target=\"_blank\" href=\"../?p=$rs[channelId]&a=view&r=$rs[id]\">预览</a>"');
	$video->add_col('大小','counts','db',40,'"$rs[fileSize]"');
	$video->add_col('标签','tags','db',160,'"$rs[tags]"');
	$video->add_col('上传时间','dtTime','db',140,'"$rs[dtTime]"');
	$video->add_col('删除','handling','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$video->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $result,$db,$request;
	if($_POST)
	{
		
		$video_form = new video();
		$video_form->addnew();
		$video_form->get_request($request);
		$video_form->channelId =$request['p'];
		$video_form->dtTime    =date('Y-m-d H:i:s');
		$video_form->filePath  =empty($request['filePath'])?upload_video('uploadfile'):$request['filePath'];
		$video_form->fileSize = DisplayFileSize(filesize(ABSPATH.$video_form->filePath));
		$video_form->picture   =empty($request['picture'])?process_picture('uploadfile2'):$request['picture'];
		$video_form->tags      =join(',',$request['tags']);
		$video_form->save();

		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function edit()
{
	global $video_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'video where id='.$request['n'];
	$video_item = $db->get_row($sql);
	
	if($_POST)
	{
		$video_form = new video();
		$video_form->get_request($request);
		$video_form->id=$request['n'];
		$video_form->dtTime=date('Y-m-d H:i:s');
		
		$video_form->filePath  =empty($request['filePath'])?upload_video('uploadfile',$video_item->filePath):$request['filePath'];
		$video_form->fileSize = DisplayFileSize(filesize(ABSPATH.$video_form->filePath));
		$video_form->picture   =empty($request['picture'])?process_picture('uploadfile2',$video_item->picture):$request['picture'];
		if($video_form->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
	}
	
}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='select filePath,picture from '.TB_PREFIX.'video where id='.$request['n'].' limit 1';
		$tempfile=$db->get_row($sql);
		del_old_file($tempfile->filePath);
		del_old_file($tempfile->picture);
	
		$sql='delete from '.TB_PREFIX.'video where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
	
}
function upload_video($fileName,$oldFile='')
{
		$upload = new Upload();
		del_old_file($oldFile);
		if(!empty($_FILES[$fileName]))
		{
			$upload->AllowExt='avi|rm|rmvb|wmv|mp3|wma';
			$fileName = $upload->SaveFile($fileName);
			return UPLOADPATH.$fileName;
		}
}
function process_picture($fileName,$oldFile='')
{
		$upload = new Upload();
		del_old_file($oldFile);
		if(!empty($_FILES[$fileName]))
		{
			$upload->AllowExt='jpg|jpeg|gif';
			$fileName = $upload->SaveFile($fileName);
			$paint = new Paint(UPLOADPATH.$fileName);
			$newname=$paint->Resize(140,105,'s_');
			unlink(ABSPATH.UPLOADPATH.$fileName);
			return $newname;
		}
}
function del_old_file($oldFile)
{
		if(!empty($oldFile))
		{
			if(file_exists(ABSPATH.$oldFile))
			{
				unlink(ABSPATH.$oldFile);
			}
		}
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		$sql ='update '.TB_PREFIX.'video set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>