<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITENAME ?>-后台控制</title>
<link href="../inc/css/data_table.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../inc/js/data_table.js"></script>
<script language="JavaScript" type="text/javascript" src="../inc/js/deepthroat.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#top{ background:transparent url(images/dt_admini_logo.png) no-repeat left top;}
-->
</style>
</head>

<body>

<div id="dhtmltooltip"></div>
<script language="JavaScript" type="text/javascript" src="../inc/js/tips.js"></script>

<script type="text/javascript">
<!--
document.onmousemove=positiontip;
//-->
</script>
<div id="wrapper">
	<div id="top">
		<h1><?php echo SITENAME; ?></h1>
		<ul>
		   <li id="yellowLink1"><a href="index.php?l=<?php echo $request['l'] ?>" id="lm1">返回内容管理</a></li>
		   <li><a href="index.php?m=system&s=userinfo&a=edit&cid=<?php echo $_SESSION[TB_PREFIX.'admin_userID'] ?>&l=<?php echo $request['l'] ?>">个人资料</a> |</li>
		   <li><a href="login.php?act=logout">登出</a></li>
		</ul>
		<h2><a href="<?php echo ROOTPATH ?>/" class="browse" target="_blank">浏览网站</a></h2>
	</div>
	<div id="nav">
		<ul>
			<li><a href='./?m=system&s=managechannel&l=<?php echo $request['l']?>' id='m1'>频道与栏目</a></li>
			<li><a href='./?m=system&s=options&l=<?php echo $request['l']?>' id='m2'>站点设置</a></li>
			<li><a href='./?m=system&s=changeskin&l=<?php echo $request['l']?>' id='m3'>模版管理</a></li>
			<li><a href='./?m=system&s=managemodel&l=<?php echo $request['l']?>' id='m4'>模块管理</a></li>
			<li><a href='./?m=system&s=userinfo&l=<?php echo $request['l']?>' id='m5'>用户管理</a></li>
			<li><a href='./?m=system&s=flashoptions&l=<?php echo $request['l']?>' id='m6'>Flash设置</a></li>
			<li><a href='./?m=system&s=bakup&l=<?php echo $request['l']?>' id='m7'>数据库管理</a></li>
		</ul>
	</div>
<div id="container">