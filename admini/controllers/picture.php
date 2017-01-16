<?php 
function index()
{
	global $picture,$db,$request;
	$sb = new sqlbuilder('mdt','select * from (select * from `'.TB_PREFIX.'picture` order by case ordering when 0 then id else ordering end desc) as `picture` where channelId='.$request['p'],'ordering desc',$db,12);
	$picture = new DataTable($sb,'图片列表页面');
	$picture->add_col('编号','id','db',40,'"$rs[id]"');
	$picture->add_col('主题','title','db',0,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[title]</a>"');
	$picture->add_col('预览','preview','text',40,'"<a target=\"_blank\" href=\"../?p=$rs[channelId]&a=view&r=$rs[id]\">预览</a>"');
	$picture->add_col('时间','dtTime','db',140,'');
	$picture->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除该图片?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$picture->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $request;
	if($_POST)
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
		{
			$picture = new picture();
			$picture->addnew();
			$picture->get_request($request);
			$picture->channelId=$request['p'];
			$picture->dtTime = date("Y-m-d H:i:s");

			$upload = new Upload();
			if(!empty($_FILES['uploadfile']))
			{
				$fileName = $upload->SaveFile('uploadfile');
				$picture-> origialPic = UPLOADPATH.$fileName;

				$paint = new Paint($picture-> origialPic);
				$picture-> smallPic= $paint->Resize(140,105,'s_');
				$picture-> middlePic = $paint->Resize(460,345,'m_');
				$picture->indexPicture=$paint->Resize(pictureWidth,pictureHight,'i_');
			}
		}

		else	{
			$picture = new picture();
			$picture->addnew();
			$picture->get_request($request);

			$picture->dtTime = date("Y-m-d H:i:s");
		}
		if($picture->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '添加失败';
		}
	}
}

function edit()
{
	global $db,$request,$picture;
	$id = $request['n'];
	if(empty($request['title']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."picture WHERE id='$id'";
		$picture = $db->get_row($sql);
	}
	else
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
		{

			$sql = "SELECT * FROM ".TB_PREFIX."picture WHERE id='$id' limit 1";
			$row = $db->get_row($sql);
			if($row)
			{
				if(file_exists(ABSPATH.$row->origialPic))
				{
					unlink(ABSPATH.$row->origialPic);
					unlink(ABSPATH.$row->middlePic);
					unlink(ABSPATH.$row->smallPic);
					unlink(ABSPATH.$row->indexPicture);
				}
			}

			$picture = new picture();
			$picture->get_request($request);
			$picture->channelId=$request['p'];
			$picture->id=$id;

			$upload = new Upload();
			$fileName = $upload->SaveFile('uploadfile');
			$picture-> origialPic = UPLOADPATH.$fileName;
			$paint = new Paint($picture-> origialPic);
			$picture-> smallPic= $paint->Resize(140,105,'s_');
			$picture-> middlePic = $paint->Resize(460,345,'m_');
			$picture->indexPicture=$paint->Resize(pictureWidth,pictureHight,'i_');
		}
		else
		{
			$picture = new picture();
			$picture->get_request($request);
			$picture->id=$id;

			$tempPic = explode('/',$request['origialPic']);
			$picture->middlePic = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'m_'.$tempPic[3];
			$picture->smallPic = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'s_'.$tempPic[3];
			$picture->indexPicture = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'i_'.$tempPic[3];
		}
		if($picture->save())
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
		//先删除图片，再删除数据库路径
		$id = $request['n'];
		$sql = "SELECT * FROM ".TB_PREFIX."picture WHERE id='$id' limit 1";
		$row = $db->get_row($sql);
		if($row)
		{
			if(file_exists(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->middlePic);
				unlink(ABSPATH.$row->smallPic);
				unlink(ABSPATH.$row->indexPicture);
			}
		}
		//在此删除路径
		$sql='delete from '.TB_PREFIX.'picture where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		$sql ='update '.TB_PREFIX.'picture set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>