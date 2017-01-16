<?php
function index()
{}
function checkusername()
{
	global $isUser,$db,$request,$user;
	$username = trim($request['username']);
	if(!empty($username))
	{
		$sql="select count(*) from ".TB_PREFIX."user where username='".$request['username']."'";
		$isUser = $db->get_var($sql);
		if($isUser>0)
		{
			echo '该用户名已存在,请更换一用户名!';
			exit;
		}
		else
		{	
			echo '恭喜！此用户名可以注册。';
			exit;	
		}
	}
	else
	{
		echo '用户名不能为空';
		exit;
	}
}
function reg()
{
	global $db,$params,$request;
	if(!empty($request['username']))
	{
		require(ABSPATH.'/admini/models/user.php');
		$user = new user();
		//验证	
		validates_presence_of('username','昵称');	
		$user->addnew();
		//必填字段
		$user->get_request($request);
		$user->pwd = sha1($request['pwd']);
		$user->role = 1;
		$user->dtTime=date('Y-m-d H:i:s');
		$user->ip=$_SERVER['REMOTE_ADDR'];
		//可选字段
	
		//$user->qq=$request['qq'];	
		//$user->telephone=$request['telephone'];
		//$user->homepage=$request['homepage'];
		//$user->address=$request['address'];
		//$user->company=$request['company'];

		if($user->save())
		{
			echo '<script language="javascript">alert("恭喜，注册成功！");history.back(1);</script>';
			redirect(get_root_path().'/');
		}
		else
		{
			echo '<script language="javascript">alert("对不起，注册失败功！");history.back(1);</script>';
		}
	}
}
function login()
{
	global $request;
	if(!empty($request['username']))
	{
		if(checkPwd($request['username'],$request['pwd'],$flag=false))
		{
		if(empty($request['url']))
			 echo "<script language='javascript'>alert('登录成功，您现在可以以会员的身份浏览网页!');window.history.go(-1);</script>";		
		else
		redirect($request['url']);
		}
		else
		echo '<script language="javascript">alert("用户名或密码错误,登录失败!");history.back(1);</script>';
	}
}
function edit()
{
	global $user,$db,$request;
	$sql='select * from '.TB_PREFIX.'user where id='.$_SESSION[TB_PREFIX.'user_ID'];
	$user = $db->get_row($sql);
	if($_POST)
	{
		require(ABSPATH.'/admini/models/user.php');
		$user = new user();
		$user->id=$request['cid'];
		$user->get_request($request);
		$user->pwd = sha1($request['pwd']);
		if($user->save())
		{
			redirect('?m=user');
		}
		else
		{
			echo '修改失败！';
		}
	}
}
function checkPwd($username,$pwd,$flag=false)
{
	global $db;
	$username=get_str($username);
	$sql="select * from ".TB_PREFIX."user where username='$username' limit 1";
	$rst=$db->get_row($sql);
	if($rst)
	{
		if ($rst->pwd==sha1($pwd))
		{
			$_SESSION[TB_PREFIX.'user_email']=$rst->email;
			$_SESSION[TB_PREFIX.'user']=$rst->username;
			$_SESSION[TB_PREFIX.'nick'] = $rst->nickname;
			$_SESSION[TB_PREFIX.'user_roleId'] = $rst->role;
			$_SESSION[TB_PREFIX.'user_ID'] = $rst->id;

			if($flag)
			{
				$cookieTime =86400;
				
				setcookie('dt_username',$rst->username,time()+$cookieTime);
				setcookie('dt_pwd',$rst->pwd,time()+$cookieTime);
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
?>