<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="author" content="<?php echo SITENAME ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/style.css" type="text/css" />
	<title><?php echo SITENAME ?></title>
</head>
<body>
	<div class="content">
		<div id="top">
			<p><a href="#">设为首页</a><a href="#">加为收藏</a><a href="#">我要注册</a><a href="/?a=changeLanguage&SITELANGUAGE=en">English</a></p>
		</div>
		<div id="logo"></div>
		
		<div class="bar">
			<ul style="margin-left:370px;">
				<li class="active"><a href="#" accesskey="i">首页</a></li>
				<?php main_menu('<li>||</li>','<li class="active">||</li>') ?>
			</ul>
		</div>
		<div class="search_field">
			
				<div class="search_form"><form name="search" method="post" action="<?php echo $search ?>">
				<p>站内搜索:  <input name="keyword" type="text" value="<?php echo urldecode($_REQUEST['keyword'])?>" class="search" /> <input name="search" onClick="search.action='?m=search';search.submit();" type="submit" value="搜索" class="submit" /></p>
				</form></div>
			
			<p style="padding-left:24px; padding-top:4px;"><script language="JavaScript">                       
            thisdate=new Date()                 
            thismonth=thisdate.getMonth()                 
            thismonth=thismonth+1                 
            thisday=thisdate.getDate()                 
            thisyear=thisdate.getYear()                               
            thisweek=thisdate.getDay();                 
            switch(thisweek){                 
	        case 0: thisweek="星期日"; break;                 
            case 1: thisweek="星期一"; break;                 
            case 2: thisweek="星期二"; break;                 
            case 3: thisweek="星期三"; break;                 
            case 4: thisweek="星期四"; break;                 
            case 5: thisweek="星期五"; break;                 
            case 6: thisweek="星期六"; break;                 
             }                 
           if (thisyear<2000)                  
              {thisyear=thisyear+1900}                 
              document.write("今天是: "+thisyear+"年"+thismonth+"月"+thisday+"日"+" "+thisweek)                 
         </script></p>
		</div>
		
		<div class="left">
			<h2> <span class="orange">关于我们</span></h2>
			<div class="left_box">
				<img src="<?php echo get_skin_root() ?>images/bigimage.gif" class="image" alt="Big Image" />
				<p><?php echo dt_cn_article(1,232)?></p>
			</div>
							
			<h2><span style="padding-left:24px;">公司介绍</span></h2>
				<div class="left_box">
				<img src="<?php echo get_skin_root() ?>images/ad.gif" class="image" alt="Big Image" />
				<p><?php echo dt_cn_article(1,232)?></p>
						
			<h2><span style="padding-left:24px;">公司新闻</span></h2>
				<div class="left_side">
				<?php echo dt_list(8,4,20,0,1,true) ?>

				</div>
				<div class="right_side">
				<?php echo dt_list(9,4,20,0,1,true) ?>
				</div>
			</div>
		</div>
		
<div class="right">
			<h3 style="font-size:15px; padding-left:12px;">案例展示</h3>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image1.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.nlscan.com/" target="_blank">福建新大陆自动识别技术有限公司</a></b><br />福建新大陆科技集团的成员企业，是福建新大陆电脑股份有限公司投资控股的企业。</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image2.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.jlcpa.com.cn/" target="_blank">佛山市南海骏朗会计师事务所</a></b><br />公司前身是成立于1989年的南海市审计局下属的南海市审计师事务所，是一个积极向上，不断进取的专业人士群体。</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image4.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.xpfc.com.cn" target="_blank">祥平房地产开发有限公司</a></b><br />隶属于新疆祥平企业（集团）。公司座落在乌鲁木齐市风景优美、景色怡人的首府绿岛水磨沟旅游风景区，位于天山山脉博格达峰脚下的雪莲山，距市中心仅6公里，交通十分便利。</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image3.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.dingshengcn.com/" target="_blank">郑州鼎晟科技有限公司</a></b><br />以华为技术、艾默生网络能源产品为龙头，面向专网和行业客户，提供通信网络解决方案和端到端一体化网络能源解决方案。</p>
			</div>
			<div class="notice">
				<p><b>制作网站原来如此简单！</b><br />
				如果你想制作网站, 不妨请试试<a href="http://www.deepthroat.com.cn/cn/">深喉咙企业网站生成系统吧！</a>, 你会发现制作网站是如此的简单！</p></p>
			</div>
		</div>	
		</div>
			<div style=" padding-left:20px"><?php echo dt_image_linkers(24,20,0) ?></div> 
		<div class="footer">
			<p><a href="#">关于我们</a> | <a href="#">版权声明</a> | <a href="#">商业伙伴</a> | <a href="#">法律声明</a> | <a href="#">联系我们</a> | <a href="#">公司招聘</a><br />
			&copy; Copyright 2008 deepthroat.com.cn, Design: <a href="http://www.deepthroat.com.cn/cn/" title="Realure">Realure</a></p>
		</div>
	</div>
</body>
</html>