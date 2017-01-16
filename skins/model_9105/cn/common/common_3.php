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
<dd><div id="home-banner" align="right" style="padding-left:100px"><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></div></dd></dl>
<div class="thelk">
<ul class="zxnr">
<li><a href="<?php echo get_root_path() ?>/">首页</a></li>
<?php main_menu('<li>||</li>','<li class="on">||</li>') ?>
</ul>
</div>
<div class="centess" id="centess">
<div class="listbody">
<div class="lilf">
<div class="mbodys mobodysmar"><div class="mbodys1bd">
<div class="mthenow"><?php echo get_location() ?></div>

<div class="viewbd">
<div id="pardynr">
<?php layout_part() ?>
</div>
</div>

</div></div>

<div class="mbodys"><div class="mbodys1">
<dl class="mboetitle"><dd>行业咨询</dd><dt>专题新闻</dt></dl>
<div class="neee">
<ul class="xgwz">
<?php echo dt_list(9,5,15,0,0,false,'id') ?>
</ul>
<div class="xgsk">
<?php echo dt_list(8,5,15,0,3,false,'id') ?>
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
		<?php echo dt_calllist(2,10,18,0,0,true,'id') ?>
	</ul>
</div>

<div class="risbd">
<div class="risti"><a href="#" style="color:#fff;" target='_blank'>精品推荐</a></div>
<div class="mtlist">
<?php echo dt_product(3,2,5,0,2,false,null,'id')?>
</div>
</div>
<div class="risbd">
<div class="risti"><a href="#" style="color:#fff;" target='_blank'>行业咨询</a></div>
<div id="czli" class="xves"><div>
<?php echo dt_list(9,3,23,0,2,true,'id') ?>
</div></div>
</div>
</div>
<div class="clear"></div>
</div>
</div>
<div id="bnav">
	<A href="#">关于我们</a>|
    <A href="#">版权信息</a>|
	<A href="#">合作伙伴</a>|
	<A href="#">招聘信息</a>|
    <A href="#">联系我们</a>|
    <A href="#">意见反馈</a>|
	<A href="#">网站地图</a>|
	<A href="#">网站帮助</a>|
	<A href="#">RSS订阅</a> 
</div>
<div id="copy">
深喉咙企业网站生成系统　<a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_DTrod_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a>
<br><br>Copyright &copy; 2006-2009 shenhoulong.com, All rights reserved. 
</div>
</body>

</html>