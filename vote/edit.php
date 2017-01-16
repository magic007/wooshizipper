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
   if ($_POST["actions"]=="1")
   {
      $titles=trim($_POST["topic"]);
	  if (empty($titles))
	  {
	     echo "<script language='javascript'>alert('主题不能为空!');history.go(-1);</script>";
		 exit;
	  }
	  else
	  {
	     $conn=link_data();
		 $query="update ".TB_PREFIX."title set title='".$titles."',choice='".$_POST["choice"]."' where id='".$_POST["ids"]."'";
		 $conn->query("SET NAMES 'utf8'");
		 $result=$conn->query($query);
		 echo "<script language='javascript'>alert('主题更新成功');history.go(-1);</script>";
	  }
   }	
   else	 
   {
top("修改主题!");
top1("请在下面修改您选择的主题!");
$conn=link_data();
$query="select * from ".TB_PREFIX."title where id=".intval($_GET["id"]);
$conn->query("SET NAMES 'utf8'");
$result=$conn->query($query);
$row = $result->fetch_assoc();
?>
<form name="form1" method="post" action="">
  <table width="70%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
    <tr>
      <td width="24%" height="45" bgcolor="#CCCCCC"><div align="center">主题内容</div></td>
      <td width="76%" valign="bottom" bgcolor="#FFFFFF">
	  <textarea name="topic" cols="40" rows="4" id="topic"><?php echo $row["title"];?></textarea>
      小于 200字</td>
    </tr>
    <tr>
      <td valign="top" bgcolor="#CCCCCC"><div align="center">多选/单选</div></td>
      <td valign="bottom" bgcolor="#FFFFFF">
        <? if ($row["choice"]=="a")
		{
           echo "<input name='choice' type='radio' value='a' checked>单选";
           echo "<input type='radio' name='choice' value='b'>多选";
		}
		else
		{
           echo "<input name='choice' type='radio' value='a'>单选";
           echo "<input type='radio' name='choice' value='b' checked>多选";
		} 
		?></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td colspan="2" valign="bottom"><div align="center">
          <input type="submit" name="Submit" value="提交">
&nbsp;&nbsp;
          <input type="reset" name="Submit2" value="重置">
          <input name="actions" type="hidden" id="actions" value="1">
          <input name="ids" type="hidden" id="ids" value="<?php echo $_GET["id"];?>">
</div></td>
    </tr>
  </table>
</form>
<br><br><br>
<?
bottom();
}
}
?>
</body></html>