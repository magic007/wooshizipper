<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php"); 
session_register("logincode");
$_SESSION["logincode"]=rand("1000","9999");
top("欢迎光临Deepthroat——投票管理系统");
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="pass.php">
  <table width="31%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CECFCE">
    <tr>
      <td height="34" bgcolor="#CCCCCC"><div align="center">管理登陆</div></td>
    </tr>
  </table>
  <table width="31%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
      <td bgcolor="#FFFFFF"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="3">
        <tr>
          <td width="32%"><div align="right">管理帐号：</div></td>
          <td colspan="2"><input name="names" type="text" class="inputs" id="names"></td>
        </tr>
        <tr>
          <td><div align="right">管理密码：</div></td>
          <td colspan="2"><input name="password" type="password" class="inputs" id="password"></td>
        </tr>
        <tr>
          <td><div align="right">验证码：</div></td>
          <td width="20%"><input name="codes" type="text" class="inputs" id="codes" size="6" value=""></td>
          <td width="48%"><span style="color: #FF0000">验证码：</span><?php echo $_SESSION["logincode"]; ?></td>
        </tr>
        <tr>
          <td colspan="3">            <div align="center">
              <input name="Submit" type="submit" class="inputs" value="提交">
      &nbsp;&nbsp;
              <input name="Submit2" type="reset" class="inputs" value="重置">
              <input name="actions" type="hidden" id="actions" value="1">
</div></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

