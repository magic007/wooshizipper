<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITENAME ?></title>
<link rel="stylesheet" href="<?php echo get_skin_root() ?>css.css" type="text/css" />
</head>

<body>
<div id="container">
	<div id="header">
		<div id="logo"><a href="#"><img src="<?php echo get_skin_root() ?>images/logo.jpg" /></a></div>
		<div id="search">
		<form name="search" method="post" action="<?php echo $search ?>">
		<input name="keyword" type="text" value="<?php echo urldecode($request['keyword'])?>" class="text" onclick="this.value=''" /><input type="submit" name="search" class="go"  value="" />
		</form>
		</div>
		<div id="lan"><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></div>
		<div id="nav">
			<ul>
				<li class="ysuny"><a href="/"><span>Home</span></a></li>
				<?php main_menu('<li>||</li>','<li id="selected">||</li>','<span>') ?>
			</ul>
		</div>
		<div id="banner"><img src="<?php echo get_skin_root() ?>images/banner.jpg" /></div>
	</div>
	<div id="pagebody">
		<div id="sideleft">
			<h1><a href="./?p=10">more..</a><img src="<?php echo get_skin_root() ?>images/comp.gif" /></h1>
			<span class="comp"><?php dt_cn_article(10,210) ?>...</span>
			<h2><a href="./?p=17">more..</a><img src="<?php echo get_skin_root() ?>images/news.gif" /></h2>
			<ul>
				<?php echo dt_list(17,5,20,0,1,true,'id') ?>
			</ul>
			<p></p>
		</div>
		<div id="sideright">
			<div id="flash">
			  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="290" height="170">
                <param name="movie" value="<?php echo get_skin_root() ?>indexflash/main.swf" />
                <param name="quality" value="high" />
                <embed src="<?php echo get_skin_root() ?>indexflash/main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="290" height="170"></embed>
		      </object>
			</div>
			<div id="solution">
				<h1><img src="<?php echo get_skin_root() ?>images/solution.gif" /></h1>
				<p><?php dt_cn_article(10,110) ?> ..</p>
				<div id="more"><a href="./?p=5">more..</a></div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="foottop">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Company Profile</a></li>
				<li><a href="#">Products & Services</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">download</a></li>
				<li><a href="#">Technical Support</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			<p align="center">© 2008 by Deepthroat, Aiwise International Group Co.,Ltd, China BRAND .Inc</p>
			<p align="center"><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_black_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a></p>
		</div>
	</div>
</div>
</body>
</html>
