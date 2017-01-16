<link href="<?php echo get_skin_root() ?>css/parts.css" rel="stylesheet" />
<style type="text/css">
<!--
.polls form{ padding-bottom:20px; border-bottom:#666666 dashed 1px;}
br{margin-bottom:10px;}
-->
</style>

<table border="0" cellpadding="0" cellspacing="0" class="polls">
<tr>
<td valign="top" style=" padding-top:20px; padding-left:50px;">
<?php poll_list() ?>
</td></tr></table>
<div id="articeBottom">
<?php global $sb; if($sb->results)
echo $sb->get_pager_show()?></div>
<?php
function poll_list()
{
	global $db,$params,$request,$pfileName,$sb;
	$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."poll_category where channelId=$params[id]",'ordering desc',$db,productCount);
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			if($rst['choice']=='a')
			{
				?>
					<form method="POST" action="/?p=<?php echo $params['id'] ?>&a=index&r=<?php echo $rst['id'] ?>&vtype=a">
					<span style=" font-weight:bold;"><?php echo $rst['title'] ?></span> （<?php echo date('Y年m月d日',strtotime($rst['dtTime'])) ?>开始投票）
				<?php	
					$sb_children = new sqlbuilder('mdt',"select * from ".TB_PREFIX."poll where categoryId=$rst[id]",'ordering desc',$db,8);
					if($sb_children->results)
					{
						foreach($sb_children->results as $rst_children)
						{
							?>
							<br/><input type="radio" name="choice" value="<?php echo $rst_children['id'] ?>" <?php echo $rst_children['isdefault']=='a'?checked:'';?>><?php echo $rst_children['choice'] ?>
							<?php 
						}
						?>
						<?php if(URLREWRITE) 
						$url="/html/".$pfileName."/view_".$rst['id'].".html";
						else
						 $url="/?p=".$rst_children['channelId']."&a=view&r=".$rst['id'];
						 ?>
					<br/><center><input type="submit" value="投票">&nbsp;&nbsp;&nbsp;<input type="button" value="查看" onclick="window.location.href='<?php echo $url; ?>'"></center>
					</form>
					<?php
					}
				}
				else if($rst['choice']=='b')
				{
				?>
					<form method="POST" action="/?p=<?php echo $params['id'] ?>&a=index&r=<?php echo $rst['id'] ?>&vtype=b">
					<span style=" font-weight:bold;"><?php echo $rst['title'] ?></span> （<?php echo date('Y年m月d日',strtotime($rst['dtTime'])) ?>开始投票）
				<?php	
					$sb_children = new sqlbuilder('mdt',"select * from ".TB_PREFIX."poll where categoryId=$rst[id]",'ordering desc',$db,8);
					if($sb_children->results)
					{
						foreach($sb_children->results as $rst_children)
						{
							?>
							<br/><input type="checkbox" name="choice[]" value="<?php echo $rst_children['id'] ?>" <?php echo $rst_children['isdefault']==a?checked:'';?>><?php echo $rst_children['choice'] ?>
							<?php 
						}
						?>
						<?php if(URLREWRITE) 
						$url="/html/".$pfileName."/view_".$rst['id'].".html";
						else
						 $url="/?p=".$rst_children['channelId']."&a=view&r=".$rst['id'];
						 ?>
					<br/><center><input type="submit" value="投票">&nbsp;&nbsp;&nbsp;<input type="button" value="查看" onclick="window.location.href='<?php echo $url; ?>'"></center>
					</form>
				<?php
					}
				}
		}
	}
	else
	{
		echo '暂无投票列表。';
	}
}
?>