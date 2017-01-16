<?php
function index()
{
	global $db,$params,$webMap_list;
	//处理页面
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
	//处理文章模块的信息
	$sql = "select * from `".TB_PREFIX."menu` where deep='0' and isHidden='0'";
	$webMap_list = $db->get_results($sql);
}
?>