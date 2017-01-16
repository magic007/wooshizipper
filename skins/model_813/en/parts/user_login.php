<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<div id="stuffbox">
<p><b>用户登录</b><br />
如果您看到此页，可能是因为您没有权限查看本页内容。请您由此登录。
</p>
<table border="0" id="tbguest">
<?php 
if(URLREWRITE)
{
	?>
	<form name="form1" method="post" action="/?m=user&a=login&url=<?php echo urlencode($request['url'])?>">
	<?php
}
else
{
	?>
	<form name="form1" method="post" action="<?php echo get_root_path() ?>/?m=user&a=login&url=<?php echo urlencode($request['url'])?>">
	<?php
}
?>
  <tr>
    <td>用户名：</td>
    <td><input name="username" id="username" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /> <font color="Red">*</font><span id="username_info"></span></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input name="pwd" id="pwd" size="20" type="password" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" onchange="txtIsNull(this.value,'pwd')" /> <font color="Red">*</font><span id="pwd_info"></span></td>
  </tr>
  <tr>
	<td colspan="2"><input type="submit" name="Submit" value="登录" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" />    <a href="<?php echo get_root_path() ?>/?m=user&amp;a=reg">注册</a></td>
  </tr>
</form>
</table>
</div>