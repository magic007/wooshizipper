<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用新闻链接地址形式如下:html/company/view_22.html，其中get_menuName()函数获得栏目或频道英语名称。-->
<p><b><img src="<?php echo get_skin_root() ?>images/arrow.gif" alt=">" /> <a class="title" href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><?php echo $o->title ?></a></b><br />
<?php
}
else
{?>
<p><b><img src="<?php echo get_skin_root() ?>images/arrow.gif" alt=">" /> <a class="title" href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>"><?php echo $o->title ?></a></b><br />
<?php
}
?>