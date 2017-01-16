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
		<form name="search" method="post" action="<?php echo $search ?>">
		<input name="keyword" type="text" value="<?php echo urldecode($request['keyword'])?>" class="text" onclick="this.value=''" /><input type="submit" name="search" class="go"  value="" />
		</form>
		</div>
		<div id="lan"><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></div>
		
		
		<div id="nav">
			<ul>
				<li><a href="/"><span>Home</span></a></li>
				<?php main_menu('<li>||</li>','<li class="ysuny">||</li>','<span>') ?>
			</ul>
		</div>
		<div id="banner"><img src="<?php echo get_skin_root() ?>images/banner.jpg" /></div>
	</div>
	<div id="cpagebody">
	
		<div id="csideright">
			<div id="location"><?php echo get_en_location() ?></div>
			<div id="main"><?php layout_part() ?></div>
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
