<?php 
function index()
{
	global $db,$request,$webMap;
	$sql = "select * from `".TB_PREFIX."menu` where deep='0' and isHidden='0'";
	$webMap = $db->get_results($sql);
}
function edit()
{
}
?>