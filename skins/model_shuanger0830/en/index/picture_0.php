<?php
if(URLREWRITE)
{?>
<!--�������URL��д������ͼƬ���ӵ�ַ��ʽ����:html/picture/view_22.html������get_menuName()���������Ŀ��Ƶ��Ӣ�����ơ�-->
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