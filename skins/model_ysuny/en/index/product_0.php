<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用产品链接地址形式如下:html/products/view_22.html，其中get_menuName()函数获得栏目或频道英语名称。 -->
<li><a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" border="0" /><span><?php echo $o->name?></span></a></li>
<?php
}
else
{?>
<li><a href="<?php echo get_root_path()?>/?p=<?php echo $channelId?>&c=<?php echo $o->categoryId?>&a=view&r=<?php echo $o->id?>"><img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->name?>" border="0" /><span><?php echo $o->name?></span></a></li>
<?php
}
?>