<?php
function dt_video($channelId,$n=0,$strcount=0,$style=0,$isellipsis=true,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/video_'.$style.'.php') or die('dt_video 函数参数错误。没有找到 video_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."video`where channelId=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."video`where channelId=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)>$strcount)$o->title=cnSubstr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)<$strcount)$o->title=$o->title;
			else $o->ptitle=$o->title; //保留完整标
			require(get_style_file('video',$style));	
		}
	}
}
?>