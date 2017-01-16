<?php
if(URLREWRITE)
{?>
<!--如果采用URL重写，调用图文链接地址形式如下:html/aboutus/，其中get_menuName()函数获得栏目或频道英语名称。-->
<span><?php echo $o->content ?></span>
<?php
}
else
{?>
<span><?php echo $o->content ?></span>
<?php
}
?>