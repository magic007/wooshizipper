<?php
if(URLREWRITE)
{?>
<dl><dt><a href='<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html' target='_blank'><?php echo $o->title ?></a></dt></dl>
<?php
}
else
{?>
<dl><dt><a href='<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>' target='_blank'><?php echo $o->title ?></a></dt></dl>
<?php
}
?>