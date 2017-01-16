<script language="JavaScript" type="text/javascript">

function letsok()
{
	if(document.form1.username.value=="")
	{
		alert('用户名不能为空！');
		return;
	}
	if(document.form1.pwd.value=="")
	{
		alert('密码不能为空！');
		return;
	}
	if(document.form1.email.value=="")
	{
		alert('邮箱不能为空！');
		return;
	}
	if(document.form1.myok.value==1)
	{
		alert('请将信息正确填入！');
		return;
	}
	if(document.form1.pwd.value==document.form1.repwd.value)
	{
		document.form1.submit();
	}
	else
	{
		alert('两次密码不相符！');
		return;
	}
}
</script>
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=userinfo">用户管理</a>  → <a href="./?m=system&s=userinfo&a=create&l=<?php echo $request['l']?>">添加用户</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form id="form1" name="form1" method="post" action="?m=system&s=userinfo&a=create&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加用户 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="button" type="button" onclick="letsok()" value="保存"/>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="70">用户名</td>
          <td width="861"><input name="username" class="txt" type="text" id="username" /> <font color="Red">* </font><input type="submit" onclick="form1.action='?m=system&s=userinfo&a=test';form1.submit();" name="Submit" value="检测用户名" /></td>
        </tr>		
        <tr>
          <td width="70">Email</td>
          <td width="861"><input name="email" class="txt" type="text" id="email" /> <font color="Red">*</font><span id="v_email"></span></td>
        </tr>	
        <tr>
          <td width="70">昵称</td>
          <td width="861"><input name="nickname" class="txt" type="text" id="nickname" /></td>
        </tr>	
        <tr>
          <td width="70">密码</td>
          <td width="861"><input name="pwd" class="txt" type="password" id="pwd" /> <font color="Red">*请输入20位以内的字母或数字</font><span id="pwd_info"></span></td>
        </tr>	
        <tr>
          <td width="70">重复密码</td>
          <td width="861"><input name="repwd" class="txt" type="password" id="repwd" /> <font color="Red">*</font></td>
        </tr>	
        <tr>
          <td width="70">权限</td>
          <td width="861">
		  <?php user::user_power_list_select('role',8,false)?>
    		<input name="myok" type="hidden" id="myok" value="0"/>
		  </td>
        </tr>
        <tr>
          <td width="70">QQ</td>
          <td width="861"><input name="detail1" class="txt" type="text" id="detail1" /></td>
        </tr>	
        <tr>
          <td width="70">联系电话</td>
          <td width="861"><input name="detail2" class="txt" type="text" id="detail2" /></td>
        </tr>	
        <tr>
          <td width="70">手机</td>
          <td width="861"><input name="detail3" class="txt" type="text" id="detail3" /></td>
        </tr>	
        <tr>
          <td width="70">公司名称</td>
          <td width="861"><input name="detail4" class="txt" type="text" id="detail4" /></td>
        </tr>	
        <tr>
          <td width="70">地址</td>
          <td width="861"><input name="detail5" class="txt" type="text" id="detail5" /></td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>