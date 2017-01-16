<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php");
top("添加选项");
top1("请在下面添加主题选项:");
$conn=link_data();
if (!(session_is_registered("admins")))
{
   echo "<script language='javascript'>alert('您还未登录！');window.location.href='admin.php';</script>";
   exit;
}
else
{
   if ($_POST["actions"]=="1")
   {
	     $choice=trim($_POST["choice"]);
		 $extends=trim($_POST["ids"]);
		 $isdefault=trim($_POST["isdefault"]);
		 if (empty($choice))
		 {
		    echo "<script language='javascript'>alert('选项内容不能为空!');history.go(-1);</script>";
	     }
		 else
		 {
		    $query="insert into ".TB_PREFIX."choice(choice,extends,isdefault) values('".$choice."','".$extends."','".$isdefault."')";
			$conn->query("SET NAMES 'utf8'");
			$result=$conn->query($query);
			echo "<meta http-equiv='refresh' content='0;url=add_choice.php?id=".$_POST["ids"]."'>";
			echo "<script language='javascript'>alert('主题添加成功!');history.go(-1);</script>";
	     }
   }
   else{
$query="select * from ".TB_PREFIX."title where id=".intval($_GET["id"]);
$conn->query("SET NAMES 'utf8'");
$result=$conn->query($query);
$row=$result->fetch_assoc();
if ($row["choice"]=="a")
{
   $ch="单选";
}
else
{
   $ch="多选";
}
?>
<script language="javascript">
function test()
{
  if(!confirm('您真的要删除吗？')) return false;
}
</script>
<table width="70%" height="74"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="20" bgcolor="#CCCCCC"><div align="center">当前主题内容</div></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#FFFFFF"><?php echo $row["title"];?></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#FFFFFF"><div align="right">选择类型：<?php echo $ch;?> &nbsp; <a href="edit.php?id=<?php echo $_GET["id"];?>" class="red">修改</a>
    </div></td>
  </tr>
</table>
<form name="form2" method="post" action="">
<table width="70%" height="47"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
  <tr bgcolor="#CCCCCC">
    <td><div align="center">选项内容</div></td>
    <td><div align="center">是否默认选中</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="53%" valign="middle"><div align="center">
        <input name="choice" type="text" class="inputs" id="choice" size="30">
    </div></td>
    <td width="25%" valign="middle"><div align="center">
        <input type="radio" name="isdefault" value="a">
        是
        <input name="isdefault" type="radio" value="b" checked>
      否</div></td>
    <td width="22%" valign="middle"><div align="center">
        <input name="ids" type="hidden" id="ids" value="<?php echo $_GET["id"];?>">
        <input name="actions" type="hidden" id="actions" value="1">
        <input type="submit" name="Submit" value="提交">
      </div></td>
    </tr>
  </table>
</form>
<div align="center">
  <p><font color=red>注意：请确保每个主题只有一个默认选项，否则将出现不可预料的结果！</font>
  </p>
  <p>    
 <?php
$query1="select * from ".TB_PREFIX."choice where extends=".intval($_GET["id"])." order by id desc";
$conn->query("SET NAMES 'utf8'");
$result1=$conn->query($query1);
if (@mysqli_num_rows($result1)==0)
{
   echo "<center><font color=red>暂时还没有选项</font></center>";
}
else
{
   while ($row1=$result1->fetch_assoc())
   {
?>
      
</p>
</div>
<table width="70%" height="44"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
      <tr bgcolor="#CCCCCC">
        <td width="53%" height="20"><div align="center">选项内容</div></td>
        <td width="25%" height="20"><div align="center">是否默认</div></td>
        <td width="22%" height="20"><div align="center">操作</div></td>
  </tr>
<?php 
    if ($row1["isdefault"]=="a")
	   $de="是";
	else
	   $de="否";
?>
      <tr bgcolor="#FFFFFF">
          <td height="21" valign="middle"><?php echo $row1["choice"];?></td>
          <td valign="middle"><?php echo $de;?>
        </td>
        <td valign="middle"><div align="center"><a href="edit_choice.php?id=<?php echo $row1["id"]?>" class="red">修改</a> <a href="del_choice.php?id=<?php echo $row1["id"]?>" onClick="return test()" class="red">删除</a></div></td>
  </tr>
</table>
<?php
}
}
?>
<br /><br /><br />
<?php
bottom();
}
}
?>
</body>