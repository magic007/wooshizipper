<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<div id="stuffbox">
<br />
    <?php article_pagination()?>
</div>
<?php
function article_pagination()
{
	global $db,$params,$request;
	if(URLREWRITE)
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."article where channelId=$params[id]",'id asc',$db,1,true,'/');
	else
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."article where channelId=$params[id]",'id asc',$db,1,true,'./');
	$pagination=$sb->results;
	if($pagination)
	{
		foreach($pagination as $key =>$value)
		{
			if($sb->totalPageNo()==1) 
			{
				echo '<div style="text-align:center; font-size:14px;"><strong>'.$value['pageName'].'</strong></div>';
				echo $value['content'];
			}
			else
			{
				echo '<div style="text-align:center; font-size:14px;"><strong>'.$value['pageName'].'</strong></div>';
				echo $value['content'];
				echo '<div id="articeBottom">'.$sb->get_pager_show().'</div>';
			}
		}
		
	}
}
?>