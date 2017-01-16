<?php
if(URLREWRITE)
{?>
<li><a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" border="0" /><span><?php echo $o->name?></span></a></li>
<?php
}
else
{?>
<li><a href="<?php echo get_root_path()?>/?p=<?php echo $channelId?>&c=<?php echo $o->categoryId?>&a=view&r=<?php echo $o->id?>"><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" border="0" /><span><?php echo $o->name?></span></a></li>
<?php
}
?>