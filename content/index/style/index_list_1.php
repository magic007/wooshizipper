<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用新闻链接地址形式如下:html/company/view_22.html，其中get_menuName()函数获得栏目或频道英语名称。-->
<li><span style="float:right;"><?php echo date('Y-m-d',strtotime($o->dtTime)) ?></span><a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><?php echo $o->title ?></a></li>
<?php
}
else
{?>
<li><span style="float:right;"><?php echo date('Y-m-d',strtotime($o->dtTime)) ?></span><a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>"><?php echo $o->title ?></a></li>
<?php
}
?>