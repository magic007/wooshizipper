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
			<a href="/index.php?p=23"">销售网络</a>
		</div>
		<div class="copyright fr">版权所有：广州市乌石拉链有限公司&nbsp;粤ICP备10230565</div>
	</div>
</div>
<?php } ?>
<!--页脚 结束 -->
</body>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/jquery.jscroll.js"></script>
<script type="text/javascript" src="<?php echo get_skin_root()?>js/scrollbar.js"></script>
<script>
$(function(){
	$(".close").click(function(){
		$(".popup").slideToggle();
	});

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
            alert("加入收藏失败，请使用Ctrl+D进行添加"); 
        } 
    } 

}
</script>
</html>