<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>

	<?php calllist_list() ?>

<div class="clear"></div>


<?php
function calllist_list()
{
	global $db,$params,$sb,$db,$bw,$request;
	$calllist = (array)$db->get_row("select * from ".TB_PREFIX."calllist where channelId=$params[id]");
	if($calllist[callId]!="")
	{
	
		$calllists=explode(',',$calllist[callId]);
		for($x=0;$x<count($calllists);$x++)
		{
			
			$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."list where channelId=$calllists[$x]",'id desc',$db,calllistCount);
			if($sb->results)
			{
					if(URLREWRITE)
					{
						echo '<ul id="pagelist">';
						echo "<a href='<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/";
						echo '<h1>';
							echo get_channel_name($calllists[$x]);
						echo '</h1></a>';
					}
					else
					{
						echo '<ul id="pagelist">';
						echo "<a href='./?p=$calllists[$x]'>";
						echo '<h1>';
							echo get_channel_name($calllists[$x]);
						echo '</h1></a>';

					}
					if($sb->results)
					{
						foreach($sb->results as $key =>$value)
						{
							if(URLREWRITE)
							{
								$pfileName = get_menuName($value['channelId'])
								?>
								<li><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html"><span class ="lbt"><?php echo $value['title'] ?></span><span class= "ldt"><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span></a></li>
								<?php
						   }
						   else
						   {
								?>
								<li><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>"><span class ="lbt"><?php echo $value['title'] ?></span><span class= "ldt"><?php echo date('Y-m-d',strtotime($value['dtTime'])) ?></span></a></li>
								<?php
						   }
						}
						echo '</ul>';
					}
				}	
		}	
	}
	else
		echo '暂无新闻列表';
}
?>	

	