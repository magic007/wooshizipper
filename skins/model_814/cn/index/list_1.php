<?php
if(URLREWRITE)
{?>
<!--�������URL��д�������������ӵ�ַ��ʽ����:html/company/view_22.html������get_menuName()���������Ŀ��Ƶ��Ӣ�����ơ�-->
<p><b><img src="<?php echo get_skin_root() ?>images/arrow.gif" alt=">" /> <a class="title" href="<?php echo get_root_path() ?>/html/<?php echo get_menuName($o->channelId)?>/view_<?php echo $o->id ?>.html"><?php echo $o->title ?></a></b><br />
<?php
}
else
{?>
<p><b><img src="<?php echo get_skin_root() ?>images/arrow.gif" alt=">" /> <a class="title" href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>&a=view&r=<?php echo $o->id ?>"><?php echo $o->title ?></a></b><br />
<?php
}
?>