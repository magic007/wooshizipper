<?php
if(URLREWRITE)
{?>
<dl><dd><a href='<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html' target='_blank'><?php echo $o->title ?></a></dd></dl>
<?php
}
else
{?>
<dl><dd><a href='<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>' target='_blank'><?php echo $o->title ?></a></dd></dl>
<?php
}
?>