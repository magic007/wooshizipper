<?php
function dt_guestbook($channelId,$n=0,$strcount=0,$strcountl=0,$style=0,$isellipsis=true)
{
	global $db;
	file_exists(get_abs_skin_root().'index/guestbook_'.$style.'.php') or die('dt_guestbook 函数参数错误。没有找到 guestbook_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."guestbook` where auditing=1 and channelId=$channelId order by dtTime desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."guestbook` where auditing=1 and channelId=$channelId order by dtTime desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->pcontent=cnSubstr($o->pcontent,0,$strcount-1); //截取留言
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->pcontent)>$strcount)$o->pcontent=cnSubstr($o->pcontent,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->pcontent)<$strcount)$o->pcontent=$o->pcontent;
			else $o->ppcontent=$o->pcontent; //保留完整留言
			if(!$isellipsis&&$strcountl>0)$o->pcontent1=cnSubstr($o->pcontent1,0,$strcountl-1); //截取回复
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->pcontent1)>$strcountl)$o->pcontent1=cnSubstr($o->pcontent1,0,$strcountl-1)."...";
			elseif($isellipsis&&$strcountl>0&&cnStrLen($o->pcontent1)<$strcountl)$o->pcontent1=$o->pcontent1;
			else $o->ppcontent1=$o->pcontent1; //保留完整回复
			require(get_style_file('guestbook',$style));
		}
	}
}
?>