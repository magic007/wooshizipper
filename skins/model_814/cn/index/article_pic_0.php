<img src="<?php echo get_root_path().$o->smallPic?>" alt="<?php echo $o->pageName?>" />
<p><strong><?php echo $o->pageName?></strong><br />
<?php
if(URLREWRITE)
{?>
<!--�������URL��д������ͼ�����ӵ�ַ��ʽ����:html/aboutus/������get_menuName()���������Ŀ��Ƶ��Ӣ�����ơ�-->
<a href="<?php echo get_root_path()?>/html/<?php echo get_menuName($o->channelId)?>/"><?php echo $o->content ?></a></p>
<?php
}
else
{?>
<a href="<?php echo get_root_path()?>/?p=<?php echo $o->channelId ?>"><?php echo $o->content ?></a></p>
<?php
}
?>