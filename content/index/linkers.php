<?php
function dt_text_linkers($channelId,$n=16,$style=0)
{
	global $db;
	$results=$db->get_results("select * from `".TB_PREFIX."linkers` where channelId=$channelId and links=1 order by ordering desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{
			require(get_style_file('text_linkers',$style));	
		}
	}
}
function dt_image_linkers($channelId,$n=16,$style=1)
{
	global $db;
	$results=$db->get_results("select * from `".TB_PREFIX."linkers` where channelId=$channelId and links=0 order by ordering desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{
			require(get_style_file('image_linkers',$style));	
		}
	}
}
?>