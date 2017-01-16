<?php
require_once(ABSPATH.'/inc/class.categorytree.php');
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
}
function view()
{
	global $db,$params,$comment,$request;
	$sql='select * from '.TB_PREFIX.'product where id='.$request['r'];
	$product = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	$sql="update ".TB_PREFIX."product set counts=counts+1 where id=".$request['r'];
	$db->query($sql);

	//构造页面标题
	$page->title =  $page->title ;
	$product->origialPic = get_root_path().$product->origialPic;
	$product->middlePic = get_root_path().$product->middlePic;
	$product->smallPic = get_root_path().$product->smallPic;
	setdata('product',$product);
	setdata('page',$page);
}
function ex_sub_menu($strarr,$select_strarr,$pid,$select_id,$span_style='')
{
	global $db;
	class proTree extends contentCategoryTree{};
	$proTree = new proTree($pid,$strarr,$select_strarr,$select_id);
}
?>