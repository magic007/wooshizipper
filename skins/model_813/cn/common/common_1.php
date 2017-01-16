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
<div id="header">
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
<div id="nav" class="nav_home">
	<ul class="container">
            <li class="no_bg"><a href="<?php echo $tag['path.root']?>/" >公司首页</a></li>
			<?php main_menu('<li>||</li>','<li>||</li>') ?>
	</ul>
	<div class="subnav_bg"></div>
</div>
<!--导航 结束 -->
<!--主内容 开始 -->
<div <?php if(in_array($params[id],array(18,19,20,21,22,23))){?>id="contact"<?php }else{?> id="about"<?php }?>  class="clearfix">
	<div class="container">
		<div class="menu clearfix">
			<ul>
				<?php sub_menu('<li>||</li>','<li>||</li>') ?>
			</ul>
		</div>
		<div class="bd">
			<div class="main contact_main">
			    <div id="scrollbar" style="height: 220px; overflow: hidden; position: relative;">
				<?php layout_part() ?>
				</div>
			</div>
			<div class="main_img fl">
				<?php if(in_array($params[id],array(1,4,5,6,7,27))){ ?>
				<img src="<?php echo get_skin_root()?>img/about_img.jpg" width="288" height="304" alt="乌石拉链">
				<?php }else if(in_array($params[id],array(21,22,23))){?>
				<img src="<?php echo get_skin_root()?>img/contact_img.jpg" width="288" height="304" alt="乌石拉链">
				<?php }else if(in_array($params[id],array(18,19,20))){?>
				<img src="<?php echo get_skin_root()?>img/join_img.jpg" width="288" height="304" alt="乌石拉链">
				<?php }?>
			</div>
		</div>
	</div>
</div>
<!--主内容 结束 -->
<!--页脚 开始 -->
<div id="footer">
	<div class="container">
		<div class="submenu fl">
			<a href="/">网站首页</a>|
			<a href="">法律声明</a>|
			<a href="">董事长信箱</a>|
			<a href="">总裁信箱</a>|
			<a href="">欢迎投稿</a>|
			<a href="/index.php?p=22">联系我们</a>|
			<a href="/index.php?p=23">销售网络</a>
		</div>
		<div class="copyright fr">版权所有：广州市乌石拉链有限公司&nbsp;粤ICP备10230565</div>
	</div>
</div>
<!--页脚 结束 -->
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.jscroll.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/scrollbar.js"></script>
<script>
$(function(){
	$(".container > li").mouseenter(function(){		
		if($(this).find($(".subnav")).size()!=0){
			$(".subnav",this).show();
			$(".subnav_bg").show();
		}
		
	})
	$(".container > li").mouseleave(function(){
		if($(this).find($(".subnav")).size()!=0){
			$(".subnav",this).hide();
			$(".subnav_bg").hide();
		}
		
	})
});
function shoucang(sTitle,sURL){
    try { 
         window.external.addFavorite(sURL, sTitle); 
    }catch (e){ 
        try{ 
            window.sidebar.addPanel(sTitle, sURL, ""); 
        }catch (e){
            alert("加入收藏失败，请使用Ctrl+D进行添加"); 
        } 
    } 

}
</script>
</body>
</html>