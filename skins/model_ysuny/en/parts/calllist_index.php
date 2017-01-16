<style type="text/css">
<!--
#pagelist { padding:0; width:95%; font-size:12px; list-style-type:none; margin-left:20px; margin-bottom:10px;}
#pagelist li {width:95%; height:30px;}
#pagelist li a .lbt {display:block; width:82%; float:left; text-indent:20px; text-decoration:none; white-space:nowrap; text-overflow:ellipsis; overflow: hidden; display:inline;}
#pagelist li a .ldt { font:12px Arial;display:block; width:75px; float:right; text-align:center; color:#069; text-decoration:none; display:inline; margin-top:7px;}
#pagelist li a {width:95%; height:30px; display:block; line-height:30px; color:#666; text-decoration:none; cursor:hand; background:url(<?php echo get_skin_root() ?>images/tick.gif) 5px 6px no-repeat; border-bottom:1px #ccc dashed;}
#pagelist li a:hover{ color:#96f; text-decoration:none; background:url(<?php echo get_skin_root() ?>images/tick2.gif) 5px 6px no-repeat;border-bottom:1px #96f dashed;}
#pagelist li a:hover .ldt {color:#03c;}
#pagelist h1{ font: bold 18px Arial;padding-bottom: 4px;border-bottom: 1px solid #999;margin-top:10px;background:url(<?php echo get_skin_root() ?>images/more.gif) 90% 40%  no-repeat; text-decoration: none;color: #369;} 
#pagelist a:hover  h1{ font: bold 18px Arial;padding-bottom: 4px; margin-top:10px; text-decoration: none;background:url(<?php echo get_skin_root() ?>images/more1.gif) 90% 40% no-repeat;}
.clear{ clear:both;}
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
					echo '<ul id="pagelist">';
					
					if(URLREWRITE)
					echo "<a href='/html/".get_menuName($calllists[$x])."/'>";
					else
					echo "<a href='./?p=$calllists[$x]'>";
					
					echo '<h1>';
						echo get_channel_name($calllists[$x]);
					echo '</h1></a>';
					if($sb->results)
					{
						foreach($sb->results as $key =>$value)
						{
							if(URLREWRITE)
							{
								$pfileName = get_menuName($value['channelId']);
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

	