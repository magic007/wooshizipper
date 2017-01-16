<?php
function index()
{
	global $db,$request,$guestbookStr,$count,$sb;

	$count = $db->get_var('select count(*) from `'.TB_PREFIX.'guestbook` where channelId='.$request['p']);
	if(!empty($request['mdtp'])&&$request['mdtp'] != '1')
		$count = $count - (intval($request['mdtp']) - 1)*6;
	
	$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'guestbook` where channelId='.$request['p'],'id desc',$db,6);
	//ob_start();
	//$guestbookStr = ob_get_clean();

}
function edit()
{
	global $db,$request,$guestbook;
	$id = $request['n'];
	if(empty($request['content1']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."guestbook WHERE id='$id'";
		$guestbook = $db->get_row($sql);
	}
	else
	{
		$guestbook = new guestbook();
		$guestbook->get_request($request);
		$guestbook->channelId=$request['p'];
		$guestbook->id=$id;
		$guestbook->auditing=1;
		$guestbook->isPublic=1;

		$guestbook->save();
		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='delete from '.TB_PREFIX.'guestbook where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
}
?>