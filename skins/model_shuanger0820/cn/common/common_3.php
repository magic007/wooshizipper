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
<div id="main">
	<div id="head">
		<a href="#"><img src="<?php echo get_skin_root() ?>/images/logo.gif" alt="深喉咙企业网站生成系统" border="0" align="left"/></a>
		<ul>
			<li><a href="<?php echo get_root_path() ?>/">首页</a></li>
			<?php main_menu('<li>||</li>','<li id="selected">||</li>') ?>
			<li><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></li>
		</ul>
		<p><img src="<?php echo get_skin_root() ?>/images/common.jpg" alt="深喉咙企业网站生成系统" border="0" align="left"/></p>
	</div>
	<div id="wrap">
		<div id="cleft">
			<img src="<?php echo get_skin_root() ?>/images/cleft_top.jpg" alt="深喉咙企业网站生成系统" border="0" align="top" />
			<ul>
			<?php sub_menu('<li>||</li>','<li id="selected">||</li>','<span style="">') ?>
		</ul>
		</div>
		<div id="cright">
			<span id="cstitle"><?php echo get_location() ?></span>
			<div id="crs"><?php layout_part() ?></div>
		</div>
	</div>
	<div id="footer">
		<div id="cprt">
			<p><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_blue.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a>
Copyright © 2008 by Deepthroat Group Co.,Ltd, China BRAND .Inc</p>
			<p>Tel 电话 :+86-371-66052229</p>
			<p>Fax 传真 :+86-371-69339333-808</p>
		</div>
		<img src="<?php echo get_skin_root() ?>/images/logo2.gif" alt="深喉咙企业网站生成系统" border="0" class="logo2" align="left" />
	</div>
</div>
</body>
</html>
