<img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->pageName?>" />
<p><strong><?php echo $o->pageName?></strong><br />
<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用图文链接地址形式如下:html/aboutus/，其中get_menuName()函数获得栏目或频道英语名称。-->
<a href="<?php echo get_root_path()?>/html/<?php echo get_menuName($o->channelId)?>/"><?php echo $o->content ?></a></p>
<?php
}
else
{?>
<a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>"><?php echo $o->content ?></a></p>
<?php
}
?>