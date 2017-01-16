<?php
if(URLREWRITE)
{?>
<dl>
	<dd>
		<a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html" target=_blank><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" width="121" height="81"></a>
	</dd>
	<dt>
		<a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html" target=_blank><?php echo $o->name?></a>
	</dt>
</dl>
<?php
}
else
{?>
<dl>
	<dd>
		<a href="<?php echo get_root_path()?>/?p=<?php echo $channelId?>&c=<?php echo $o->categoryId?>&a=view&r=<?php echo $o->id?>" target=_blank><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" width="121" height="81"></a>
	</dd>
	<dt>
		<a href="<?php echo get_root_path()?>/?p=<?php echo $channelId?>&c=<?php echo $o->categoryId?>&a=view&r=<?php echo $o->id?>" target=_blank><?php echo $o->name?></a>
	</dt>
</dl>
<?php
}
?>