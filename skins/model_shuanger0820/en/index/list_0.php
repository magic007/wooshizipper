<?php
if(URLREWRITE)
{?>
<!--�������URL��д�������������ӵ�ַ��ʽ����:html/company/view_22.html������get_menuName()���������Ŀ��Ƶ��Ӣ�����ơ�-->
<li><a href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><?php echo $o->title ?></a></li>
<?php
}
else
{?>
<li><a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>"><?php echo $o->title ?></a></li>
<?php
}
?>