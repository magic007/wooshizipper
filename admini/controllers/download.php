<?php
require(ABSPATH.'/inc/class.upload.php');
function index()
{
	global $download,$db,$request;
	$sb = new sqlbuilder('zdt','select * from (select * from `'.TB_PREFIX.'download` order by case ordering when 0 then id else ordering end desc) as `download` where channelId='.$request['p'],'ordering desc',$db,20);
	$download = new DataTable($sb,'下载列表');
	$download->add_col('编号','id','db',40,'"$rs[id]"');
	$download->add_col('软件名称','softwareName','db',100,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[softwareName]</a>"');
	$download->add_col('软件大小','softwareSize','db',150,'"$rs[softwareSize]"');
	$download->add_col('更新时间','dtTime','db',140,'"$rs[dtTime]"');
	$download->add_col('处理','handling','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除该下载?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a> "');
	$download->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $result,$db,$request;
	if($_POST)
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['filePath']))
		{
			$download_form = new download();
			$download_form->addnew();
			$download_form->get_request($request);
			$download_form->channelId =$request['p'];
			$download_form->dtTime    =date('Y-m-d H:i:s');
			$download_form->filePath  =empty($request['filePath'])?upload_software('uploadfile'):$request['filePath'];
			$download_form->softwareSize = DisplayFileSize(filesize(ABSPATH.$download_form->filePath));
		}
		else
		{
			$download_form = new download();
			$download_form->addnew();
			$download_form->get_request($request);
			$download_form->channelId =$request['p'];
			$download_form->dtTime    =date('Y-m-d H:i:s');
		}
		if($download_form->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '添加失败！';
		}
	}
}
function edit()
{
	global $download_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'download where id='.$request['n'];
	$download_item = $db->get_row($sql);
	if($_POST)
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['filePath']))
		{
			$download_form = new download();
			$download_form->id=$request['n'];
			$download_form->get_request($request);
			$download_form->channelId =$request['p'];
			$download_form->dtTime=date('Y-m-d H:i:s');

			$download_form->filePath  =empty($request['filePath'])?upload_software('uploadfile',$download_item->filePath):$request['filePath'];
			$download_form->softwareSize = DisplayFileSize(filesize(ABSPATH.$download_form->filePath));
		}
		else
		{
			$download_form = new download();
			$download_form->id=$request['n'];
			$download_form->get_request($request);
			$download_form->channelId =$request['p'];
			$download_form->dtTime    =date('Y-m-d H:i:s');
		}
		if($download_form->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '修改失败！';
		}
	}

}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='select filePath from '.TB_PREFIX.'download where id='.$request['n'].' limit 1';
		$filepath = $db->get_var($sql);
		if(!empty($filepath) && $filepath != '/upload/')
		del_old_file($db->get_var($sql));
		$sql='delete from '.TB_PREFIX.'download where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}

}
function upload_software($fileName,$oldFile='')
{
	$upload = new Upload();
	del_old_file($oldFile);
	if(!empty($_FILES[$fileName]))
	{
		$upload->AllowExt='rar|txt|doc|exe|zip';
		$fileName = $upload->SaveFile($fileName);
		return UPLOADPATH.$fileName;
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
?>