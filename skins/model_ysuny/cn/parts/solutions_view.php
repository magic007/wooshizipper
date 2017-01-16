<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<table class="contentpaneopen">
	<tr>
	<td class="contentheading" width="100%">
	<?php data('solutions.title')?></td>
	</tr>
</table>
<table class="contentpaneopen">
	<tr>
	<td valign="top" colspan="2" class="createdate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php data('solutions.dtTime')?></td>
	</tr>
	<tr>
	<td valign="top" colspan="2">
	<P align=left style="text-indent:20px;"><STRONG>搜索关于：<?php global $keywords; echo get_searchwords($keywords);?></STRONG></P>
	<P align=left style="text-indent:20px;">副标题：
	<?php data('solutions.subheading')?><BR />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关键词：<?php data('solutions.keyword')?><BR /><BR /></P><blockquote><div align="left" style="text-indent:20px; line-height:2em;"><?php data('solutions.content')?></div></blockquote></td>
	</tr>
</table>
<?php 
function get_searchwords($keyword)
{
	$result = null;
	if(!empty($keyword))
	{
		$tempKeywords = explode('、',$keyword);	
		foreach($tempKeywords as $key=>$value)
		{
			if(URLREWRITE)
			$result .= '<a target="_blank" href="/?m=search&keyword='.urlencode($value).'">'.$value.'</a>、';
			else
			$result .= '<a target="_blank" href="'.ROOTPATH.'/?m=search&keyword='.urlencode($value).'">'.$value.'</a>、';
		}
	}
	$result = cnSubStr($result,0,cnStrLen($result)-1);
	return $result;
}
?>