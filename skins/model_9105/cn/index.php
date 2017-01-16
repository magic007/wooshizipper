<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Transitional//EN" "http://www.w3.org/tr/xhtml1/Dtd/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo SITESUMMARY.','.get_title_name($params['id'],$params['args']) ?>" />
<meta name="description" content="<?php echo get_description_name($params['id'],$params['args']) ?>" />
<title><?php echo get_title_name($params['id'],$params['args']) ?></title>
<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/lockall.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/index17.css" type="text/css" />
</head>
<body>
<div id="bbew"></div>
<dl class="thehd"><dt><a href="http://www.shenhoulong.com/"><img src="<?php echo get_skin_root() ?>images/logo.jpg" /></a></dt>
		<!--<form name="search" method="post" action="<?php echo $search ?>">
			<div id="search">
				<input name="keyword" type="text" size="20"  class="stext" value="<?php echo urldecode($_REQUEST['keyword'])?>"/>
				<input type="submit" name="Submit" class="sbtn" value="" />
			</div>
		</form>-->
<dd><div id="home-banner" align="right" style="padding-left:100px"><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></div></dd></dl>
<!--seach end-->
<!--nav beigin-->
<div class="thelk">
<ul class="zxnr">
<li class="on"><a href="<?php echo get_root_path() ?>/">首页</a></li>
<?php main_menu('<li>||</li>','<li class="on">||</li>') ?>
</ul>
</div>
<div class="centess pr">
  <div class="pr_1">
    <div class="r">
      <div id="tab01" class="tab01">
        <h3>关于我们</h3>
        <div>
          <dl>
            <dt><a href="#">深喉咙技术团队</a></dt>
            <dd><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D168F421DT20081205190728.jpg" alt="" /></a></dd>
            <dd>联系电话：0371-66052229</dd>
            <dd>传真：0371-69339333-808</dd>
          </dl>
          <ul>
            <?php echo dt_list(9,5,20,0,0,true,'id') ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="c">
      <dl class="q">
        <dt><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D172F421DT20090104111325.jpg" alt="" /></a></dt>
        <dd><a href="#"><strong>公司简介</strong></a></dd>
        <dd class="dvd"><?php echo dt_cn_article(1,57) ?> ...<a href="/?p=5" class="mr">【查看详细】</a></dd>
      </dl>
      <div class="w">
        <dl class="xubg1" onmouseover=this.className='xubg1' onmouseout=this.className=''>
          <dt><a href="#">行业咨询</a></dt>
         <?php echo dt_list(9,3,17,0,1,false,'id') ?>
        </dl>
        <dl onmouseover=this.className='xubg2' onmouseout=this.className=''>
          <dt><a href="#">专题新闻</a></dt>
          <?php echo dt_list(8,3,14,0,1,false,'id') ?>
        </dl>
      </div>
    </div>
    <div class="l">
      
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="265" height="324">
                <param name="movie" value="<?php echo get_skin_root() ?>indexflash/main.swf" />
                <param name="quality" value="high" />
                <embed src="<?php echo get_skin_root() ?>indexflash/main.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="265" height="324"></embed>
		 	</object>
    </div>
  </div>
<div id="tl03" style="margin:8px 0 0 0;" align="center"><a href="#" target=_blank><img src="<?php echo get_skin_root() ?>images/967X100.jpg"></a></div>
  <!--part3 begin-->

  <div class="pr_4">
    <div class="lt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_zzzd.gif" alt="公司简介" /></a>
        <span class="pr_more"><a href="#">more</a></span>

</div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D174F421DT20081225155606.jpg" alt="" /><strong>Profile</strong>公司简介
</a></div>
        <dl>
		<dt><a href="#">公司简介</a></dt>
		<dd><?php echo dt_cn_article(1,45) ?>...<a href="#" class="m">[查看详细]</a></dd>
		<dd>

			<ul>
				<?php echo dt_calllist(2,12,11,0,0,false,'id') ?>
			</ul>

		</dd>
		</dl>
      </div>
    </div>
    <div class="rt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_tmsc.gif" alt="新闻动态" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img">
			<a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D176F421DT20081225161152.jpg" alt="" /></a>
			<a href="#"><strong>News</strong>新闻动态</a>
		</div>
        <dl>
		<dt><a href="#">企业文化</a></dt>
		<dd><?php echo dt_cn_article(6,65) ?>...<a href="#" class="m">[查看详细]</a></dd>

		<dd>
			<ul>
			 	<?php echo dt_calllist(2,12,11,0,0,false,'id') ?>
			</ul>
		</dd>
		</dl>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <!--part5 begin-->
<div class="pr_4">
    <div class="lt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_jkyd.jpg" alt="技术支持" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D178F421DT20081225162102.jpg" alt="" /><strong>Support</strong>技术支持</a></div>
        <dl>
		<dt><a href="#">服务理念</a></dt>
		<dd><?php echo dt_cn_article(7,45) ?>...<a href="#" class="m">[查看详细]</a></dd>

		<dd>
			<ul>
				 <?php echo dt_calllist(2,12,11,0,0,false,'id') ?>
			</ul>
		</dd>
		</dl>
      </div>
    </div>
    <div class="rt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_xqnr.gif" alt="关于我们" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D180F421DT20081225155141.jpg" alt="" /><strong>About us</strong>关于我们</a></div>
        <dl>
		<dt><a href="#">关于Deepthroat</a></dt>
		<dd><?php echo dt_cn_article(1,70) ?>...<a href="#" class="m">[查看详细]</a></dd>

		<dd>
			<ul>
			 	<?php echo dt_calllist(2,12,11,0,0,false,'id') ?>
			</ul>
		</dd>
		</dl>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--尾部开始-->

<div id="bnav">
	<A href="#">关于我们</a>|
    <A href="#">版权信息</a>|
	<A href="#">合作伙伴</a>|
	<A href="#">招聘信息</a>|
    <A href="#">联系我们</a>|
    <A href="#">意见反馈</a>|
	<A href="#">网站地图</a>|
	<A href="#">网站帮助</a>|
	<A href="#">RSS订阅</a> 


</div>
<div id="copy">
深喉咙企业网站生成系统　<a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_DTrod_2.gif" width="80" height="15" alt="技术支持：深喉咙企业网站生成系统项目开发组" style="border:0;" /></a>
<br><br>Copyright &copy; 2006-2009 shenhoulong.com, All rights reserved. 
</div>
</body>
</html>