<div id="stuffbox">
	<ul id="videoList">
	<?php video_list() ?>
	</ul>
	<div class="clear"></div>
	<div  id="articeBottom"><?php global $sb; echo $sb->get_pager_show()?></div>
</div>
<?php
function video_list()
{
	global $db,$params,$sb,$pfileName;
	$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."video where channelId=$params[id]",'ordering desc',$db,videoCount);
	$rsts =$db->get_results($sql);
	if($rsts)
	{
		foreach($rsts as $rst)
		{
			if(URLREWRITE)
			{
				?>		
				<li><img src="<?php echo get_root_path()."$rst->picture" ?>" /><p><a href="/html/<?php echo $pfileName?>/view_<?php echo $rst->id ?>.html"><?php echo $rst->title ?></a></p></li>
				<?php
			}
			else
			{
				?>		
				<li><img src="<?php echo get_root_path()."$rst->picture" ?>" /><p><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params[id]?>&a=view&r=<?php echo $rst->id ?>"><?php echo $rst->title ?></a></p></li>
				<?php
			}
		}
	}
	else
	{
		echo '暂无视频。';
	}
	
}
?>
