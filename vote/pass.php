<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	require_once("const.php");
   $username=trim($_POST["names"]);
   $password=trim($_POST["password"]);
   $codes=trim($_POST["codes"]);
	   if (empty($username) || empty($password) || empty($codes))
      {
	     echo "<script language='javascript'>alert('数据填写不完整');history.go(-1);</script>";
	     exit;
	  }
	  if ($codes!=$_SESSION["logincode"])
      {
	     echo "<script language='javascript'>alert('验证码错误');history.go(-1);</script>";
	     exit;
      }
	  $conn=link_data();
   $sql="select * from ".TB_PREFIX."manage where id=1";
   $conn->query("SET NAMES 'utf8'");
   $result=$conn->query($sql);
  $row=$result->fetch_assoc();
  $names=stripslashes($row["names"]);
  $pass=stripslashes($row["pass"]);
   if ($username != $names)
   {
      echo "<script language='javascript'>alert('帐号错误');history.go(-1);</script>";
	 	exit;
   }
   if (md5($password)!=$pass)
   {
      echo "<script language='javascript'>alert('密码错误');history.go(-1);</script>";
      exit;
   }
   session_register("admins");
   $admins="1";
   echo "<script language='javascript'>alert('登录成功！');window.location.href='manage.php';</script>";  
?>
</body>
</html>