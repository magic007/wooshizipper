<table cellpadding="5" cellspacing="4" border="0" style="padding-top:20px; padding-left:40px;">
<tr>
<td colspan="4"><span style="font-size:28px; color:#925402; font-weight:bold;"><?php data('poll.title') ?></span></td>
</tr>
<?php 
global $db,$request;
$sb_children = new sqlbuilder('mdt',"select * from ".TB_PREFIX."poll where categoryId=".$request['r'],'ordering desc',$db,8);
$sql='select sum(num) as nums from '.TB_PREFIX.'poll where categoryId='.$request['r'];
$poll = $db->get_row($sql);
$nums=$poll->nums;
if($sb_children->results)
{
	foreach($sb_children->results as $rst_children)
	{
	?>
	<tr>
	<td height="30" width="100"><?php echo $rst_children['choice'] ?></td>
	<td width="300"><img src="/inc/img/poll/dot1.gif" width="<?php echo number_format((($rst_children['num']/$nums)*100),2);?>%" height="15"></td>
	<td width="80"><B><?php echo number_format((($rst_children['num']/$nums)*100),2);?>%</B></td>
	<td width="80"><?php echo $rst_children['num'];?>人</td>
	</tr>
	<?php 
	}
}
?>
<tr>
<td colspan="4">投票总数（Total）：<B><?php echo $nums; ?></B></td>
</tr>
</table>