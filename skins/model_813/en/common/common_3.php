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
		<a href=""><h1 id="logo">Wu Shi zipper</h1></a>
		<div class="shortcut fr">
			<div class="submenu"><a href="javascript:;" onclick="shoucang('wushi.com','Guangzhou wooshi zipper Co. Ltd')">Add to Favorites</a>|<a href="/?a=changeLanguage&SITELANGUAGE=cn">中文</a></div>
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
            <li class="no_bg"><a href="<?php echo $tag['path.root']?>/" >HOME</a></li>
			<?php main_menu('<li>||</li>','<li>||</li>') ?>
	</ul>
	<div class="subnav_bg"></div>
</div>
<!--导航 结束 -->
<!--主内容 开始 -->
<div id="products" class="clearfix">
   
	<div class="container">
		<div class="menu clearfix">
			<ul>
				<?php sub_menu('<li>||</li>','<li>||</li>') ?>
			</ul>
		</div>
		<div class="bd">
			<ul>
			    <?php 
		                global $db,$params,$request;
					    $result = $db->get_col("select id from ".TB_PREFIX."menu where parentId =". $params[id]." order by ordering limit 1");
		                if(!empty($result[0])){
		                     $params[id] = $result[0];
		                 }
					    
						$request = $db->get_results("select id,title,channelId,smallPic from  ".TB_PREFIX."list where channelId = ".$params[id]." order by editTime DESC");
						if($request){
							foreach($request as $value){
								echo '<li class="show_iframe"><a href="/?p='.$value->channelId.'&a=goods_view&r='.$value->id.'"  target="myframe"><img src='.$value->smallPic.' alt="乌石拉链" title='.$value->title.' /></a></li>';
							}
                        }
					?>
			</ul>
		</div>
		<div class="popup"><iframe name="myframe" id="myframe" marginwidth="0" marginheight="0" frameborder="0" scrolling="no"  width="685px" height="600px" src=""></iframe><div class="close"></div></div>
		<!--产品中心详细页弹出层 开始 -->
	</div>
</div>
<!--主内容 结束 -->
<!--页脚 开始 -->
<div id="footer">
	<div class="container">
		<div class="submenu fl">
			<a href="/">HOME</a>|
			<a href="">Legal statement</a>|
			<a href="">Welcome contribution</a>|
			<a href="/?p=47">Contact us</a>|
			<a href="/?p=48">Sales network</a>
		</div>
		<div class="copyright fr"> All right reserved：Guangzhou wooshi zipper Co. Ltd &nbsp;Guangdong ICP preparation10230565</div>
	</div>
</div>
<!--页脚 结束 -->
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.jscroll.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/scrollbar.js"></script>
<script>
$(function(){
	$(".container > li").mouseenter(function(){
		$(".subnav",this).show();
	})
	$(".container > li").mouseleave(function(){
		$(".subnav",this).hide();
	})
});
function shoucang(sTitle,sURL){
    try { 
         window.external.addFavorite(sURL, sTitle); 
    }catch (e){ 
        try{ 
            window.sidebar.addPanel(sTitle, sURL, ""); 
        }catch (e){
            alert("Add to Favorites failed, please use Ctrl+D to add"); 
        } 
    } 

}
</script>
</body>
</html>