<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="<?php echo get_title_name($_REQUEST['p'],$_REQUEST['r']) ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/style.css" type="text/css" />
	<title><?php echo get_title_name($_REQUEST['p'],$_REQUEST['r']) ?></title>
</head>
<body>
	<div class="content">
		<div id="top">
			<p><a href="#">Set as my homepage</a><a href="#">Add to my favorite</a><a href="#">Register</a><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版本</a></p>
		</div>
		<div id="logo"></div>
		
		<div class="bar">
			<ul style="margin-left:240px;">
				<li><a href="<?php echo get_root_path() ?>/">Home</a></li>
				<?php main_menu('<li>||</li>','<li class="active">||</li>') ?>
			</ul>
		</div>
<!--/*内容页开始*/-->
		<div id="readbox">
	  <table id="commontb" width="100%">
	   <tr>
		<!--leftbar开始-->
		<td id="leftbar" valign="top" width="200px">
		<div id="submenu">
			<div class="subtitle"><?php data('page.title')?></div>
			 <ul>
              <?php sub_menu('<li>||</li>','<li id="selected">||</li>') ?>
            </ul>
			<div class="corner"></div>
		  </div>
		 </td>
		<!--right开始-->
		<td valign="top">
			<div id="location1"><strong>Location：</strong><?php echo get_en_location() ?></div>
			<div id="commontxtbox"><?php layout_part() ?></div>
		</td>
	 </tr>
	 </table>
	</div>
		<!--/*内容页结束*/-->
		<div class="footer">
			<p><a href="#">Advertise with Us</a> | <a href="#">Search Marketing</a> | <a href="#"> Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Suggest a Site</a> | <a href="#">Send Feedback</a><br />
			&copy; Copyright 2008 deepthroat.com.cn, Design: <a href="http://www.deepthroat.com.cn/cn/" title="Realure">Realure</a></p>
		</div>
	</div>
</body>
</html>