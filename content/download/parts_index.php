<style type="text/css">
<!--
.downquerytitle{border:1px #eeeeee solid;background:#f0f0f0}
.list{BACKGROUND-COLOR: expression((this.sectionRowIndex%2==0)?'#f5f5f5':'#ffffff');font-size:14px;}
.downquerytime{color:#555555;font-size:12px}
.downquery{color:#777777;line-height:150%;font-size:12px;text-decoration:}
.downquery:hover{color:#ff6611;}
#articeBottom{ width:100%; text-align:right; margin:6px 0 15px 0; padding-top:5px;}
-->
</style>
<div id="stuffbox">
	<?php download_list() ?>
<div class="clear"></div>
<div id="articeBottom"><?php global $sb; echo $sb->get_pager_show()?></div>
</div>
<?php
function download_list()
{
	global $db,$params,$sb;
	$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."download where channelId=$params[id]",'id desc',$db,12);
	if($sb->results)
	{
	?>
	<table width="100%" cellspacing="0"  cellpadding="3" style="margin-top:10px;">
	  <tr height=25 class="downquerytitle"> 
		<td>文件名称</td>
		<td>文件大小</td>
		<td>文件类别</td>
	 </tr>
	<?php
		foreach($sb->results as $rst)
		{
		?>
		<tr class="list">
	<td class="downquery"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><?php echo $rst['softwareName']."\t" ?></a></td>
	<td class="downquerytime"><?php echo $rst['softwareSize']."\t" ?></td>
	<td class="downquerytime"><?php echo $rst['classification'] ?></td>
</tr>
		<?php
		}
	  echo "</table>";
	}
	else
	{
		echo '暂无软件下载。';
	}
}
?>