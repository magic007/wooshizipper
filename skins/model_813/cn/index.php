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
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.jscroll.js"></script>
<script src="<?php echo get_skin_root()?>js/jquery.nav.js" type="text/javascript"></script>
</head>
<body>
<!--头部 开始 -->
<div id="header_home">
	<div class="container">
		<a href=""><h1 id="logo">乌石拉链</h1></a>
		<div class="shortcut fr">
			<div class="submenu"><a href="javascript:;" onclick="shoucang('wushi.com','广州市乌石拉链有限公司')">加入收藏</a>|<a href="/?a=changeLanguage&SITELANGUAGE=en">ENGLISH</a></div>
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
            <li class="no_bg"><a href="<?php echo $tag['path.root']?>/index.php" class="current">公司首页</a></li>
			<?php main_menu('<li>||</li>','<li>||</li>') ?>
	</ul>
	<div class="subnav_bg"></div>
</div>
<!--导航 结束 -->
<!--banner 开始 -->
<!-- <div class="banner">
	<ul>
		<li><img class="img" src="<?php echo get_skin_root()?>img/banner01.jpg" /></li>
		<li><img class="img" src="<?php echo get_skin_root()?>img/banner02.jpg" /></li>
		<li><img class="img" src="<?php echo get_skin_root()?>img/banner03.jpg" /></li>
	</ul>
</div> -->
<!--banner 结束 -->
<!-- banner 开始 -->
<div id="inner">
        <div class="hot-event">
            <div class="switch-nav" style="display:none;"><a href="#" onclick="return false;" class="prev"><i class="ico i-prev"></i><span class="hide-clip">ÉÏÒ»¸ö</span></a><a href="#" onclick="return false;" class="next"><i class="ico i-next"></i><span class="hide-clip">ÏÂÒ»¸ö</span></a></div>
            <div class="event-item" style="display: block;">
                <a target="_blank" href="http://www.lanrentuku.com/" class="banner">
                    <img src="<?php echo get_skin_root()?>img/banner01.jpg" class="photo" alt="乌石拉链" title="乌石拉链" />
                </a>
            </div>
            <div class="event-item" style="display: none;">
                <a target="_blank" href="http://www.lanrentuku.com/" class="banner">
                    <img src="<?php echo get_skin_root()?>img/banner02.jpg" class="photo" alt="乌石拉链" title="乌石拉链" />
                </a>
            </div>
            <div class="event-item" style="display: none;">
                <a target="_blank" href="http://www.lanrentuku.com/" class="banner">
                    <img src="<?php echo get_skin_root()?>img/banner03.jpg" class="photo" alt="乌石拉链" title="乌石拉链" />
                </a>
            </div>
            <div class="switch-tab" style="display:none;">
                <a href="#" onclick="return false;" class="current">1</a>
                <a href="#" onclick="return false;">2</a>
                <a href="#" onclick="return false;">3</a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#inner').nav({ t: 3000, a: 1000 });
    </script>
<!-- banner 结束 -->
<!--页脚 开始 -->
<div id="footer_home">
	<div class="container">
		<div class="submenu fl">
			<a href="/">网站首页</a>|
			<a href="">法律声明</a>|
			<a href="">董事长信箱</a>|
			<a href="">总裁信箱</a>|
			<a href="">欢迎投稿</a>|
			<a href="/?p=22">联系我们</a>|
			<a href="/?p=23"">销售网络</a>
		</div>
		<div class="copyright fr">版权所有：广州市乌石拉链有限公司&nbsp;粤ICP备10230565</div>
	</div>
</div>
<!--页脚 开始 -->
</body>


</head>
</html>