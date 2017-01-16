<?php
@session_start();
@error_reporting(E_ALL ^ E_NOTICE);
require(dirname(__FILE__).'/../config/dt-config.php');
require(ABSPATH.'/inc/function.php');
if(file_exists(ABSPATH.'/inc/common.php'))require_once(ABSPATH.'/inc/common.php');
require(ABSPATH.'/inc/class.database.php');

function checkPwd($username,$pwd,$flag=false)
{
	global $db;
	$username=get_str($username);
	
	if(!checkSqlStr($username))
	$sql="select * from ".TB_PREFIX."user where username='$username' limit 1";
	else
	echo '非法字符';
	
	$rst=$db->get_row($sql);
	if($rst)
	{

		if ($rst->pwd==sha1($pwd)) {
			$_SESSION[TB_PREFIX.'admin_email']=$rst->email;
			$_SESSION[TB_PREFIX.'admin_name']=$rst->username;
			$_SESSION[TB_PREFIX.'admin_nickname'] = $rst->nickname;
			$_SESSION[TB_PREFIX.'admin_roleId'] = $rst->role;
			$_SESSION[TB_PREFIX.'admin_userID'] = $rst->id;

			if($flag)
			{
				$cookieTime =86400;
				
				setcookie(TB_PREFIX.'username',$rst->username,time()+$cookieTime);
				setcookie(TB_PREFIX.'pwd',$rst->pwd,time()+$cookieTime);
			}

			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
/**
 * 对验证码进行验证
 */
function checkCode($checkcode)
{
	$verifycode=$_SESSION['verifycode'];
	if ($verifycode != $checkcode)
	{
		return false;
	}
	else
	{
		return true;
	}
}
if($_REQUEST['emsg']==1)
{
	$errorMsg='<font color="#000">您的用户名与密码不符,请再试一次.</font>';
}
if($_REQUEST['emsg']==2)
{
	$errorMsg='<font color="#FF0000">您的验证码有误,请再试一次.</font>';
}
if($_GET['act']=='login')
{
	if(checkPwd($_REQUEST['username'],$_REQUEST['pwd'],$_REQUEST['remamber']))
	{
		if(!checkCode($_REQUEST['checkcode']))
		{
			redirect('login.php?uname='.$_REQUEST['username'].'&emsg=2');
		}
		else
		{

			redirect('index.php');
		}
		
	}
	else
	{

		redirect('login.php?uname='.$_REQUEST['username'].'&emsg=1');
	}
}
if($_GET['act']=='logout')
{
	session_start();
	session_destroy();
	setcookie('username','');
	setcookie('pwd','');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>您正登录网站后台管理系统</title>
<style type="text/css">
<!--
body {
	margin: 0;
	background-color:#006699;
}
#wrapper{
	width: 400px;
	margin: 0 auto;
}
#login{
	height: 270px;
	width: 400px;
	margin: 120px 0 auto 0;   
}
#login_top{
	background: url(../inc/img/login/top.png) no-repeat;
	height: 78px;
}
#login_bg{
	background: url(../inc/img/login/bg.png) repeat-y;
	height:auto;
}
#login_bg ul{
	margin-top:0;
	margin-left:115px;
	margin-bottom:0;
	list-style:none;
}
#login_bg li{
	color:#fff;
	font-size:12px;
	height:32px;
	line-height:32px;
}
.t_input,.c_input { border:#069 1px solid;background-color:#FFFFFF;width:139px;height:14px!important;height /**/:18px;font-size:12px;font-family:Arial}
.c_input{ width:50px;}
#t_service{
	font-size: 12px;
	color:#fff;
	margin-left:35px;
}
#login_bottom{
	background: url(../inc/img/login/bottom.png) no-repeat;
	height:20px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="?act=login">
<!--login-->
<div id="wrapper">
	<div id="login">
		<div id="login_top"></div>
		<div id="login_bg">
		   <ul>
		      <li>用&nbsp;&nbsp;&nbsp;&nbsp;户：<input name="username" type="text" value="<?php echo $_REQUEST['uname'] ?>"  class="t_input" /></li>
			  <li>密&nbsp;&nbsp;&nbsp;&nbsp;码：<input name="pwd" type="password"  class="t_input" maxlength="20" /></li>
			  <li>验证码：<input name="checkcode" type="text" class="c_input" maxlength="6" /><img src="../inc/verifycode.php" /></li>			  
			  <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <input name="Submit" type="submit" class="buttonsubmit" value="登录" />
			  </li>
		   </ul>
		   <div id="t_service"><?php echo $errorMsg ?></div>
		</div>
		<div id="login_bottom"></div>
	</div>
</div>
</form>
<iframe id="noname" src="get_news.php" width="0" height="0" frameborder="0" scrolling="no"></iframe>
</body>
</html>