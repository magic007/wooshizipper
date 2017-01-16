<?php
if(URLREWRITE)
{?>
<td><a href="<?php echo get_root_path()?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html">
<img src="<?php echo $o->smallPic?>" /><br /><?php echo $o->title ?></a></td>
<?php
}
else
{?>
<td><a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId?>&a=view&r=<?php echo $o->id?>">
<img src="<?php echo $o->smallPic?>" /><br /><?php echo $o->title ?></a></td>
<?php
}
?>