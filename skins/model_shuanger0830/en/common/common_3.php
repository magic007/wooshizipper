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

<div id="wrap">
	<div id="cright">
		<img src="<?php echo get_skin_root() ?>/images/cright_top.jpg" align="top" border="0" />
		<span id="cstitle"><?php echo get_en_location() ?></span>
		<div id="crs"><?php layout_part() ?></div>
	</div>
</div>
<div id="footer">
	<img src="<?php echo get_skin_root() ?>/images/foot_left.gif" border="0" align="left" />
	<div id="cprt">
			<p>Copyright © 2008 by Deepthroat Group Co.,Ltd, China BRAND .Inc</p>
			<p>Tel 电话 :+86-371-66052229</p>
			<p>Fax 传真 :+86-371-69339333-808</p>
			<p><a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_red_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a></p>
		</div>
		<img src="<?php echo get_skin_root() ?>/images/logo2.gif" alt="深喉咙企业网站生成系统" border="0" class="logo2" align="left" />
	<img src="<?php echo get_skin_root() ?>/images/foot_right.gif" border="0" align="right" />
</div>
</body>
</html>
