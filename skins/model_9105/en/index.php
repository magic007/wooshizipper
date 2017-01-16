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
<dd><div id="home-banner" align="right" style="padding-left:100px"><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版</a></div></dd></dl>
<!--seach end-->
<!--nav beigin-->
<div class="thelk">
<ul class="zxnr">
<li class="on"><a href="<?php echo get_root_path() ?>/">Home</a></li>
<?php main_menu('<li>||</li>','<li class="on">||</li>',"") ?>
</ul>
</div>
<div class="centess pr">
  <div class="pr_1">
    <div class="r">
      <div id="tab01" class="tab01">
        <h3>About Us</h3>
        <div>
          <dl>
            <dt><a href="#">Deepthroat Team</a></dt>
            <dd><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D168F421DT20081205190728.jpg" alt="" /></a></dd>
            <dd>Tel：0371-66052229</dd>
            <dd>FAX：0371-69339333-808</dd>
          </dl>
          <ul>
            <?php echo dt_list(17,5,20,0,0,true,'id') ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="c">
      <dl class="q">
        <dt><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D172F421DT20090104111325.jpg" alt="" /></a></dt>
        <dd><a href="#"><strong>Company Profile</strong></a></dd>
        <dd class="dvd"><?php echo dt_cn_article(10,57) ?> ...<a href="/?p=5" class="mr">【View Details】</a></dd>
      </dl>
      <div class="w">
        <dl class="xubg1" onmouseover=this.className='xubg1' onmouseout=this.className=''>
          <dt><a href="#">行业咨询</a></dt>
         <?php echo dt_list(17,3,17,0,1,false,'id') ?>
        </dl>
        <dl onmouseover=this.className='xubg2' onmouseout=this.className=''>
          <dt><a href="#">专题新闻</a></dt>
          <?php echo dt_list(18,3,14,0,1,false,'id') ?>
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
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_zzzd.gif" alt="Company Profile" /></a>
        <span class="pr_more"><a href="#">more</a></span>

</div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D174F421DT20081225155606.jpg" alt="" /><strong>Profile</strong>Company Profile
</a></div>
        <dl>
		<dt><a href="#">Company Profile</a></dt>
		<dd><?php echo dt_cn_article(10,45) ?>...<a href="#" class="m">[View Details]</a></dd>
		<dd>

			<ul>
				<?php echo dt_calllist(11,12,11,0,0,false,'id') ?>
			</ul>

		</dd>
		</dl>
      </div>
    </div>
    <div class="rt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_tmsc.gif" alt="news" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img">
			<a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D176F421DT20081225161152.jpg" alt="" /></a>
			<a href="#"><strong>News</strong>news</a>
		</div>
        <dl>
		<dt><a href="#">Enterprise Culture</a></dt>
		<dd><?php echo dt_cn_article(15,65) ?>...<a href="#" class="m">[View Details]</a></dd>

		<dd>
			<ul>
			 	<?php echo dt_calllist(11,12,11,0,0,false,'id') ?>
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
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_xqnr.gif" alt="Support" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D178F421DT20081225162102.jpg" alt="" /><strong>Support</strong></a></div>
        <dl>
		<dt><a href="#">Service philosophy</a></dt>
		<dd><?php echo dt_cn_article(16,45) ?>...<a href="#" class="m">[View Details]</a></dd>

		<dd>
			<ul>
				 <?php echo dt_calllist(11,12,11,0,0,false,'id') ?>
			</ul>
		</dd>
		</dl>
      </div>
    </div>
    <div class="rt">
      <div class="h"><a href="#"><img src="<?php echo get_skin_root() ?>images/hy_jkyd.jpg" alt="About Us" /></a>
        <span class="pr_more"><a href="#">more</a></span></div>
      <div class="gg1">
        <div class="img"><a href="#"><img src="<?php echo get_skin_root() ?>images/U87P1T30D180F421DT20081225155141.jpg" alt="" /><strong>About us</strong>About Us</a></div>
        <dl>
		<dt><a href="#"> About Deepthroat</a></dt>
		<dd><?php echo dt_cn_article(10,70) ?>...<a href="#" class="m">[View Details]</a></dd>

		<dd>
			<ul>
			 	<?php echo dt_calllist(11,12,11,0,0,false,'id') ?>
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
	<A href="#">About Us</a>|
    <A href="#">Copyright</a>|
	<A href="#">Partners</a>|
	<A href="#">Recruitment</a>|
    <A href="#">Contact Us</a>|
    <A href="#">Suggest Feedback</a>|
	<A href="#">Webmap</a>|
	<A href="#">Help</a>|
	<A href="#">RSS</a> 


</div>
<div id="copy">
Deep-throat corporate Web site Generation System　<a href="http://www.shenhoulong.com/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_DTrod_2.gif" width="80" height="15" alt="Technical Support: Deep throat corporate web site generation system project development group" style="border:0;" /></a>
<br><br>Copyright &copy; 2006-2009 shenhoulong.com, All rights reserved. 
</div>
</body>
</html>