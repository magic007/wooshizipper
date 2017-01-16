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
			<p><a href="#">Set as my homepage</a><a href="#">Add to my favorite</a><a href="#">Register</a><a href="/?a=changeLanguage&SITELANGUAGE=cn">中文版本</a></p>
		</div>
		<div id="logo"></div>
		
		<div class="bar">
			<ul style="margin-left:240px;">
				<li class="active"><a href="#" accesskey="i">Home</a></li>
				<?php main_menu('<li>||</li>','<li class="active">||</li>') ?>
			</ul>
		</div>
		<div class="search_field">
			
				<div class="search_form"><form name="search" method="post" action="<?php echo $search ?>">
				<p>Site Search:  <input name="keyword" type="text" value="<?php echo urldecode($_REQUEST['keyword'])?>" class="search" /> <input name="search" onClick="search.action='?m=search';search.submit();" type="submit" value="Search" class="submit" /></p>
				</form></div>
			
			<p style="padding-left:24px; padding-top:4px;"><script language="JavaScript">                       
            thisdate=new Date()                 
            thismonth=thisdate.getMonth();                 
			switch(thismonth){
			case 0: thismonth="January"; break;
			case 1: thismonth="February"; break;  
			case 2: thismonth="March"; break;  
			case 3: thismonth="April"; break;  
			case 4: thismonth="May"; break;  
			case 5: thismonth="June"; break;  
			case 6: thismonth="July"; break;  
			case 7: thismonth="August"; break;  
			case 8: thismonth="September"; break;  
			case 9: thismonth="October"; break;
			case 10: thismonth="November"; break;  
			case 11: thismonth="December"; break;       
			}         	        
            thisday=thisdate.getDate()                 
            thisyear=thisdate.getYear()                               
            thisweek=thisdate.getDay();                 
            switch(thisweek){                 
	        case 0: thisweek="Sunday"; break;                 
            case 1: thisweek="Monday"; break;                 
            case 2: thisweek="Tuesday"; break;                 
            case 3: thisweek="Wednesday"; break;                 
            case 4: thisweek="Thursday"; break;                 
            case 5: thisweek="Friday"; break;                 
            case 6: thisweek="Saturday"; break;                 
             }                  
           if (thisyear<2000)                  
              {thisyear=thisyear+1900} 
			  document.write("Today: "+thismonth+" "+thisday+","+thisyear+" "+thisweek)                         
         </script></p>
		</div>
		
		<div class="left">
			<h2> <span class="orange">About us</span></h2>
			<div class="left_box">
				<img src="<?php echo get_skin_root() ?>images/bigimage.gif" class="image" alt="Big Image" />
				<p><?php echo dt_en_article(10,530)?></p>
			</div>
							
			<h2><span style="padding-left:24px;">Company</span></h2>
				<div class="left_box">
				<img src="<?php echo get_skin_root() ?>images/ad.gif" class="image" alt="Big Image" />
				<p><?php echo dt_en_article(10,530)?></p>
						
			<h2><span style="padding-left:24px;">News</span></h2>
				<div class="left_side">
				<?php echo dt_list(17,4,20,0,1,true) ?>

				</div>
				<div class="right_side">
				<?php echo dt_list(18,4,20,0,1,true) ?>
				</div>
			</div>
		</div>
		
<div class="right">
			<h3 style="font-size:15px; padding-left:12px;">Display case</h3>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image1.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.nlscan.com/" target="_blank">Fujian Newland Co., Ltd.</a></b><br />Fujian Technology Group, a member of the New World enterprises, and this is the New World Computer Co., Ltd. of Fujian investment holding company.</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image2.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.jlcpa.com.cn/" target="_blank">Foshan Chun Lang accounting firm</a></b><br />Predecessor company, which was established in 1989 under the South China Sea, the South China Sea, SAB auditors.</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image4.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.xpfc.com.cn" target="_blank">CHAPIN Technology Co., Ltd. </a></b><br />MOUNT BOGDA located in the Tianshan Mountains at the foot of the mountain Xuelian, only six kilometers from the city center.</p>
			</div>
			<div class="right_articles">
				<p><img src="<?php echo get_skin_root() ?>images/image3.jpg" alt="Image" title="Image" class="image" /><b><a href="http://www.dingshengcn.com/" target="_blank">DingSheng Technology Co., Ltd. </a></b><br />Network-oriented professionals and industry clients, providing end-to-end integrated network of energy solutions.</p>
			</div>
			<div class="notice">
				<p><b>制作网站原来如此简单！</b><br />
				如果你想制作网站, 不妨请试试<a href="http://www.deepthroat.com.cn/cn/">深喉咙企业网站生成系统吧！</a>, 你会发现制作网站是如此的简单！</p></p>
			</div>
			</div>
		</div>	
		<div style=" padding-left:20px;"><?php echo dt_image_linkers(24,20,0) ?></div> 	
		<div style=" padding-left:20px"><?php echo dt_text_linkers(25,20,0) ?></div> 
		<div class="footer">
			<p><a href="#">Advertise with Us</a> | <a href="#">Search Marketing</a> | <a href="#"> Privacy Policy</a> | <a href="#">Terms of Service</a> | <a href="#">Suggest a Site</a> | <a href="#">Send Feedback</a><br />
			&copy; Copyright 2008 deepthroat.com.cn, Design: <a href="http://www.deepthroat.com.cn/cn/" title="Realure">Realure</a></p>
		</div>
	</div>
</body>
</html>