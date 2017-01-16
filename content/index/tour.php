<?php
function dt_tour($channelId,$n=0,$strcount=0,$strcountl=0,$style=0,$isellipsis=true)
{
	global $db;
	file_exists(get_abs_skin_root().'index/tour_'.$style.'.php') or die('dt_tour 函数参数错误。没有找到 tour_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."tour` where channelId=$channelId order by ".TB_PREFIX."tour.tourTime desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."tour` where channelId=$channelId order by ".TB_PREFIX."tour.tourTime desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->stars=cnSubstr($o->stars,0,$strcount-1); //截取歌手名称
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->stars)>$strcount)$o->stars=cnSubstr($o->stars,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->stars)<$strcount)$o->stars=$o->stars;
			else $o->pstars=$o->stars; //保留完整歌手名称
			if(!$isellipsis&&$strcountl>0)$o->location=cnSubstr($o->location,0,$strcountl-1); //截取活动地点
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->location)>$strcountl)$o->location=cnSubstr($o->location,0,$strcountl-1)."..";
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->location)<$strcountl)$o->location=$o->location;
			else $o->plocation=$o->location; //保留完整活动地点
			require(get_style_file('tour',$style));
		}
	}
}
?>