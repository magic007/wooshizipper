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
	$sql='select * from '.TB_PREFIX.'download where id='.$params['args'];
	$download = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title =  $download->softwareName .' - '. $page->title ; 
	$download->filePath =get_root_path().$download->filePath;
	setdata('download',$download);
	setdata('page',$page);
}
?>