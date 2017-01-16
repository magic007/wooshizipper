<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITENAME ?>-后台控制</title>
<style type="text/css">
<!--
/*text_layout*/
#dragLayoutBox{ width:auto; height:64px; background-color:#CBD7EF;  border:1px solid #567DC6; border-left:0; border-right:0;}
#dragLayoutBox #leftNav{ margin:0; padding:0; width:9%; height:64px; list-style:none; float:left;} 
#dragLayoutBox #leftNav li{ margin:0; padding:0; height:21px; line-height:21px; text-align:center;}
#dragLayoutBox #leftNav li a{ color:#666; text-decoration:none; height:20px; line-height:20px; background-color:#A9BCE4; border-bottom:1px solid #A9BCE4; text-align:center; display:block;}
#dragLayoutBox #leftNav li a:hover{ color:#3865B8; text-decoration:none; border-bottom:1px solid #CBD7EF; background-color:#CBD7EF;}
#dragLayoutBox #leftNav li.selected a{ color:#3865B8; text-decoration:none; background-color:#CBD7EF; border-bottom:1px solid #3A68BC;}
#smallContent{ width:78%; margin-top:8px; margin-right:1%; margin-bottom:9px; margin-left:1%; border:0; float:left;}
#smallContent .dragPic{ width:68px; height:47px; margin-right:1%; float:left;}
#smallContent .dragPic img{ border:1px solid #999;}


#okButton{ width:10%; float:left; margin:8px 0 9px 0;}
#okButton a{ color:#fff; text-align:center; text-decoration:none; line-height:44px; width:54px; height:44px; margin:0 auto; background-color:#9FB6E1; border:1px solid #3865B8; display:block;}
-->
</style>
<link href="../inc/css/data_table.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../inc/js/data_table.js"></script>
<script language="JavaScript" type="text/javascript" src="../inc/js/deepthroat.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="top">
		<h1><?php echo SITENAME ?>(<a href="<?php echo ROOTPATH ?>/" target="_blank">浏览网站</a>)</h1>
		<ul>
		   <li id="yellowLink1"><a href="index.php?l=<?php echo $request['l'] ?>" id="lm1">返回内容管理</a> |</li>
		   <li><a href="index.php?m=system&s=userinfo&a=edit&cid=<?php echo $_SESSION[TB_PREFIX.'admin_userID'] ?>&l=<?php echo $request['l'] ?>">个人资料</a> |</li>
		   <li><a href="login.php?act=logout">登出</a></li>
		</ul>
	</div>
<div id="dragLayoutBox">
		<ul id="leftNav">
		   <li class="selected"><a href="#">首页</a></li>
		   <li><a href="#">企业简介</a></li>
		   <li><a href="#">企业荣誉</a></li>
		</ul>
		<div id="smallContent">
			<div class="dragPic"><img src="text.png" /></div>
			<div class="dragPic"><img src="text.png" /></div>
			<div class="dragPic"><img src="text.png" /></div>
			<div class="dragPic"><img src="text.png" /></div>
		</div>
		<div id="okButton"><a href="#">保存</a></div>
		<div class="clear"></div>
	</div>
	
	</div>
<div id="container">