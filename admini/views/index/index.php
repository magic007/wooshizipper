<div id="pagebody">
	<div id="help">
		<h1 class="titles">
			<span class="titl">帮助文档</span><span class="enname">Help</span><span class="hlog"></span>
		</h1>
		<ul>
			<li>
				<img src="../inc/img/admin/target.gif" />
				<p><a href="./index.php?m=system&amp;s=managechannel">添加网站栏目</a></p>
				<p>管理员可以从这里开始建设网站，给网站设定栏目。</p>
			</li>
			<li>
				<img src="../inc/img/admin/pencil.gif" />
				<p><a href="./index.php?m=system&amp;s=changeskin">更改网站样式</a></p>
				<p>您可以选择一个您喜欢的网站样式，并且用它来生成您的网站。</p>
			</li>
			<li>
				<img src="../inc/img/admin/note.gif" />
				<p><a href="http://www.shenhoulong.net/viewthread.php?tid=6093" target="_blank">添加网站内容帮助</a></p>
				<p>这里是一本帮助手册，以便于让您了解如何向网站中添加内容。这是非常简单的。</p>
			</li>
		</ul>
	</div>
	<div id="info">
		<h1 class="titles" id="titlesr">
			<span class="titl">最新信息</span><span class="enname">Latest&nbsp; Information</span><span class="hlog"></span>
		</h1>
		<div id="mnews">
			<div class="menu1box">
			   <ul id="menu1">
				<li class="hover" onmouseover="setTab(1,0)"><a href="#">常见问题</a></li>
				<li onmouseover="setTab(1,1)"><a href="#">最新新闻</a></li>
				<li onmouseover="setTab(1,2)"><a href="#">最新评论</a></li>				
			   </ul>
			</div>
			<div class="main1box">
			   <div class="main" id="main1">
				<ul class="block"><li>
					<div class="lsn">
						<ol>
							<li><span>2008-08-28</span><a href="http://www.shenhoulong.net/viewthread.php?tid=6093" target="_blank">Deepthroat CMS系列帮助视频</a></li>
							<li><span>2008-09-02</span><a href="http://www.shenhoulong.net/thread-6131-1-1.html" target="_blank">页面静态化(url重写) 彻底解决</a></li>
							<li><span>2008-12-06</span><a href="http://www.shenhoulong.net/thread-6985-1-1.html" target="_blank">深喉咙企业网站生成系统《模板制作》标签一览</a></li>
							<li><span>2008-08-30</span><a href="http://www.shenhoulong.net/thread-6113-1-1.html" target="_blank">为首页导航菜单栏增加下拉子菜单</a></li>	
							<li><span>2008-08-20</span><a href="http://www.shenhoulong.net/thread-6046-1-1.html" target="_blank">新手安装Deepthroat小记</a></li>
							<li><span>2009-12-09</span><a href="http://www.shenhoulong.net/thread-7072-1-1.html" target="_blank">深喉咙系统官方在线qq及交流群最新整理</a></li>
						</ol>
					</div>					
				</li></ul>
				<ul><li>
					<div class="lsn">
						<ol>
							<?php echo $news_list_content;?>
						</ol>
					</div>
				</li></ul>
				<ul><li>
					<div class="lsn">
						<ol>
						<?php echo $contents;?>
						</ol>
					</div>
				</li></ul>
			   </div>
			</div>
		</div>
		<script>
			function setTab(m,n){
			var tli=document.getElementById("menu"+m).getElementsByTagName("li");
			var mli=document.getElementById("main"+m).getElementsByTagName("ul");
			for(i=0;i<tli.length;i++){
			   tli[i].className=i==n?"hover":"";
			   mli[i].style.display=i==n?"block":"none";
			}
			}
		</script>
	</div>
	<div id="site">
		<h1 class="titles">
			<span class="titl">站点状态</span><span class="enname">Site&nbsp; Statistics</span><span class="hlog"></span>
		</h1>
		<ul>
			<li><span class="stname">服务器IP</span><span><?php echo $_SERVER['SERVER_ADDR'] ?></span></li>
			<li><span class="stname">站点状态</span><span>开</span></li>
			<li><span class="stname">深喉咙版本</span><span><?php echo VERSION ?></span></li>
			<li><span class="stname">PHP环境版本</span><span><?php echo $_SERVER['SERVER_SOFTWARE'] ?></span></li>
			<li><span class="stname">Mysql版本</span><span><?php global $db;echo $db->get_var('select VERSION()');?></span></li>
		</ul>
	</div>
	<div id="stats">
		<h1 class="titles" id="titlesr">
			<span class="titl">网站统计</span><span class="enname">Site&nbsp; Stats</span><span class="hlog"></span>
		</h1>
		<ul>
			<li class="stactop"><span class="atsn">图文模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."article");?></span></li>
			<li class="statop"><span class="atsn">文章列表</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."list");?></span></li>
			<li class="statop"><span class="atsn">图片模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."picture");?></span></li>
			<li class="statop"><span class="atsn">产品模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."product");?></span></li>
			<li class="statop"><span class="atsn">订单模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."order");?></span></li>
			<li class="statopc"><span class="atsn">解决方案</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."solutions");?></span></li>
			<li class="staleft"><span class="atsn">招聘模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."jobs");?></span></li>
			<li><span class="atsn">投票系统</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."poll_category");?></span></li>
			<li><span class="atsn">友情链接</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."linkers");?></span></li>
			<li><span class="atsn">视频模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."video");?></span></li>
			<li><span class="atsn">留言模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."guestbook");?></span></li>
			<li class="staright"><span class="atsn">下载模块</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."download");?></span></li>
			<li class="stacbot"><span class="atsn">列表调用</span><span class="numb"><?php global $db;echo $db->get_var("select count(*) from ".TB_PREFIX."calllist");?></span></li>
			<li class="stabot"><span class="atsn"></span><span class="numb"></span></li>
			<li class="stabot"><span class="atsn"></span><span class="numb"></span></li>
			<li class="stabot"><span class="atsn"></span><span class="numb"></span></li>
			<li class="stabot"><span class="atsn"></span><span class="numb"></span></li>
			<li class="stabotc"><span class="atsn"></span><span class="numb"></span></li>
		</ul>
	</div>
</div>