<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));

}
function view()
{
	global $db,$params;
	$sql='select * from '.TB_PREFIX.'video where id='.$params['args'];
	$video = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title = $page->title ; 
	$video->filePath =get_root_path().$video->filePath;
	
	setdata('video',$video);
	setdata('page',$page);
}
?>