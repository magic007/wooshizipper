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
<div id="header">
	<div id="nav">
		<img src="<?php echo get_skin_root() ?>/images/logo.gif" alt="深喉咙企业网站生成系统" align="left" border="0" />
		<ul>
			<li><a href="<?php echo get_root_path() ?>/">Home</a></li>
			<?php main_menu('<li>||</li>','<li id="selected">||</li>') ?>
		</ul>
		<img src="<?php echo get_skin_root() ?>/images/nav_top_right.gif" align="right" border="0" />
	</div>
	<div id="search">
	<div style="padding-left:130px; padding-bottom:5px"><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></div>
		<form method="post" action="<?php echo $search ?>" style="margin:0; padding:0">
			<input name="keyword" type="text" value="" class="inputTxt" />
			<input id="button" class="refer" type="submit" value="<?php echo urldecode($_REQUEST['keyword'])?>"/>
		</form>
	</div>
</div>
<div id="image"></div>
<div id="content">
	<div id="flash">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="350" height="255">
                <param name="movie" value="<?php echo get_skin_root() ?>indexflash/main.swf" />
                <param name="quality" value="high" />
                <embed src="<?php echo get_skin_root() ?>indexflash/main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="350" height="255"></embed>
		 </object>
	</div>
	<div id="middle">
		<div id="news">
			<ul>
				<?php echo dt_list(17,5,25,0,1,true) ?>
			</ul>
		</div>
		<div id="product">
			<ul>
				<li><a href="#"><img src="<?php echo get_skin_root() ?>/images/image1.gif" alt="产品1" border="0" /></a></li>
				<li><a href="#"><img src="<?php echo get_skin_root() ?>/images/image4.gif" alt="产品2" border="0" /></a></li>
				<li><a href="#"><img src="<?php echo get_skin_root() ?>/images/image5.gif" alt="产品3" border="0" /></a></li>
			</ul>
		</div>
	</div>
	<div id="contact"></div>
</div>
<div id="footer">
	<img src="<?php echo get_skin_root() ?>/images/foot_left.gif" border="0" align="left" />
	<div id="cprt">
			<p>Copyright © 2008 by Deepthroat Group Co.,Ltd, China BRAND .Inc</p>
			<p>Tel  :+86-371-66052229</p>
			<p>Fax :+86-371-69339333-808</p>
			<p><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_red_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a></p>
		</div>
		<img src="<?php echo get_skin_root() ?>/images/logo2.gif" alt="深喉咙企业网站生成系统" border="0" class="logo2" align="left" />
	<img src="<?php echo get_skin_root() ?>/images/foot_right.gif" border="0" align="right" />
</div>
</body>
</html>
