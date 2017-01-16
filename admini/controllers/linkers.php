<?php
require(ABSPATH.'/inc/class.upload.php');
require(ABSPATH.'/inc/class.paint.php');
function index()
{
	global $linkers,$db,$request;
	$sb = new sqlbuilder('zdt','select * from (SELECT * FROM `'.TB_PREFIX.'linkers` order by case ordering when 0 then id else ordering end desc) as `linkers` where channelId='.$request['p'],'ordering desc',$db,20);
	$linkers = new DataTable($sb,'案例展示列表');
	$linkers->add_col('编号','id','db',30,'"$rs[id]"');
	$linkers->add_col('案例名称','linkerName','db',150,'"<a href=\"'.ROOTPATH.'?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[linkerName]</a>"');
	$linkers->add_col('链接地址','linkAddress','db',150,'"$rs[linkAddress]"');
	$linkers->add_col('处理','handling','text',150,'"<a href=\"./index.php?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[删除]</a>|<a href=\"./index.php?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$linkers->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $result,$db,$request;
	if($_POST)
	{	
		if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
		{
			$linkers_form = new linkers();
			$linkers_form->addnew();
			$linkers_form->get_request($request);
			$linkers_form->channelId=$request['p'];
			$linkers_form->dtTime = date("Y-m-d H:i:s");

			$upload = new Upload();
			if(!empty($_FILES['uploadfile']))
			{
				$fileName = $upload->SaveFile('uploadfile');
				$linkers_form-> origialPic = UPLOADPATH.$fileName;

				$paint = new Paint($linkers_form-> origialPic);
				$linkers_form->smallPic= $paint->Resize(90,30,'s_');
			}
		}

		else	{
			$linkers_form = new linkers();
			$linkers_form->addnew();
			$linkers_form->get_request($request);
			$linkers_form->channelId=$request['p'];

			$linkers_form->dtTime = date("Y-m-d H:i:s");
		}
		if($linkers_form->save())
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
	global $linkers_item,$db,$request;
	$id = $request['n'];
	$sql='select * from '.TB_PREFIX.'linkers where id='.$id;
	$linkers_item = $db->get_row($sql);
	if($_POST)
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
		{

			$sql = "SELECT * FROM ".TB_PREFIX."linkers WHERE id='$id' limit 1";
			$row = $db->get_row($sql);
			if($row->origialPic)
			{
				if(file_exists(ABSPATH.$row->origialPic))
				{
					@unlink(ABSPATH.$row->origialPic);
					@unlink(ABSPATH.$row->smallPic);
				}
			}

			$linkers_form = new linkers();
			$linkers_form->get_request($request);
			$linkers_form->id=$id;
			$linkers_form->links=$request['links'];
			$linkers_form->channelId=$request['p'];

			$upload = new Upload();
			$fileName = $upload->SaveFile('uploadfile');
			$linkers_form-> origialPic = UPLOADPATH.$fileName;
			$paint = new Paint($linkers_form-> origialPic);
			$linkers_form-> smallPic= $paint->Resize(90,30,'s_');
		}
		else
		{
			$linkers_form = new linkers();
			$linkers_form->get_request($request);
			$linkers_form->id=$id;
			$linkers_form->links=$request['links'];
			$linkers_form->channelId=$request['p'];
		}
		if($linkers_form->save())
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
		$sql='select * from '.TB_PREFIX.'linkers where id='.$request['n'].' limit 1';
		$row = $db->get_row($sql);
		if($row->origialPic)
		{
			if(file_exists(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->smallPic);
			}
		}
		$sql='delete from '.TB_PREFIX.'linkers where id='.$request['n'].' limit 1';
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
		if(empty($value))$value=0;
		$sql ='update '.TB_PREFIX.'linkers set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>