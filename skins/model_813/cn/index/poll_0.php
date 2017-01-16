<?php 
if(URLREWRITE) 
	$url="/html/".get_menuName($channelId)."/view_".$r.".html";
else
	$url="/?p=".$channelId."&a=view&r=".$r;
?>
<form name="vote" method="post" action="/?p=<?php echo $channelId ?>&a=index&r=<?php echo $r ?>&vtype=<?php echo $poll_cateaory->choice?>">
<table cellSpacing=0 cellPadding=0 width="100%" border=0>
<tbody>
<tr>
<td align=left colSpan=2 height=20>&nbsp;&nbsp;<?php echo $poll_cateaory->title ?></td>
</tr>
<?php
if($results)
{
	if($poll_cateaory->choice=='a')
	{
		foreach($results as $o)
		{
		?>
		<tr><td align=left colSpan=2 height=20><input type="radio" name="choice" value="<?php echo $o->id ?>" <?php echo $o->isdefault=='a'?checked:'';?>><?php echo $o->choice ?></td></tr>
		
		<?php
		}
	}
	else if($poll_cateaory->choice=='b')
	{
		foreach($results as $o)
		{
		?>
		<tr><td align=left colSpan=2 height=20><input type="checkbox" name="choice[]" value="<?php echo $o->id ?>" <?php echo $o->isdefault==a?checked:'';?>><?php echo $o->choice ?></td></tr>
		<?php
		}
	}
}
else
{
	echo '您的投票标题没有任何选项';
}
?>
<tr>
<td align=middle height=30><input type="submit" value="投票">&nbsp;&nbsp;&nbsp;<input type="button" value="查看" onclick="window.location.href='<?php echo $url; ?>'"></td></tr></tbody></table></form>