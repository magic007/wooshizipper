<style media="all" type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
#pr_top {
	font-family: Verdana, Arial, Helvetica, sans-serif;	
	margin-bottom:10px;
}
#prtopfeature {
	width:560px;
	margin-bottom:20px;
}
#pr_top h1 {
	font-size: 15px;
	color:#cc5500;
	font-weight:bold;
	margin-top:5px;
	margin-bottom:5px;
	margin-left:10px;
}
#pr_gfx {
	float:left;

}	
#pr_top_incontext {
	width:280px;
	float:right;
	text-align:left;
/*	margin-right:20px; */
	border-bottom:4px solid #7ca7d3;
}
#princontexttitle {
	background-color:#7ca7d3;
	color:#ffffff;
	padding:5px;
	font-size:11px;
	font-weight:bold;
	border-bottom:2px solid #cccccc;
}
#pr_incontext {
	background-image:url(<?php echo get_skin_root() ?>images/incontextbck.gif);
	padding:2px 0px;
}
#pr_incontextlist {
	margin-right:8px;
	margin-left:4px;
	margin-top:5px;
}
#pr_incontextlist ul {
	padding:4px 4px 0px 0px;
	list-style:none;
}
#pr_incontextlist li {
	display:block;
	padding-left:12px;
	padding-bottom:2px;
	margin-bottom:4px;
	background-image:url(<?php echo get_skin_root() ?>images/bullet.gif); 
	background-repeat:no-repeat;
	background-position:1px 8px;
	font-size:11px;
}
#pr_incontextlist a {
	text-decoration:none;
}
#pr_incontextlist a:hover {
	text-decoration:underline;
}
#tabbar {
	clear:both;
	margin-left:10px;
	margin-top:10px;
	margin-bottom:10px;
	height:20px;
	background-image:url(<?php echo get_skin_root() ?>images/greyborder.gif);
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
#pic_positon { 
margin-top:0px;
margin-left:40px;
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
<div id="pr_top">
	<table border="0" width="100%" id="producttitle">
		<tr valign="top">
			<td align="left">
				<h1><?php data('productlist.name') ?></h1>
			</td>
			<td align="right"></td>
		</tr>
	</table>
	<div id="prtopfeature">
	<table border="0" width="100%" id="productlayout">		
		<tr valign="top">
			<td align="left">
				<div id="pr_gfx">
					<div id="pic_positon"><img alt="MC353" src="<?php echo data('productlist.middlePic') ?>"></div>	</div>
			</td>
			<td align="right">
				<div id="pr_top_incontext"> 
					<div id="princontexttitle">Product Information</div>
						<div id="pr_incontext">
							<div id="pr_incontextlist">
							<ul>
								<li>Model：<?php echo data('productlist.name') ?></li>
								<li>Product Category：<?php echo data('productlist.sn') ?></li>
								<li>Data type：<?php echo data('productlist.datatype') ?></li>
								<li>Reading Mode ：<?php echo data('productlist.readers') ?></li>
								<li>Interface：<?php echo data('productlist.communications') ?></li>
								<li>Wireless：<?php echo data('productlist.wireless') ?></li>
							</ul>        
							</div>
						</div>
					</div>
			</td>
		</tr>
	</table>
	</div>
</div>
<div id="tabbar">
	<div class="producttab_on" id="overview_tab"><a name="overview" id="overview_link" href="#" onclick="showTab(this.name); return false;">Overview </a></div>	
	<div class="producttab" id="datasheet_tab"><a name="datasheet" id="datasheet_link" href="#" onclick="showTab(this.name); return false;">Parameters</a></div>	
	<div class="producttab" id="related_tab"><a id="related_link" name="related" href="#" onclick="showTab(this.name); return false;">Documents</a></div>	
	<div class="producttab" id="faq_tab"><a id="faq_link" name="faq" href="#" onclick="showTab(this.name); return false;">FAQ</a></div>	
	<div class="producttab" id="technologies_tab"><a id="technologies_link" name="technologies" href="#" onclick="showTab(this.name); return false;">Software</a></div>
	<div class="producttab" id="examples_tab"><a id="examples_link" name="examples" href="#" onclick="showTab(this.name); return false;">Example</a></div>
	<div class="producttab" id="accessories_tab"><a id="accessories_link" name="accessories" href="#" onclick="showTab(this.name); return false;">Accessories </a></div>
</div>
<div id="leftcontent">
<div id="pr_overview" class="pr_show">
<p>
<?php echo data('productlist.introduction') ?>
<?php echo data('productlist.summary') ?></p>
</div>
<div id="pr_datasheet" class="pr_hide">
<p>
<?php data('productlist.parameters') ?>
</p>
</div>
<div id="pr_related" class="pr_hide">
<p>
<?php download_categories(documents)?>
</p>
</div>
<div id="pr_faq" class="pr_hide">
<p>
<?php data('productlist.faq') ?>
</p>
</div>
<div id="pr_technologies" class="pr_hide">
<p>
<?php download_categories(softwarename)?>
</p>
</div>
<div id="pr_examples" class="pr_hide">
<p>
<?php download_categories(examples)?>
</p>
</div>
<div id="pr_accessories" class="pr_hide">
<p>
<?php data('productlist.accessories') ?>
</p>
</div>
<div id="pr_news" class="pr_hide">
<p>
<?php data('productlist.newscontent') ?>
</p>
</div>
<div id="pr_publicity" class="pr_hide">
<p>
<?php download_categories(publicity)?>
</p>
</div>
</div>