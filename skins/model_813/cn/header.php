<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title><?php echo SITENAME ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?php echo SITENAME ?>" />
<meta name="keywords" content="<?php echo SITENAME ?>" />
<link rel="stylesheet" href="<?php echo get_skin_root()?>css/layout.css" type="text/css" />
</head>
<body>
<!--头部 开始 -->
 <?php 
   if($_REQUEST[a]=="goods_view"){
	   global $db,$params,$request;
	   $list_result = $db->get_results("select l.origialPic,c.content from ".TB_PREFIX."list l left join ".TB_PREFIX."list_content c ON l.guid = c.guid where l.id = ".intval(trim($_REQUEST[r]))."");
   ?>       <div class="popup">
			<div class="popup_img fl"><img src="<?php echo $list_result[0]->origialPic; ?>" alt="乌石拉链"></div>
			<div id="scrollbar" class="popup_text"><?php echo $list_result[0]->content; ?></div>
			<div class="close"></div>
	        </div>
  <?php }else{ ?>
<div id="header_home">
	<div class="container">
		<a href=""><h1 id="logo">乌石拉链</h1></a>
		<div class="shortcut fr">
			<div class="submenu"><a href="javascript:;" onclick="shoucang('wushi.com','广州市乌石拉链有限公司')">加入收藏</a>|<a href="/?a=changeLanguage&SITELANGUAGE=cn">中文</a>|<a href="/?a=changeLanguage&SITELANGUAGE=en">ENGLISH</a></div>
			<div class="search">
				<form>
				    <input type="hidden" name="m" value="search" />
					<input name="keyword" type="text" /><button></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--头部 结束 -->
<!--导航 开始 -->
<div id="nav">
	<ul class="container">
            <li class="no_bg"><a href="<?php echo $tag['path.root']?>/" >公司首页</a></li>
			<?php main_menu('<li>||</li>','<li>||</li>') ?>
	</ul>
</div>