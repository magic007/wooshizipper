<?php
//首页搜索，站内关键字搜索
function index()
{
	global $db,$results,$request;
	
	if(!checkSqlStr($request['keyword']))
	$request['keyword'] = $request['keyword'];
	else
	echo '非法字符';
	
	$keyword = urldecode($request['keyword']);
	if(empty($keyword))
	{
		echo '<script>window.history.go(-1);</script>';
	}
	else
	{
		global $db,$request;
		$keyword = urldecode($request['keyword']);
		$sql="select title,id,channelId from `".TB_PREFIX."list` as a where (channelId = 15 or channelId=16) and title like '%$keyword%'  order by id desc";
		$results = $db->get_results($sql);
	}
}
?>