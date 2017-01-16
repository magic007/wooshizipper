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
			<p><a href="#">设为首页</a><a href="#">加为收藏</a><a href="#">我要注册</a><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></p>
		</div>
		<div id="logo"></div>
		
		<div class="bar">
			<ul style="margin-left:370px;">
				<li><a href="<?php echo get_root_path() ?>/">首页</a></li>
				<?php main_menu('<li>||</li>','<li class="active">||</li>') ?>
			</ul>
		</div>
<!--/*内容页开始*/-->
		<div id="readbox">
	  <table id="commontb" width="100%">
	   <tr>
		<td valign="top">
			<div id="location1"><strong>位置：</strong><?php echo get_location() ?></div>
			<div id="commontxtbox"><?php layout_part() ?></div>
		</td>
	 </tr>
	 </table>
	</div>
	<div style=" padding-left:20px"><?php echo dt_image_linkers(24,20,0) ?></div> 
		<!--/*内容页结束*/-->
		<div class="footer">
			<p><a href="#">关于我们</a> | <a href="#">版权声明</a> | <a href="#">商业伙伴</a> | <a href="#">法律声明</a> | <a href="#">联系我们</a> | <a href="#">公司招聘</a><br />
			&copy; Copyright 2008 deepthroat.com.cn, Design: <a href="http://www.deepthroat.com.cn/cn/" title="Realure">Realure</a></p>
		</div>
	</div>
</body>
</html>