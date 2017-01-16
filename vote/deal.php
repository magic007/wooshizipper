<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php");
if (session_is_registered("votes"))
{
   echo "<script language='javascript'>alert('您已经投过票了！');window.close();</script>";
   exit;
}
else
{
   $conn=link_data();
   $query1="select choice from ".TB_PREFIX."title where id=".intval($_GET["id"])."";
   $conn->query("SET NAMES 'utf8'");
   $result1=$conn->query($query1);
   $row1=$result1->fetch_assoc();
   $my=$_POST["choice"];
   if ($row1["choice"]=="a")
   {
      $query="update ".TB_PREFIX."choice set num=num+1 where id=".$my;
	  $conn->query("SET NAMES 'utf8'");
      $result=$conn->query($query);
      session_register("votes");
	  echo "<script language='javascript'>alert('投票成功！');window.close();</script>";
   }
   elseif ($row1["choice"]=="b")
   {
      for ($i=0;$i<count($my);$i++)
      {
         $query="update ".TB_PREFIX."choice set num=num+1 where id=".$my[$i];
		 $conn->query("SET NAMES 'utf8'");
	     $result=$conn->query($query);
	     session_register("votes");
      }
	  echo "<script language='javascript'>alert('投票成功！');window.close();</script>";
   }
}
?>
</body></html>