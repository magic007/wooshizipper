<?php
checkme(9);
function index()
{
	global $flash_group,$db,$request;
	$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'flash_group`','id',$db,12);
	$flash_group = new DataTable($sb,'flash列表');
	$flash_group->add_col('标题','title','db',0,'"$rs[title]"');
	$flash_group->add_col('添加时间','dt_time','db',180,'"$rs[dt_time]"');
	$flash_group->add_col('使用状态','sign','text',140,'"<a href=\"./?m=system&s=flashoptions&a=user_flash&group_id=$rs[id]&l='.$request['l'].'\">[更换FLASH]</a>"');
	$flash_group->add_col('使用状态','sign','text',140,'flashByUserd($rs[sign],$rs[id])');
	$flash_group->add_col('操作','edit','text',140,'"<a href=\"./?m=system&s=flashoptions&a=destroy_group&group_id=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除?\');\">[删除]</a>|<a href=\"./?m=system&s=flashoptions&a=edit_group&group_id=$rs[id]&l='.$request['l'].'\">[编辑]</a>"');
}
function flashByUserd($sign,$id)
{
	if($sign==0)
	return "<a href=\"./?m=system&s=flashoptions&a=user_flash&group_id=".$id."\"><span style=\"color:GREEN\">[更换FLASH]</span></a>";
	else
	return "<span style=\"color:#FF0000\">[使用中...]</span>";
}
function create()
{
	global $request,$db;
	if($_POST)
	{
		$flash = new flash();
		$flash->addnew($request);
		if(!empty($_FILES['uploadfile']))
			{
				$upload = new Upload();
				$fileName = $upload->SaveFile('uploadfile');
				$flash->picpath =ROOTPATH.UPLOADPATH.$fileName;
			}
		if($flash->save())
		redirect('?m=system&s=flashoptions&a=edit_group&group_id='.$request['group_id'].'&l='.$request['l'].'');
	}
}
function edit()
{
	global $edit_item,$flashs,$db,$request;
	if(empty($request['title']))
	{
		$sql='select * from `'.TB_PREFIX.'flash` where id='.$request['n'];
		$edit_item = $db->get_row($sql);
	}
	else
	{
		$flash = new flash();
		$flash->id=$request['n'];
		$flash->get_request($request);
		$upload = new Upload();
		if(!empty($_FILES['uploadfile']))
		{
			
			$fileName = $upload->SaveFile('uploadfile');
			$flash->picpath =ROOTPATH.UPLOADPATH.$fileName;
		}
		if($flash->save())
		redirect('?m=system&s=flashoptions&a=edit_group&group_id='.$request['group_id'].'&l='.$request['l']);
	}	
}
function destroy()
{
	global $db,$request;
	$sql = 'delete from `'.TB_PREFIX.'flash` where id='.$request['n'];
	if($db->query($sql))
	redirect('?m=system&s=flashoptions&a=edit_group&group_id='.$request['group_id'].'&l='.$request['l'].'');
	else
	{
		echo '删除失败！';
	}
}
function create_group()
{
	global $request,$db;
	if($_POST)
	{
		$flash_group = new flash_group();
		$flash_group->addnew($request);
		if($flash_group->save())
		redirect('?m=system&s=flashoptions&l='.$request['l'].'');
	}
	
}
function edit_group()
{
	global $edit_group_item,$flashs,$db,$request;
	if(empty($request['title']))
	{
		$sql='select * from `'.TB_PREFIX.'flash_group` where id='.$request['group_id'];
		$edit_group_item = $db->get_row($sql);

		$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'flash` where group_id='.$request['group_id'],'ordering',$db,12);
		
		$flashs = new DataTable($sb,'图片列表');
		$flashs->add_col('顺序','id','db',40,'"$rs[id]"');
		$flashs->add_col('标题','title','db',0,'"$rs[title]"');
		$flashs->add_col('添加时间','dt_time','db',180,'"$rs[dt_time]"');
		$flashs->add_col('操作','edit','text',140,'"<a href=\"./?m=system&s=flashoptions&a=destroy&group_id=$rs[group_id]&n=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除?\');\">[删除]</a>|<a href=\"./?m=system&s=flashoptions&a=edit&group_id=$rs[group_id]&n=$rs[id]&l='.$request['l'].'\">[编辑]</a>"');
		$flashs->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
	}
	else
	{
		$flash_group = new flash_group();
		$flash_group->id=$request['group_id'];
		$flash_group->get_request($request);
		$flash_group->title_bg_alpha=empty($request['title_bg_alpha'])?0:$request['title_bg_alpha'];
		$flash_group->transformFlag=empty($request['transformFlag'])?0:$request['transformFlag'];
		
		$ordering = $request['ordering'];		
		if($flash_group->save())
		{
			foreach($ordering as $key=>$value)
			{
				if(empty($value))$value=0;
				$sql ='update '.TB_PREFIX.'flash set ordering='.$value.' where id='.$key;
				$db->query($sql);
			}
			redirect('?m=system&s=flashoptions&a=edit_group&group_id='.$request['group_id'].'&l='.$request['l']);
		}
		else
		{
			foreach($ordering as $key=>$value)
			{
				if(empty($value))$value=0;
				$sql ='update '.TB_PREFIX.'flash set ordering='.$value.' where id='.$key;
				$db->query($sql);
			}
			redirect('?m=system&s=flashoptions&a=edit_group&group_id='.$request['group_id'].'&l='.$request['l']);
		}
	}
}
function destroy_group()
{
	global $db,$request;
	$sql = 'delete from `'.TB_PREFIX.'flash_group` where id='.$request['group_id'];
	if($db->query($sql))
	redirect('?m=system&s=flashoptions&l='.$request['l']);
	else
	{
		echo '删除失败！';
	}
}
function user_flash()
{
	global $db,$request;
	$sql ='update '.TB_PREFIX.'flash_group set sign=1 where id='.$request['group_id'];
	$db->query($sql);
	$sql ='update '.TB_PREFIX.'flash_group set sign=0 where id not in('.$request['group_id'].')';
	$db->query($sql);
	redirect('?m=system&s=flashoptions&l='.$request['l']);
}
?>