<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php");
top("查看投票结果");
$conn=link_data();
$query1="select * from ".TB_PREFIX."title where id=".intval($_GET["id"]);
$conn->query("SET NAMES 'utf8'");
$result1=$conn->query($query1);
$row1=$result1->fetch_assoc();
?>
<script language="javascript"></script>
<style type="text/css">
<!--
body {
	background-color: #EEEEEE;
}
.style4 {color: #CC0000}
.style5 {color: #000000}
.style7 {color: #666666}
-->
</style><table width="80%"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000">
  <tr>
    <td height="249" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="48" bgcolor="#CECFCE"><div align="center" class="style5">关于“<?php echo $row1["title"]?> ”的主题投票结果如下： </div></td>
      </tr>
    </table>
      <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="179">
            <?php
			$query2="select * from ".TB_PREFIX."choice where extends=".intval($_GET["id"]);
			$conn->query("SET NAMES 'utf8'");
			$result2=$conn->query($query2);
			$query3="select sum(num) as nums from ".TB_PREFIX."choice where extends=".intval($_GET["id"]);
			$conn->query("SET NAMES 'utf8'");
			$result3=$conn->query($query3);
			if($row3=$result3->fetch_assoc())
			{
			   $nums=$row3["nums"];
			}
			while ($row2=$result2->fetch_assoc())
			{
			?>
            <table width="100%"  border="0" cellpadding="0" cellspacing="4" bgcolor="#FFFFFF">
              <tr>
                <td width="19%" height="21"><span class="style7">
                  <?php echo $row2["choice"];?></span></td>
                <td width="61%"><img src="dot1.gif" width="<?php echo number_format((($row2["num"]/$nums)*100),2);?>%" height="15"></td>
                <td width="9%"><div align="right"><span class="style4"><?php echo number_format((($row2["num"]/$nums)*100),2);?></span>%</div></td>
                <td width="11%"><div align="right"><span class="style4"><?php echo $row2["num"];?></span>人</div></td>
              </tr>
            </table>
<?php
}
?>
          </td>
        </tr>
      </table>
      <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#FFFFFF"><div align="right">共有<font color="#CC0000"><?php echo $nums;?></font>人参与投票</div></td>
        </tr>
      </table></td>
  </tr>
</table>
<div align="center"><br>
  <br>
  <a href="javascript:window.close()" class="red">关闭窗口</a><br>
  <br>
</div>
<center>
  <a href="http://www.realure.cn" class="top">Deepthroat版权所有</a> 技术支持:<a href="mailto:zl0372@126.com" class="red">日落</a>
</center>
</body></html>

