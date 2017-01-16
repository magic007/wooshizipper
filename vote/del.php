<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php");
$conn=link_data();
$query="delete from ".TB_PREFIX."title where id='".intval($_GET["id"])."'";
$result=$conn->query($query);
echo "<script language='javascript'>alert('主题删除成功!');history.go(-1);</script>";
?>
</body></html>