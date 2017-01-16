<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用图片链接地址形式如下:html/picture/view_22.html，其中get_menuName()函数获得栏目或频道英语名称。-->
<a href="<?php echo get_root_path()?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html">
<img src="<?php echo $o->smallPic?>" /></a>
<?php
}
else
{?>
<a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId?>&a=view&r=<?php echo $o->id?>">
<img src="<?php echo $o->smallPic?>" /></a>
<?php
}
?>