<?php
require_once('../config/dt-config.php');
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
function top($title)
{
?>
<style type="text/css">
<!--
body,td,th {
	font-family: 宋体;
	font-size: 12px;
}
-->
</style>
<link href="css.css" rel="stylesheet" type="text/css" />
<?php
}
function top1($topic)
{
?>
<table width="70%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="18" bgcolor="#FFFFFF"><div align="center"><a href="manage.php" class="top">管理首页</a></div></td>
    <td bgcolor="#CCCCCC"><div align="center"><a href="edit_manage.php" class="top">帐号更改</a></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><a href="add.php" class="top">添加主题</a></div></td>
    <td bgcolor="#FFFFFF"><div align="center"></div>
    <div align="center"><a href="logout.php" class="top">退出管理</a></div></td>
  </tr>
</table>
<table width="70%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="129">
      <div align="center"><?php echo $topic;?></div></td>
  </tr>
</table>
<?php
}
function link_data()
{
    $db = new mysqli(DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DBNAME); 
   if (!$db)
     throw new Exception('无法链接数据库');
   else
     return $db;
}
function bottom()
{
?>
<table width="68%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="23" bgcolor="#FFFFFF"><div align="center">2007 CopyRight Reserve XMLol在线</div></td>
  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF"><div align="center">技术支持：<a href="mailto:zl0372@126.com" class="red">日落</a> 欢迎光临我们的站点：<a href="http://www.realure.cn" class="red">http://www.realure.cn</a></div></td>
  </tr>
</table>
<?php
}
?>
