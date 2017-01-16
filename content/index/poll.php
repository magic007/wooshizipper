<?php
function dt_poll($channelId,$r,$style=0)
{
	global $db;
	$r = intval($r);
	$poll_cateaory=$db->get_row("select * from `".TB_PREFIX."poll_category`where id=$r");
	if(!empty($poll_cateaory))
	{
		$id=$poll_cateaory->id;
		$results=$db->get_results("select * from `".TB_PREFIX."poll` where categoryId=".$id);
		require(get_style_file('poll',$style));	
	}
	else
	{
		echo '您传送的投票ID错误';
	}
}
?>