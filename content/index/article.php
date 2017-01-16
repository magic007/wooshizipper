<?php
function dt_cn_article($channelId,$strcount=0)
{
	global $db;
	$results=$db->get_row("select * from `".TB_PREFIX."article`where channelId=$channelId  limit 1");
	if($results)
	{
		echo cnSubstr(strip_tags($results->content),0,$strcount);
	}
}
function dt_cn_article_normal($channelId,$strcount=0)
{
	global $db;
	$results=$db->get_row("select * from `".TB_PREFIX."article`where channelId=$channelId  limit 1");
	if($results)
	{
		echo cnSubstr($results->content,0,$strcount);
	}
}
function dt_cn_article_pic($channelId,$strcount=0,$style=0)
{
	global $db;
	$o=$db->get_row("select * from `".TB_PREFIX."article`where channelId=$channelId  limit 1");
	if($o)
	{
		if($strcount>0)
		$o->content = cnSubstr($o->content,0,$strcount);
		require(get_style_file('article_pic',$style));		
	}
}
function dt_en_article($channelId,$strcount=0)
{
	global $db;
	$results=$db->get_row("select * from `".TB_PREFIX."article`where channelId=$channelId  limit 1");
	if($results)
	{
		echo substr(strip_tags($results->content),0,$strcount);
	}
}
function dt_en_article_pic($channelId,$strcount=0,$style=0)
{
	global $db;
	$o=$db->get_row("select * from `".TB_PREFIX."article`where channelId=$channelId  limit 1");
	if($o)
	{
		if($strcount>0)
		$o->content = substr(strip_tags($o->content),0,$strcount);
		require(get_style_file('article_pic',$style));		
	}
}
?>