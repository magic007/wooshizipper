<?php article_pagination()?>
<?php
function article_pagination()
{
	global $db,$params,$request;
	if(URLREWRITE)
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."article where channelId=$params[id]",'id asc',$db,1,true,'/');
	else{
		$result = $db->get_col("select id from ".TB_PREFIX."menu where parentId =". $params[id]." order by ordering limit 1");
		if(!empty($result[0])){
		    $params[id] = $result[0];
		}
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."article where channelId=$params[id]",'id asc',$db,1,true,'./');
	}
	$pagination=$sb->results;
	if($pagination)
	{
		foreach($pagination as $key =>$value)
		{
			if($sb->totalPageNo()==1) 
			{
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