<?php
@session_start();
@error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
define('THISISADMINI',true);
date_default_timezone_set('Asia/Shanghai');
if(!file_exists(dirname(__FILE__).'/../config/dt-config.php')||filesize(dirname(__FILE__).'/../config/dt-config.php')==0||filesize(dirname(__FILE__).'/../config/dt-config.php')==3)die('系统尚未安装，请进入<a href="../setup/setup.php">安装目录</a>');
require(dirname(__FILE__).'/../config/dt-config.php');
require(ABSPATH.'/inc/function.php');
if(file_exists(ABSPATH.'/inc/common.php'))require_once(ABSPATH.'/inc/common.php');
require(ABSPATH.'/inc/class.database.php');
require(ABSPATH.'/inc/class.pager.php');
require(ABSPATH.'/inc/class.ui.php');
require(ABSPATH.'/editor/fckeditor.php');

	if(empty($_SESSION[TB_PREFIX.'admin_name']) or $_SESSION[TB_PREFIX.'admin_roleId']<8)
	{
		redirect('login.php');
	}

$_REQUEST = cleanArrayForMysql($_REQUEST);
$_GET = cleanArrayForMysql($_GET);
$_POST = cleanArrayForMysql($_POST);
$request = $_REQUEST;

$request['p']=intval($request['p']);
$request['c']=intval($request['c']);
$request['n']=intval($request['n']);
$request['i']=intval($request['i']);
$request['mdtp']=intval($request['mdtp']);
$request['comment']=intval($request['comment']);

if(isset($request['l']) && in_array($request['l'],array('cn','en')))
{
	$_SESSION[TB_PREFIX.'dtLanguage']=$request['l'];  
}
else if(isset($_SESSION[TB_PREFIX.'dtLanguage']) && in_array($_SESSION[TB_PREFIX.'dtLanguage'],array('cn','en')))
{
	$request['l']= $_SESSION[TB_PREFIX.'dtLanguage'];    
}
else
{
	$request['l']= SITELANGUAGE;    
	$_SESSION[TB_PREFIX.'dtLanguage']=SITELANGUAGE;
}

$pageInfo=array();
$pageInfo['display']=true;
$pageInfo['header']=ABSPATH."/admini/views/header.php";
$pageInfo['footer']=ABSPATH."/admini/views/footer.php";

require_once(ABSPATH.'/admini/global.php');

switch($request['m'])
{
	case 'system':
		$module_name = empty($request['s'])?'index':$request['s'];
		$pageInfo['header']=ABSPATH."/admini/views/system_header.php";
		//载入控制器
		$controller = ABSPATH.'/admini/controllers/system/'.$module_name.'.php';
		if(file_exists($controller))
		{
			require_once($controller);
			empty($request['a'])?index():(function_exists($request['a'])?$request['a']():die("无此Action #$request[a]"));
		}
		else die('尚未安装'.$module_name.'模块。');

		//载入视图
		$view = empty($request['a'])?ABSPATH.'/admini/views/system/'.$module_name.'/index.php':ABSPATH.'admini/views/system/'.$module_name.'/'.$request['a'].'.php';

		break;
	default:
		$module_name = empty($request['p'])?'index':get_model_type($request['p']);
		//载入控制器
		$controller = ABSPATH.'/admini/controllers/'.$module_name.'.php';
		if(file_exists($controller))
		{
			require_once($controller);
			
			//如果Action 为 comment模块　则调用
			require_once(ABSPATH.'/admini/controllers/comment.php');

			$view = empty($request['a'])?ABSPATH.'/admini/views/'.$module_name.'/index.php':ABSPATH.'/admini/views/'.$module_name.'/'.$request['a'].'.php';
			empty($request['a'])?index():(function_exists($request['a'])?$request['a']():die("无此Action #$request[a]"));
		}
		else die('尚未安装'.$module_name.'模块。');

		//载入视图

}
if($pageInfo['display'])require_once($pageInfo['header']);
if(file_exists($view)) 	require_once($view);
//判断是否载入评论模块，如果需要则载入评论，不需要则不载入;
isComment();
if($pageInfo['display'])require_once($pageInfo['footer']);

function __autoload($class_name)
{
	$model = ABSPATH.'/admini/models/'.$class_name.'.php';
	if(file_exists($model))require_once($model);
}

function get_model_type($id)
{
	global $db;
	return $db->get_var("select type from ".TB_PREFIX."menu where id=$id");
}
//判断是否载入评论系统
function isComment()
{
	global $params,$db,$request;
	
	$view_path=ABSPATH.'/admini/views/comment/comment_index.php';
	if(menuIsComment())
	{
		if(file_exists($view_path))
		require_once($view_path);
	}
}
function menuIsComment()
{
	global $db,$request;
	$sql = "SELECT * FROM ".TB_PREFIX."menu WHERE id=".$request['p'];
	$result = $db->get_row($sql);
	if(intval($result->isComment) == 1 && $result->type != 'guestbook' && $result->type != 'jobs' && $result->type != 'webmap')
	{
		if(($result->type == 'article' && $requset['n']==0) || ($result->type != 'article' && $request['n']>0))
		return true;
	}
	else
	{
		return false;
	}
}
?>