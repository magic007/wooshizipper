<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo SITESUMMARY.','.get_title_name($params['id'],$params['args']) ?>" />
<meta name="description" content="<?php echo get_description_name($params['id'],$params['args']) ?>" />
<title><?php echo get_title_name($params['id'],$params['args']) ?></title>
<link type="text/css" href="<?php echo get_skin_root() ?>css/main.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo get_skin_root() ?>css/lockall.css" rel="stylesheet" />
</head>
<body>
<div id="loading"><div id="login"></div></div>
<div id="bbew"></div>
<dl class="thehd"><dt><a href="http://www.shenhoulong.com/"><img src="<?php echo get_skin_root() ?>images/logo.jpg" /></a></dt>
<dd><div id="home-banner" align="right" style="padding-left:100px"><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></div></dd></dl><div class="thelk">
<ul class="zxnr">
<li><a href="<?php echo get_root_path() ?>/">Home</a></li>
<?php main_menu('<li>||</li>','<li class="on">||</li>') ?>
</ul>
</div>
<div class="centess" id="centess">
<div class="listbody">
<div class="lilf">
<div class="mbodys mobodysmar"><div class="mbodys1bd">
<div class="mthenow"><?php echo get_en_location() ?></div>

<div class="viewbd">
<div id="pardynr">
<?php layout_part() ?>
</div>
</div>

</div></div>

<div class="mbodys"><div class="mbodys1">
<dl class="mboetitle"><dd>Industry Advisory</dd><dt>News</dt></dl>
<div class="neee">
<ul class="xgwz">
<?php echo dt_list(18,5,15,0,0,false,'id') ?>
</ul>
<div class="xgsk">
<?php echo dt_list(17,5,15,0,3,false,'id') ?>
</div>
<div class="clear"></div>
</div>
</div></div>

<div class="mbodys"></div>
</div>

<div class="liri">
<div class="liriba"><div id="flash01"></div>
</div>
<style type="text/css">
.hy_jia10 ul{ height:164px; overflow:hidden;*height:180px; }
.hy_jia10 li{ height:32px; border-bottom:#b5b5b5 dotted 1px; background:url(images/hy_dianidan.gif) no-repeat 5px 14px; padding-left:15px; width:260px; white-space:nowrap; overflow:hidden; margin-left:10px;}
.hy_jia10 li .hy2_dd{ width:180px; white-space:nowrap; overflow:hidden; float:left; padding-top:8px;}
.hy_jia10 li .hy2_dd2{ width:80px; float:left; padding-top:7px; background:url(http://images.yoka.com/pic/div/2008/fznr/hy_cj2.gif) no-repeat 0 6px; height:26px; text-align:center;}
</style>
<div class="lirizx">
	<ul>
		<?php echo dt_calllist(11,10,18,0,0,true,'id') ?>
	</ul>
</div>

<div class="risbd">
<div class="risti"><a href="#" style="color:#fff;" target='_blank'>News</a></div>
<div id="sdkli" class="xves"><div>
<?php echo dt_list(17,3,23,0,2,true,'id') ?>
</div></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="bnav">
	<A href="#">About Us</a>|
    <A href="#">Copyright</a>|
	<A href="#">Partners</a>|
	<A href="#">Recruitment</a>|
    <A href="#">Contact Us</a>|
    <A href="#">Suggest Feedback</a>|
	<A href="#">Webmap</a>|
	<A href="#">Help</a>|
	<A href="#">RSS</a> 


</div>
<div id="copy">
Deep-throat corporate Web site Generation System　<a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_DTrod_2.gif" width="80" height="15" alt="Technical Support: Deep throat corporate web site generation system project development group" style="border:0;" /></a>
<br><br>Copyright &copy; 2006-2009 shenhoulong.com, All rights reserved. 
</div>
</body>

</html>