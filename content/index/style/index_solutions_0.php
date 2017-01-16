<?php
if(URLREWRITE)
{?>
<li>&middot;<a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><?php echo $o->title ?></a></li>
<?php
}
else
{?>
<li>&middot;<a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>"><?php echo $o->title ?></a></li>
<?php
}
?>