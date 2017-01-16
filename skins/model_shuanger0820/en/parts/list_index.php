<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
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
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."list` order by case ordering when 0 then id else ordering end desc) as `temptable` where channelId=$params[id]",'ordering desc',$db,listCount,true,'/');
	else
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."list` order by case ordering when 0 then id else ordering end desc) as `temptable` where channelId=$params[id]",'ordering desc',$db,listCount,true,'./');
	if($sb->results)
	{
		foreach($sb->results as $key =>$value)
		{
			if(URLREWRITE)
			{
				if($key%2==0)
				{
					?>
					<li><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html"><?php echo $value['title'] ?></a></li>
					<?php 
				}
				else
				{
					?>
					<li class="whiteLi"><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html"><?php echo $value['title'] ?></a></li>
					<?php
				}
			}
			else
			{
				if($key%2==0)
				{
					?>
					<li><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></li>
					<?php 
				}
				else
				{
					?>
					<li class="whiteLi"><span><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></li>
					<?php
				}
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
		