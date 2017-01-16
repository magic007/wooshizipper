<?php
function index()
{
	global $db,$params,$article;
	//处理页面
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
	//处理文章模块的信息
	$article = $db->get_row("select * from ".TB_PREFIX."article where channelId=$params[id]");
	setdata('article',$article);
}
?>