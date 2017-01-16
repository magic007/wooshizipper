<?php
function dt_download($channelId,$n=0,$strcount=0,$style=0,$isellipsis=true,$ordering='ordering')
{
	global $db;
	file_exists(get_abs_skin_root().'index/download_'.$style.'.php') or die('dt_download 函数参数错误。没有找到 download_'.$style.'.php 文件');
	if($n == 0)
		$results=$db->get_results("select * from `".TB_PREFIX."download` where channelId=$channelId order by ".$ordering." desc");
	else
		$results=$db->get_results("select * from `".TB_PREFIX."download` where channelId=$channelId order by ".$ordering." desc limit $n");
	if($results)
	{
		foreach($results as $o)
		{			
			if(!$isellipsis&&$strcount>0)$o->psoftwareName=cnSubstr($o->psoftwareName,0,$strcount-1); //截取软件名称
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->psoftwareName)>$strcount)$o->psoftwareName=cnSubstr($o->psoftwareName,0,$strcount-1)."...";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->psoftwareName)<$strcount)$o->psoftwareName=$o->psoftwareName;
			else $o->ppsoftwareName=$o->psoftwareName; //保留完整软件名称
			require(get_style_file('download',$style));
		}
	}
}
?>