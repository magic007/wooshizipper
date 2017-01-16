<?php
require_once(ABSPATH.'/inc/models/user.php');
class user extends c_user{

	function user_power_list_select($name,$select=null,$is_list=true)
	{
		$temp_arr=array();
		if($is_list)
		{
		$temp_arr = array('0'=>'匿名',
						   '1'=>'普通会员',
						   '2'=>'vip1级用户',
						   '3'=>'vip2级用户',
						   '4'=>'vip3级用户',
						   '5'=>'vip4级用户',
						   '8'=>'信息录入员',
						   '9'=>'超级管理员')	;
		}
		else 
		{
		$temp_arr = array( '1'=>'普通会员',
						   '2'=>'vip1级用户',
						   '3'=>'vip2级用户',
						   '4'=>'vip3级用户',
						   '5'=>'vip4级用户',
						   '8'=>'信息录入员',
						   '9'=>'超级管理员')	;
		}
		select($temp_arr,$name,intval($select));
	}
}
?>