<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?
require_once("const.php");
if (!(session_is_registered("admins")))
{
   echo "<script language='javascript'>alert('您还未登录！');window.location.href='admin.php';</script>";
   exit;
}
else
{
   if($_POST["actions"]=="1")
   {
      $choice=trim($_POST["choice"]);
	  if (empty($choice))
	  {
	     echo "<script language='javascript'>alert('选项内容不能为空!');history.go(-1);</script>";
	  }
	  else
	  {
	     $conn=link_data();
		 $query1="update ".TB_PREFIX."choice set choice='".$choice."',isdefault='".$_POST["currents"]."' where id=".$_POST["ids"];
		 $conn->query("SET NAMES 'utf8'");
		 $result1=$conn->query($query1);
		 echo "<script language='javascript'>alert('修改成功！');history.go(-1);</script>";
	  }
   }
   else
   {
      top("修改选项内容");
      top1("请在下面修改当前选项内容");
      $conn=link_data();
      $query="select * from ".TB_PREFIX."choice where id=".intval($_GET["id"]);
	  $conn->query("SET NAMES 'utf8'");
      $result=$conn->query($query);
      $row=$result->fetch_assoc();
?>
<form name="form1" method="post" action="">
  <table width="70%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
    <tr>
      <td width="34%" bgcolor="#CCCCCC"><div align="center">选项内容
      </div></td>
      <td width="66%" bgcolor="#FFFFFF"><input name="choice" type="text" class="inputs" id="choice" value="<?php echo $row["choice"];?>" size="30"></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div align="center">是否默认</div></td>
      <td bgcolor="#FFFFFF">
	  <?
	  if ($row["isdefault"]=="a")
	  {
	  ?>
        <input type="radio" name="currents" value="a" checked>
是
<input type="radio" name="currents" value="b">
否
<?
}
else
{
?>
<input type="radio" name="currents" value="a">
是
<input type="radio" name="currents" value="b" checked>
否
<?
}
?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="提交">&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="重置">
        <input name="actions" type="hidden" id="actions" value="1">
        <input type="hidden" name="ids" value="<?php echo $_GET["id"];?>">
</div></td>
    </tr>
  </table>
</form>
<?
}
}
?>
</body></html>