<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo SITENAME ?>" />
<meta name="description" content="<?php echo SITENAME ?>" />
<title><?php echo SITENAME ?></title>
<link rel="stylesheet" href="<?php echo get_skin_root() ?>css.css" type="text/css" />
</head>

<body>
<div id="main">
	<div id="head">
		<a href="#"><img src="<?php echo get_skin_root() ?>/images/logo.gif" alt="深喉咙企业网站生成系统" border="0" align="left"/></a>
		<ul>
			<li><a href="<?php echo get_root_path() ?>/">Home</a></li>
			<?php main_menu('<li>||</li>','<li id="selected">||</li>') ?>
			<li><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></li>
		</ul>
		<p><img src="<?php echo get_skin_root() ?>/images/main.jpg" alt="深喉咙企业网站生成系统" border="0" align="left"/></p>
	</div>
	<div id="content">
		<div id="flash">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="385" height="240">
              <param name="movie" value="<?php echo get_skin_root() ?>indexflash/main.swf" />
              <param name="quality" value="high" />
              <embed src="<?php echo get_skin_root() ?>indexflash/main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="385" height="240"></embed>
		     </object>
		</div>
		<div id="cmyintro">
			<img src="<?php echo get_skin_root() ?>/images/cmy_left.gif" align="left" border="0" />
			<img src="<?php echo get_skin_root() ?>/images/aboutus.gif" align="left" border="0" class="aboutus" />
			<div id="abtus">
			<a href="<?php echo get_root_path() ?>/?p=10"><img src="<?php echo get_skin_root() ?>/images/more.gif" alt="more" border="0" class="more" /></a>
			<span><?php echo dt_cn_article(10,454) ?></span>
			</div>
			<img src="<?php echo get_skin_root() ?>/images/cmy_right.gif" align="right" border="0" />
		</div>
		<div id="news">
			<ul>
				<?php echo dt_list(17,5,25,0,1,true) ?>
			</ul>
		</div>
		<div id="contact"><a href="<?php echo get_root_path() ?>/?p=15"><img src="<?php echo get_skin_root() ?>/images/contact.gif" alt="Contact Us" border="0" /></a></div>
	</div>
	<div id="footer">
		<div id="cprt">
			<p><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_blue.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a>
Copyright © 2008 by Deepthroat Group Co.,Ltd, China BRAND .Inc</p>
			<p>Tel  :+86-371-66052229</p>
			<p>Fax  :+86-371-69339333-808</p>
		</div>
		<img src="<?php echo get_skin_root() ?>/images/logo2.gif" alt="深喉咙企业网站生成系统" border="0" class="logo2" align="left" />
	</div>
</div>
</body>
</html>
