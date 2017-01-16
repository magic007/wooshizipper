<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<div id="articleHeader">
	<span>Date: <?php data('list.dtTime')?></span>Written By <strong><?php data('list.author')?></strong>
</div>
<h2><?php data('list.title')?></h2>
<h3><?php data('list.summary')?></h3>
<div id="stuffbox">
    <ul id="correlationStuff">
	   <li id="myStuff">Tags: <span><?php data('list.tags')?> , 积分</span>  Counts:<?php data('list.counts')?> 次</li>
	   <li id="commentLink"><span><a href="#">评论这篇文章 »</a></span></li>
	   <div class="clear"></div>
	</ul>
	<?php data('list.content')?>
</div>
<div id="articeBottom"><a href="#">(Top) 返回页面顶端</a></div>