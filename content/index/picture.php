<?php
function dt_picture($channelId,$n=0,$strcount=0,$strcountl=0,$style=0,$isellipsis=true,$ordering='id')
{
	global $db;
	file_exists(get_abs_skin_root().'index/picture_'.$style.'.php') or die('dt_picture 函数参数错误。没有找到 picture_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."picture` where channelID=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."picture` where channelID=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)>$strcount)$o->title=cnSubstr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)<$strcount)$o->title=$o->title;
			else $o->ptitle=$o->title; //保留完整标
			$o->summary = strip_tags($o->summary);
			if(!$isellipsis&&$strcountl>0)$o->summary=cnSubstr($o->summary,0,$strcountl-1); //截取标题字数
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)>$strcountl)$o->summary=cnSubstr($o->summary,0,$strcountl-1)."..";
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)<$strcountl)$o->summary=$o->summary;
			else $o->psummary=$o->summary; //保留完整标
			require(get_style_file('picture',$style));	
		}
	}	
}
function dt_picture_html($channelId,$n=0,$strcount=0,$strcountl=0,$style=0,$isellipsis=true,$ordering='id')
{
	global $db;
	file_exists(get_abs_skin_root().'index/picture_'.$style.'.php') or die('dt_picture 函数参数错误。没有找到 picture_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."picture` where channelID=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."picture` where channelID=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)>$strcount)$o->title=cnSubstr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)<$strcount)$o->title=$o->title;
			else $o->ptitle=$o->title; //保留完整标
			if(!$isellipsis&&$strcountl>0)$o->summary=cnSubstr($o->summary,0,$strcountl-1); //截取标题字数
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)>$strcountl)$o->summary=cnSubstr($o->summary,0,$strcountl-1)."..";
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)<$strcountl)$o->summary=$o->summary;
			else $o->psummary=$o->summary; //保留完整标
			require(get_style_file('picture',$style));	
		}
	}	
}
?>