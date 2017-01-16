<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<h2><?php data('page.title')?></h2>
<div id="stuffbox">
<div class="linkers">				
	<div class="textlinkers"><?php text_linkers() ?></div>
	<div class="imageslinkers"><?php images_linkers() ?></div>	
</div>
</div>
<?php
function text_linkers()
{
	global $db,$params,$request;
	
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."linkers` order by case ordering when 0 then id else ordering end desc) as `linkers` where channelId=$params[id] and links=1",'ordering desc',$db,100);
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
		?>
		<a href='<?php echo $rst['linkAddress']?>' target='_blank'><?php echo $rst['linkerName']?></a>
		<?php

		}
	}
	$sql="select count(*) from `".TB_PREFIX."linkers` where channelId=$params[id]";
	if($db->get_var($sql)==0)
	echo'暂无友情链接';
}
function images_linkers()
{
	global $db,$params,$request;
	
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."linkers` order by case ordering when 0 then id else ordering end desc) as `linkers` where channelId=$params[id] and links=0",'ordering desc',$db,100);
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
		?>
		<a href='<?php echo $rst['linkAddress']?>' target='_blank'><img src='<?php echo get_root_path()."$rst[smallPic]"?>' width='88' height='31' border='0' alt='<?php echo $rst['linkerName']?>'></a>
		<?php

		}
	}
}
?>