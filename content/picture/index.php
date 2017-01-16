<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));

}
function view()
{
	global $db,$params,$comment;
	$sql='select * from '.TB_PREFIX.'picture where id='.$params['args'];
	$picture = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title =  $page->title ; 
	$picture->smallPic =get_root_path().$picture->smallPic;
	$picture->middlePic =get_root_path().$picture->middlePic;
	$picture->origialPic =get_root_path().$picture->origialPic;
	setdata('picture',$picture);
	setdata('page',$page);

}
?>