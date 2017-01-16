<script language="JavaScript" type="text/javascript">

function letsok()
{
	if(document.form1.username.value=="")
	{
		alert('用户名不能为空！');
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
		document.form1.submit();	
}
</script>
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=userinfo&l=<?php echo $request['l']?>">用户管理</a> → <a href="./?m=system&s=userinfo&a=edit&cid=<?php echo $request['cid']?>&l=<?php echo $request['l']?>">修改用户信息</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form id="form1" name="form1" method="post" action="?m=system&s=userinfo&a=edit&cid=<?php echo $user->id?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改用户档案 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="button" type="button" onclick="letsok()" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="70">用户名</td>
          <td width="861"><input name="username" class="txt" type="text" id="username" readonly value="<?php echo $user->username?>" onchange="xajax_validateUsername(this.value);" /> <font color="Red">*</font></td>
        </tr>		
        <tr>
          <td width="70">Email</td>
          <td width="861"><input name="email" class="txt" type="text" id="email" value="<?php echo $user->email?>" onchange="isEmail(this.value);"/> <font color="Red">*</font><span id="v_email"></span></td>
        </tr>	
        <tr>
          <td width="70">昵称</td>
          <td width="861"><input name="nickname" class="txt" type="text" id="nickname" value="<?php echo $user->nickname?>" /></td>
        </tr>	
        <tr>
          <td width="70">密码</td>
          <td width="861"><input name="pwd" class="txt" type="text" id="pwd" /> (不修改，则留空.请输入20位以内的字母或数字)<span id="pwd_info"></span></td>
        </tr>	
        <tr>
          <td width="70">权限</td>
          <td width="861">
		  <?php user::user_power_list_select('role',intval($user->role),false)?>
    		<input name="myok" type="hidden" id="myok" value="0" />
		  </td>
        </tr>
        <tr>
          <td width="70">QQ</td>
          <td width="861"><input name="detail1" value="<?php echo $user->detail1?>" class="txt" type="text" id="detail1" /></td>
        </tr>	
        <tr>
          <td width="70">联系电话</td>
          <td width="861"><input name="detail2" value="<?php echo $user->detail2?>" class="txt" type="text" id="detail2" /></td>
        </tr>	
        <tr>
          <td width="70">手机</td>
          <td width="861"><input name="detail3" value="<?php echo $user->detail3?>" class="txt" type="text" id="detail3" /></td>
        </tr>	
        <tr>
          <td width="70">公司名称</td>
          <td width="861"><input name="detail4" value="<?php echo $user->detail4?>" class="txt" type="text" id="detail4" /></td>
        </tr>	
        <tr>
          <td width="70">地址</td>
          <td width="861"><input name="detail5" value="<?php echo $user->detail5?>" class="txt" type="text" id="detail5" /></td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>