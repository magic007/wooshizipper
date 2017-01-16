<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once("const.php");
$conn=link_data();
$query="select * from ".TB_PREFIX."title where id=".intval($_GET["id"]);
$conn->query("SET NAMES 'utf8'");
$result=$conn->query($query);
$row=$result->fetch_assoc();
?>
<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
<script language="javascript">
function openwin(url,a,b){
var
newwin=window.open(url,"dddddd","toolbar=no,location=no,top=10,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width="+a+",height="+b+"");
newwin.focus();
return(newwin);
}
</script>

<table width="220"  border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000"><form name="form1" method="post" target="_blank" action="deal.php?id=<?php echo $_GET["id"];?>">
  <tr>
    <td width="231" height="152" valign="top" bgcolor="#FFFFFF"><table width="100%"  border="0" cellspacing="4" cellpadding="0">
      <tr>
        <td height="28" bgcolor="#EFEFEF">
		<div align="left"><span class="style1">
              <?php echo $row["title"];?>
              
      </span></div></td>
      </tr>
    </table>
	<?php
	$query1="select * from ".TB_PREFIX."choice where extends=".intval($_GET["id"]);
	$conn->query("SET NAMES 'utf8'");
	$result1=$conn->query($query1);
	if (mysqli_num_rows($result1)==0)
	{
	   echo "<script language='javascript'>alert('您还没有添加选项，目前无法查看!');window.close();</script>";
	   exit;
	}
	else
	{
	   while($row1=$result1->fetch_assoc())
	   {
	      if ($row1["isdefault"]=="a")
		  {
		     $de="checked";
		  }
		  else
		  {
		     $de="";
		   }
     ?> 
        <table width="100%"  border="0" cellspacing="4" cellpadding="0">
          <tr>
            <td width="13%">
			<?php
			if ($row["choice"]=="a")
               echo "<input name=choice type=radio value=".$row1["id"]." ".$de.">";
			elseif ($row["choice"]=="b")
			   echo "<input name=choice[] type=checkbox value=".$row1["id"]." ".$de.">";
			?>
			   
		    </td>
            <td width="87%"><div align="left"><font class="style1">
              <?php echo $row1["choice"];?>
            </font></div></td>
          </tr>
    </table> 
	<?php
	}
	}
	?> <input name="typ" type="hidden" id="typ" value="1">	<table width="100%"  border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td><div align="center">
              <input type="image" src="image/button1.gif" width="50" height="20">
            &nbsp;&nbsp;<a href="show.php?id=<?php echo $_GET["id"];?>" target="_blank"><img src=image/button2.gif width=50 height=20 border=0></a></div></td>
      </tr>
    </table></td>
  </tr>
</form></table><?php echo $ch;?></body></html>

