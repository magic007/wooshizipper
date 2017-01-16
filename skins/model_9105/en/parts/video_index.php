<div id="stuffbox">
	<ul id="videoList">
	<?php video_list() ?>
	</ul>
	<div class="clear"></div>
	<div  id="articeBottom"><?php global $sb; if($sb->results)
echo $sb->get_en_pager_show()?></div>
</div>
<?php
function video_list()
{
	global $db,$params,$sb,$pfileName;
	if(URLREWRITE)
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."video` order by case ordering when 0 then id else ordering end desc) as `video` where channelId=$params[id]",'ordering desc',$db,videoCount,true,'/');
	else
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."video` order by case ordering when 0 then id else ordering end desc) as `video` where channelId=$params[id]",'ordering desc',$db,videoCount,true,'./');
	$rsts =$db->get_results($sql);
	if($rsts)
	{
		foreach($rsts as $rst)
		{
			if(URLREWRITE)
			{
				?>		
				<li><img src="<?php echo get_root_path()."$rst->picture" ?>" /><p><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName?>/view_<?php echo $rst->id ?>.html"><?php echo $rst->title ?></a></p></li>
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
		echo 'none vedio。';
	}
	
}
?>
