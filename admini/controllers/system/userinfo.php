<?php
function index()
{
	checkme(9);
	global $users,$db,$request;
	$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'user`','id',$db,20);
	$users = new DataTable($sb,'栏目列表');
	$users->add_col('编号','id','db',40,'"$rs[id]"');
	$users->add_col('昵称','nickname','db',140,'"$rs[nickname]"');
	$users->add_col('用户名','username','db',140,'"$rs[username]"');
	$users->add_col('邮箱','email','db',140,'$rs[email]');
	$users->add_col('注册日期','dtTime','db',140,'$rs[dtTime]');
	$users->add_col('操作','edit','text',0,'"<a href=\"./?m=system&s=userinfo&a=destroy&cid=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'你确定要删除么？\');\">[删除]</a>|<a href=\"./?m=system&s=userinfo&a=edit&cid=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
}
function test($isCreate=false)
{
	global $isUser,$db,$request,$user;
	if(!empty($request['username']))
	{
		$sql="select count(*) from ".TB_PREFIX."user where username='".$request['username']."'";
		$isUser = $db->get_var($sql);
		if($isUser>0)
		{
			echo '<script language="javascript">alert("该用户名已存在,请更换一用户名!");history.back(1);</script>';
		}
		else
		{
			if(!$isCreate)
			echo '<script language="javascript">alert("该用户名可以使用!");history.back(1);</script>';
		}
	}
	else 
	{
		echo '<script language="javascript">alert("用户名不能为空!");history.back(1);</script>';
	}
}
function create()
{
	global $db,$request;
	if($_POST)
	{
		checkme(9);
		test(true);
		$user = new user();
		$user->get_request($request);
		$user->pwd = sha1($request['pwd']);
		$user->dtTime = date("Y-m-d H:i:s");

		$user->addnew();

		if($user->save())
		{
			redirect('?m=system&s=userinfo&l='.$request['l']);
		}else
		{
			echo '添加失败！';
		}
	}
}
function edit()
{
	global $user,$db,$request;
	$sql='select * from '.TB_PREFIX.'user where id='.$request['cid'];
	$user = $db->get_row($sql);
	if($_POST)
	{
		checkme(9);
		$user = new user();
		$user->id=$request['cid'];
		$user->get_request($request);
		$user->pwd = empty($request['pwd'])?null:sha1($request['pwd']);
		if($user->save())
		{
			redirect('?m=system&s=userinfo&l='.$request['l']);
		}
		else
		{
			echo '修改失败！';
		}
	}
}
function destroy()
{
	checkme(9);
	global $db,$request;
	if(!empty($request['cid']))
	{
		//在此删除路径
		$sql='delete from '.TB_PREFIX.'user where id='.$request['cid'].' limit 1';
		if($db->query($sql))
		{
			redirect('?m=system&s=userinfo&l='.$request['l']);
		}
		else {
			echo '删除失败！';
		}
	}
}

?>