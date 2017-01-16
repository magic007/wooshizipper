<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<div id="stuffbox">
	<ul id="picList">
	<?php picture_list() ?>
	</ul>
	<div class="clear"></div>
	<div  id="articeBottom"><?php global $sb; if($sb->results) echo $sb->get_pager_show()?></div>
</div>
<?php
function picture_list()
{
	global $db,$params,$request,$sb,$pfileName;
	$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."picture where channelId=$params[id]",'ordering desc',$db,pictureCount);
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			if(URLREWRITE)
			{
				?>
				<li><a href="/html/<?php echo $pfileName?>/view_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" /></a><div><a href="/html/<?php echo $pfileName?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['title'] ?></a></div></li>
				<?php
			}
			else
			{
				?>
				<li><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id']?>&a=view&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" /></a><div><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id']?>&a=view&r=<?php echo $rst['id'] ?>"><?php echo $rst['title'] ?></a></div></li>
				<?php
			}
		}
	}
	else
	{
		echo '暂无图片。';
	}
}
?>