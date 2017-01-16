<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
require(dirname(__FILE__).'/../config/dt-config.php');
require(dirname(__FILE__).'/../inc/function.php');

$deepthroat_news = get_url('http://www.deepthroat.com.cn/cn/get_news.php');
if($deepthroat_news)
string2file($deepthroat_news,ABSPATH.'/admini/views/index/'.'deepthroat_news.php');

if(intval(date('d'))==1)
{	
	$deepthroat_help = get_url('http://www.deepthroat.com.cn/cn/get_operator_help.php');
	if($deepthroat_help)
	string2file($deepthroat_help,ABSPATH.'/admini/views/index/'.'deepthroat_help.php');
	$deepthroat_operator_help = get_url('http://www.deepthroat.com.cn/cn/get_operator_help.php');
	if($deepthroat_operator_help)
	string2file($deepthroat_operator_help,ABSPATH.'/admini/views/system/index/'.'deepthroat_help.php');
}
?>