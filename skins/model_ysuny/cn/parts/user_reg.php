<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<script language="JavaScript" type="text/javascript" src="<?php echo get_root_path() ?>inc/js/form/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_root_path() ?>inc/js/form/FV_onBlur.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_root_path() ?>inc/js/form/valiUser.js"></script>
<script type="text/javascript">
<!--
FormValid.showError = function(errMsg,errName,formName) {
	for (key in FormValid.allName) {
		document.getElementById('errMsg_'+FormValid.allName[key]).innerHTML = '';
	}
	for (key in errMsg) {
		document.getElementById('errMsg_'+errName[key]).innerHTML = errMsg[key];
	}
}
-->
</script>
<div id="stuffbox">
<p><b>用户注册</b><br />
</p>
<table border="0" id="tbguest">
<?php
if(URLREWRITE)
{
	?>
	<form name="form1" method="post" action="/?m=user&a=reg" onsubmit="return validator(this)">
	<?php
}
else
{
	?>
	<form name="form1" method="post" action="<?php echo get_root_path() ?>/?m=user&a=reg" onsubmit="return validator(this)">
	<?php
}
?>
  <tr>
    <td><label for="username">用户名*</label></td>
    <td><input name="username" id="username" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" onkeyup="value=value.replace(/[\W]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" onblur="return viliUser(this.value)"/><span id="authentication" style="color:#FF0000;"></span></td>
  </tr>
  <tr>
    <td><label for="email">Email*</label></td>
    <td><input name="email" id="email" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" valid="required|isEmail" errmsg="Email不能为空|Email格式不对!" /><span id="errMsg_email" style="color:#FF0000"></span></td>
  </tr>
  <tr>
    <td><label for="nickname">昵称</label></td>
    <td><input name="nickname" id="nickname" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td><label for="pwd">密码*</label></td>
    <td><input name="pwd" id="pwd" size="20" type="password" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" valid="required" errmsg="密码不能为空!" /><span id="errMsg_pwd" style="color:#FF0000"></span></td>
  </tr>
  <tr>
    <td><label for="repwd">重复密码*</label></td>
    <td><input name="repwd" id="repwd" size="20" type="password" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" valid="eqaul" eqaulName="pwd" errmsg="两次密码不同!" /><span id="errMsg_repwd" style="color:#FF0000"></span></td>
  </tr>
  <tr>
    <td><label for="detail">资金量</label></td>
    <td><input name="detail1" id="detail1" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td><label for="detail2">联系电话</label></td>
    <td><input name="detail2" id="detail2" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td><label for="detail3">手机</label></td>
    <td><input name="detail3" id="detail3" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td><label for="detail4">资金性质</label></td>
    <td><input name="detail4" id="detail4" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td><label for="detail5">资金可用期</label></td>
    <td><input name="detail5" id="detail5" size="20" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
	<td colspan="2"><input type="submit" name="submit" value="保存" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'"/></td>
  </tr>
</form>
</table>
</div>