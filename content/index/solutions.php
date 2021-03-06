<?php
function dt_solutions($channelId,$n=0,$strcount=0,$stcountl=0,$style=0,$isellipsis=true,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/solutions_'.$style.'.php') or die('dt_solutions 函数参数错误。没有找到 solutions_'.$style.'.php 文件');
	if($n == 0)
		$results= $db->get_results("select * from ".TB_PREFIX."solutions as a,".TB_PREFIX."solutions_content as b  where a.guid=b.guid and a.channelId=$channelId order by a.".$ordering." desc");
	else
		$results= $db->get_results("select * from ".TB_PREFIX."solutions as a,".TB_PREFIX."solutions_content as b  where a.guid=b.guid and a.channelId=$channelId order by a.".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)>$strcount)$o->title=cnSubstr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)<$strcount)$o->title=$o->title;
			else $o->ptitle=$o->title; //保留完整标
						
			if(!$isellipsis&&$stcountl>0)$o->content=cnSubstr(strip_tags($o->content),0,$stcountl-1); //截取标题字数
			elseif($isellipsis&&$stcountl>0&&cnStrLen(strip_tags($o->content))>$stcountl)$o->content=cnSubstr(strip_tags($o->content),0,$stcountl-1)."..";
			elseif($isellipsis&&$stcountl>0&&cnStrLen(strip_tags($o->content))<$stcountl)$o->content=strip_tags($o->content);
			else $o->pcontent=$o->content; //保留完整标
			require(get_style_file('solutions',$style));
		}
	}
}

function dt_solutions_en($channelId,$n=0,$strcount=0,$stcountl=0,$style=0,$isellipsis=true,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/solutions_'.$style.'.php') or die('dt_solutions 函数参数错误。没有找到 solutions_'.$style.'.php 文件');
	if($n == 0)
		$results= $db->get_results("select * from ".TB_PREFIX."solutions as a,".TB_PREFIX."solutions_content as b  where a.guid=b.guid and a.channelId=$channelId order by a.".$ordering." desc");
	else
		$results= $db->get_results("select * from ".TB_PREFIX."solutions as a,".TB_PREFIX."solutions_content as b  where a.guid=b.guid and a.channelId=$channelId order by a.".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&strlen($o->title)>$strcount)$o->title=substr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&strlen($o->title)<$strcount)$o->title=$o->title;
			else $o->ptitle=$o->title; //保留完整标
						
			if(!$isellipsis&&$stcountl>0)$o->content=cnSubstr(strip_tags($o->content),0,$stcountl-1); //截取标题字数
			elseif($isellipsis&&$stcountl>0&&strlen(strip_tags($o->content))>$stcountl)$o->content=substr(strip_tags($o->content),0,$stcountl-1)."..";
			elseif($isellipsis&&$stcountl>0&&strlen(strip_tags($o->content))<$stcountl)$o->content=strip_tags($o->content);
			else $o->pcontent=$o->content; //保留完整标
			require(get_style_file('solutions',$style));
		}
	}
}
?>