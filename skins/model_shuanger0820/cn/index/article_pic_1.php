<?php
if(URLREWRITE)
{?>
<!--�������URL��д������ͼ�����ӵ�ַ��ʽ����:html/aboutus/������get_menuName()���������Ŀ��Ƶ��Ӣ�����ơ�-->
<span><?php echo $o->content ?></span>
<?php
}
else
{?>
<span><?php echo $o->content ?></span>
<?php
}
?>