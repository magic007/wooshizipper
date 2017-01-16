<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo SITESUMMARY.','.get_title_name($params['id'],$params['args']) ?>" />
<meta name="description" content="<?php echo get_description_name($params['id'],$params['args']) ?>" />
<title><?php echo get_title_name($params['id'],$params['args']) ?></title>
<link rel="stylesheet" href="<?php echo get_skin_root() ?>css.css" type="text/css" />
</head>

<body>
<div id="container">
	<div id="header">
		<div id="logo"><a href="#"><img src="<?php echo get_skin_root() ?>images/logo.jpg" /></a></div>
		<div id="search">
		<form name="search" method="post" action="<?php echo $search ?>" style="margin:0; padding:0">
		<input name="keyword" type="text" value="<?php echo urldecode($request['keyword'])?>" class="text" onclick="this.value=''" /><input type="submit" name="search" class="go"  value="" />
		</form>
		</div>
		<div id="lan"><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></div>
		
		
		<div id="nav">
			<ul>
				<li><a href="/"><span>首页</span></a></li>
				<?php main_menu('<li>||</li>','<li class="ysuny">||</li>','<span>') ?>
			</ul>
		</div>
		<div id="banner"><img src="<?php echo get_skin_root() ?>images/banner.jpg" /></div>
	</div>
	<div id="cpagebody">
		<div id="csideleft">
			<h1></h1>		
			<ul>
				<?php sub_menu('<li>||</li>','<li id="selected">||</li>') ?>
			</ul>
		</div>
		<div id="csideright">
			<div id="location"><?php echo get_location() ?></div>
			<div id="main"><?php layout_part() ?></div>
		</div>
	</div>
	<div id="footer">
		<div id="foottop">
			<ul>
				<li><a href="#">首页</a></li>
				<li><a href="#">公司简介</a></li>
				<li><a href="#">产品与服务</a></li>
				<li><a href="#">常见问题</a></li>
				<li><a href="#">系统下载</a></li>
				<li><a href="#">技术支持</a></li>
				<li><a href="#">关于我们</a></li>
			</ul>
			<p align="center">© 2008 by Deepthroat, Aiwise International Group Co.,Ltd, China BRAND .Inc</p>
			<p align="center"><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_black_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a></p>
		</div>
	</div>
</div>
</body>
</html>
