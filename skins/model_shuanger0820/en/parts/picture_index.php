<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
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
	if(URLREWRITE)
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."picture` order by case ordering when 0 then id else ordering end desc) as `picture` where channelId=$params[id]",'ordering desc',$db,pictureCount,true,'/');
	else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."picture` order by case ordering when 0 then id else ordering end desc) as `picture` where channelId=$params[id]",'ordering desc',$db,pictureCount,true,'./');
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			if(URLREWRITE)
			{
				?>
				<li><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName?>/view_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" /></a><div><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['title'] ?></a></div></li>
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