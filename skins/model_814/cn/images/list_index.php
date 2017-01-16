<style type="text/css">
<!--
#newsList{ width:98%;margin:15px 0; padding:0; list-style:none;}
#newsList li{ line-height:32px; background:#FAFBF8 url(<?php echo get_skin_root() ?>images/newslist_arrow.gif) no-repeat 5px center; padding-left:20px; float:left; width:98%; clear:both;}
#newsList .content{ background:none; text-indent: 24px; line-height:20px;}
#newsList li span{ float:right;}
-->
</style>
<div id="stuffbox">
	<ul id="newsList">
		<?php news_list() ?>
	</ul>
	<div class="clear"></div>
</div>


<?php
function news_list()
{
	global $db,$params,$request,$pfileName;
	if(URLREWRITE)
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."list` order by case ordering when 0 then id else ordering end desc) as `temptable`,`".TB_PREFIX."list_content` as b where temptable.channelId=$params[id] and temptable.guid=b.guid",'ordering desc',$db,listCount,true,'/');
	else
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."list` order by case ordering when 0 then id else ordering end desc) as `temptable`,`".TB_PREFIX."list_content` as b where temptable.channelId=$params[id] and temptable.guid=b.guid",'ordering desc',$db,listCount,true,'./');
	if($sb->results)
	{
		foreach($sb->results as $key =>$value)
		{
			if(URLREWRITE)
			{
					?>
					<li><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html"><?php echo $value['title'] ?></a></li>
					<li class="content"><?php echo cnSubstr(strip_tags($value['content']),0,110).'...' ?><span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html">详细>></a></span></li>
					<?php 
			}
			else
			{
				
					?>
					<li><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></li>
					<li class="content"><?php echo cnSubstr(strip_tags($value['content']),0,110).'...' ?><span><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>">详细>></a></span></li>
					<?php 
			}
		}
		echo '</ul><div id="articeBottom">'.$sb->get_pager_show().'</div>';
	}
	else
	{
		echo '暂无文章。';
	}
}
?>
		