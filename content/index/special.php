<?
function dt_special($channelId,$n=0,$strcount=0,$strcountl=0,$style=0,$isellipsis=true,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/special_'.$style.'.php') or die('dt_special 函数参数错误。没有找到 special_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."special` where channelId=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."special` where channelId=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->name=cnSubstr($o->name,0,$strcount-1); //截取专辑名称
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->name)>$strcount)$o->name=cnSubstr($o->name,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->name)<$strcount)$o->name=$o->name;
			else $o->pname=$o->name; //保留完整专辑名称
			if(!$isellipsis&&$strcountl>0)$o->summary=cnSubstr($o->summary,0,$strcountl-1); //截取专辑简介
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)>$strcountl)$o->summary=cnSubstr($o->summary,0,$strcountl-1)."..";
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->summary)<$strcountl)$o->summary=$o->summary;
			else $o->psummary=$o->summary; //保留完整专辑简介
			require(get_style_file('special',$style));
		}
	}
}
?>