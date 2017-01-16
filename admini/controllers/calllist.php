<?php 
function index()
{
	global $calllist,$selectcalllist,$db,$request;
	
	$sql = "select callId from `".TB_PREFIX."calllist` where channelId=".$request['p'];
	$selectlist = $db->get_var($sql);
	if(!empty($selectlist))
	{
		$sql = "select * from `".TB_PREFIX."menu` where type='list' and id not in(".$selectlist.") and dtLanguage='$request[l]'";
		$calllist = $db->get_results($sql);	
		$sql = "select * from `".TB_PREFIX."menu` where type='list' and id in(".$selectlist.") and dtLanguage='$request[l]'";
		$selectcalllist = $db->get_results($sql);
	}
	else
	{
		$sql = "select * from `".TB_PREFIX."menu` where type='list' and dtLanguage='$request[l]'";
		$calllist = $db->get_results($sql);	
	}
}
function calllist()
{
	global $db,$request;		
	$calllist = new calllist();
	$calllist->callId = substr($request['calllist'],0,strlen($request['calllist'])-1);
	$calllist->channelId = $request['p'];
	
	if($db->get_var("select count(*) from ".TB_PREFIX."calllist where channelId=$request[p]")==0)
	{
		$calllist->addnew();
		$calllist->save();
	}
	else
	{
		$calllist->id = $db->get_var("select id from ".TB_PREFIX."calllist where channelId=$request[p]");
		$calllist->save();
	}

	redirect("./?p=$request[p]&l=$request[l]");

}
?>