<?php
function dt_jobs($channelId,$n=0,$strcount=0,$style=0,$isellipsis=false,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/jobs_'.$style.'.php') or die('dt_jobs 函数参数错误。没有找到 jobs_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."jobs` where and channelId=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."jobs` where and channelId=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{	
			if(!$isellipsis&&$strcount>0)$o->jobName=cnSubstr($o->jobName,0,$strcount-1); //截取工作名称
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->jobName)>$strcount)$o->jobName=cnSubstr($o->jobName,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->jobName)<$strcount)$o->jobName=$o->jobName;
			else $o->pjobName=$o->jobName;    //保留完整工作名
			require(get_style_file('jobs',$style));
		}
	}
}
?>