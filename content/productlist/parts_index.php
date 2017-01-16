<style media="all" type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
#tabbar {
	clear:both;
	margin-left:10px;
	margin-top:10px;
	margin-bottom:10px;
	height:20px;
	background-image:url(/images/greyborder.gif);
	background-position: bottom;
	background-repeat:repeat-x;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height:17px;
}
.producttab {
	border:1px solid #aeb1b1;
	height:18px;
	margin-left:4px;
	float:left;
	text-align:center;
}
.producttab a {
	background-color: #edf2f6;
	color:#5d97d3;
	display:block;
	height:100%;
	float:left;
	padding:0px 4px;
	text-decoration:none;
}
.producttab a:hover {
	color:#ffffff;
	background-color:#5d97d3;		
	display:block;
	height:100%;
	float:left;
	text-decoration:none;
}
.producttab_on {
	background-color: #ffffff;
	border-top:1px solid #aeb1b1;
	border-left:1px solid #aeb1b1;
	border-right:1px solid #aeb1b1;
	border-bottom:1px solid #ffffff;
	height:18px;
	margin-left:4px;
	float:left;
	padding:0px 4px;
	text-align:center;
}
.producttab_on a {
	background-color: #ffffff;
	color:#5d97d3;
	display:block;
	height:100%;
	float:left;
	text-decoration:none;
}
#overview_tab {
	}
#datasheet_tab {
	}
#related_tab {
	}
#faq_tab {
	}
#technologies_tab {
	}
#examples_tab {
	}
#accessories_tab {
	}
#news_tab {
	}
#publicity_tab {
	}

#pr_overview {
	}
#pr_datasheet {
	}
.pr_show {
	display:block;
	margin-right:10px;
	margin-bottom:20px;
}
.pr_hide {
	display:none;
}
#leftcontent {
	float:left;
	min-width:429px;
	margin-left:15px;
}
-->
</style>
<script language="javascript">
var debug = false;
function showTab(tab) {
	// tabdivs
	usertab = tab;
	t1 = document.getElementById('pr_overview');
	t2 = document.getElementById('pr_datasheet');
	t3 = document.getElementById('pr_related');
	t4 = document.getElementById('pr_faq');
	t5 = document.getElementById('pr_technologies');
	t6 = document.getElementById('pr_examples');
	t7 = document.getElementById('pr_accessories');
	t8 = document.getElementById('pr_news');
	t9 = document.getElementById('pr_publicity');
	
	rh1 = document.getElementById('services_available');
	rh2 = document.getElementById('product_images');
	rh3 = document.getElementById('related_pdf');

	navbar = document.getElementById('tabbar');
	test = navbar.getElementsByTagName('DIV');
	for (i=0; i < test.length; i++) {
		if (test[i].id == tab+'_tab') {
			test[i].className = 'producttab_on';
		} else {
			test[i].className = 'producttab';
		}
	}
	if (t1) {
	if (t1.id == 'pr_'+tab) {
			t1.className = 'pr_show';
			if (rh1) {
				rh1.className = 'pr_show';
			}
			if (rh2) {
				rh2.className = 'pr_show';
			}
	} else {
			t1.className = 'pr_hide';
			if (rh1) {
				rh1.className = 'pr_hide';
			}
			if (rh2) {
				rh2.className = 'pr_hide';
			}
	}
	}
	if (t2) {
	if (t2.id == 'pr_'+tab) {
			t2.className = 'pr_show';
			if (rh3) {
				rh3.className = 'pr_show';
			}
	} else {
			t2.className = 'pr_hide';
			if (rh3) {
				rh3.className = 'pr_hide';
			}
	}
	}
	if (t3) {
	if (t3.id == 'pr_'+tab) {
		t3.className = 'pr_show';
	} else {
		t3.className = 'pr_hide';
	}
	}
	if (t4) {
	if (t4.id == 'pr_'+tab) {
		t4.className = 'pr_show';
	} else {
		t4.className = 'pr_hide';
	}
	}
	if (t5) {
	if (t5.id == 'pr_'+tab) {
		t5.className = 'pr_show';
	} else {
		t5.className = 'pr_hide';
	}
	}
	if (t6) {
	if (t6.id == 'pr_'+tab) {
		t6.className = 'pr_show';
	} else {
		t6.className = 'pr_hide';
	}
	}
	if (t7) {
	if (t7.id == 'pr_'+tab) {
		t7.className = 'pr_show';
	} else {
		t7.className = 'pr_hide';
	}
	}
	if (t8) {
	if (t8.id == 'pr_'+tab) {
		t8.className = 'pr_show';
	} else {
		t8.className = 'pr_hide';
	}
	}
	if (t9) {
	if (t9.id == 'pr_'+tab) {
		t9.className = 'pr_show';
	} else {
		t9.className = 'pr_hide';
	}
	}
}
</script>
<?php product_list() ?>
<?php
function product_list()
{
	global $db,$params,$request,$pfileName;
	if(URLREWRITE)
	{
		if (!$request['c'])
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."productlist` order by case ordering when 0 then id else ordering end desc) as `productlist` where channelId=$params[id]",'ordering desc',$db,productCount,true,'/');
		else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."productlist` order by case ordering when 0 then id else ordering end desc) as `productlist` where channelId=$params[id] and categoryId=".$request['c']."",'ordering desc',$db,productCount,true,'/');
	}
	else
	{
		if (!$request['c'])
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."productlist` order by case ordering when 0 then id else ordering end desc) as `productlist` where channelId=$params[id]",'ordering desc',$db,productCount,true,'./');
		else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."productlist` order by case ordering when 0 then id else ordering end desc) as `productlist` where channelId=$params[id] and categoryId=".$request['c']."",'ordering desc',$db,productCount,true,'./');

	}

	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			if(URLREWRITE)
			{
				if(!$request['c'])
				{
					?>			
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品型号：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>产品类别：<?php echo $rst['sn'] ?></dd>
					<dd>识读方式：<?php echo $rst['readers'] ?></dd>
					<dd>通讯方式：<?php echo $rst['communications'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html">获得详情</a></span>
					</div>
					<?php
				}
				else
				{
					?>			
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品型号：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>产品类别：<?php echo $rst['sn'] ?></dd>
					<dd>识读方式：<?php echo $rst['readers'] ?></dd>
					<dd>通讯方式：<?php echo $rst['communications'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html">获得详情</a></span>
					</div>
					<?php

				}
			}
			else
			{
				if(!$request['c'])
				{
					?>			
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品型号：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>产品类别：<?php echo $rst['sn'] ?></dd>
					<dd>识读方式：<?php echo $rst['readers'] ?></dd>
					<dd>通讯方式：<?php echo $rst['communications'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>">获得详情</a></span>
					</div>
					<?php
				}
				else
				{
					?>			
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品型号：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>产品类别：<?php echo $rst['sn'] ?></dd>
					<dd>识读方式：<?php echo $rst['readers'] ?></dd>
					<dd>通讯方式：<?php echo $rst['communications'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>">获得详情</a></span>
					</div>
					<?php
				}
			}
		}
		echo '<div class="pager">'.$sb->get_pager_show().'</div>';
	}
	else
	{
		echo '暂无产品列表。';
	}
}
?>