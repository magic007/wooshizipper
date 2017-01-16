<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));

}
function view()
{
	global $db,$params,$keywords;

	$sql='select * from '.TB_PREFIX.'solutions,'.TB_PREFIX.'solutions_content where '.TB_PREFIX.'solutions.id='.$params['args'].' and '.TB_PREFIX.'solutions.guid='.TB_PREFIX.'solutions_content.guid';
	$solutions = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	$sql='update '.TB_PREFIX.'solutions set counts=counts+1 where id='.$params['args'];
	$db->query($sql);
	
	//构造页面标题
	$page->title =  $page->title ; 
	
	$keywords = $solutions->keyword;
	setdata('solutions',$solutions);
	setdata('page',$page);
}
?>