<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<div id="articleHeader">
	<span>Date: <?php data('list.dtTime')?></span>Written By <strong><?php data('list.author')?></strong>
</div>
<h2><?php data('list.title')?></h2>
<h3><?php data('list.summary')?></h3>
<div id="stuffbox">
    <ul id="correlationStuff">
	   <li id="myStuff">Tags: <span><?php data('list.tags')?> , 积分</span>  Counts:<?php data('list.counts')?> 次</li>
	   <div class="clear"></div>
	</ul>
	<?php data('list.content')?>
</div>
<div id="articeBottom"><a href="#">(Top) 返回页面顶端</a></div>
<div style="border:1px dashed #999999"></div>
<div id="articleHeader">
<?php 
global $request,$pfileName;
if(URLREWRITE)
{
	if(isExistLastArticle() && isExistNextArticle())
	{
		?>
		<span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo intval($request['r'])+1 ?>.html">下一篇</a> --> <strong><?php echo getNextArticleTitle()?>&nbsp;</strong></span><strong>&nbsp;<?php echo getLastArticleTitle()?></strong> <-- <a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo intval($request['r'])-1 ?>.html">上一篇</a>
		<?php 
	}
	elseif(isExistLastArticle() && !isExistNextArticle())
	{
		?>
		<strong>&nbsp;<?php echo getLastArticleTitle()?></strong> <-- <a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo intval($request['r'])-1 ?>.html">上一篇</a>
		<?php 
	}
	elseif(!isExistLastArticle() && isExistNextArticle())
	{
		?>
		<span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo intval($request['r'])+1 ?>.html">下一篇</a> --> <strong><?php echo getNextArticleTitle()?>&nbsp;</strong></span>
		<?php 
	}
	else
	{
		?>
		<span></span>
		<?php
	}
}
else
{
	if(isExistLastArticle() && isExistNextArticle())
	{
		?>
		<span><a href="<?php echo get_root_path()?>?a=view&p=<?php echo $request['p'] ?>&r=<?php echo intval($request['r'])+1 ?>">下一篇</a> --> <strong><?php echo getNextArticleTitle()?>&nbsp;</strong></span><strong>&nbsp;<?php echo getLastArticleTitle()?></strong> <-- <a href="<?php echo get_root_path()?>?a=view&p=<?php echo $request['p'] ?>&r=<?php echo intval($request['r'])-1 ?>">上一篇</a>
		<?php 
	}
	elseif(isExistLastArticle() && !isExistNextArticle())
	{
		?>
		<strong>&nbsp;<?php echo getLastArticleTitle()?></strong> <-- <a href="<?php echo get_root_path()?>?a=view&p=<?php echo $request['p'] ?>&r=<?php echo intval($request['r'])-1 ?>">上一篇</a>
		<?php 
	}
	elseif(!isExistLastArticle() && isExistNextArticle())
	{
		?>
		<span><a href="<?php echo get_root_path()?>?a=view&p=<?php echo $request['p'] ?>&r=<?php echo intval($request['r'])+1 ?>">下一篇</a> --> <strong><?php echo getNextArticleTitle()?>&nbsp;</strong></span>
		<?php 
	}
	else
	{
		?>
		<span></span>
		<?php
	}
}
?>
</div>
<?php 
function getLastArticleTitle()
{
	global $db,$request;
	$sql = "SELECT title FROM `".TB_PREFIX."list` WHERE channelId=".$request['p']." AND id=".(intval($request['r'])-1);
	return $db->get_var($sql);
 
}
function getNextArticleTitle()
{
	global $db,$request;
	$sql = "SELECT title FROM `".TB_PREFIX."list` WHERE channelId=".$request['p']." AND id=".(intval($request['r'])+1);
	return $db->get_var($sql);
}
function isExistLastArticle()
{
	global $db,$request;
	$sql = "SELECT count(*) FROM `".TB_PREFIX."list` WHERE channelId=".$request['p']." AND id=".(intval($request['r'])-1);
	if(intval($db->get_var($sql))==1)
	return true;
	else
	return false;
}
function isExistNextArticle()
{
	global $db,$request;
	$sql = "SELECT count(*) FROM `".TB_PREFIX."list` WHERE channelId=".$request['p']." AND id=".(intval($request['r'])+1);
	if(intval($db->get_var($sql))==1)
	return true;
	else
	return false;
}
?>