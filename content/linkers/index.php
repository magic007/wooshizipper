<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
	if(!empty($_REQUEST['r']))
	{
		$sql="update ".TB_PREFIX."linkers set counts=counts+1 where id=".$_REQUEST['r'];
		$db->query($sql);
		$sql="select * from ".TB_PREFIX."linkers where id=".$_REQUEST['r'];
		$link = $db->get_row($sql);
		redirect('http://'.$link->linkAddress);
	}
}
/*
function view()
{
	global $db,$params;
	$sql='select * from '.TB_PREFIX.'linkers where id='.$params['args'];
	$linkers = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title =  $linkers->linkerName .' - '. $page->title ; 
	
	setdata('linkers',$linkers);
	setdata('page',$page);
}
*/
?>