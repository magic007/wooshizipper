<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<table width="100%" cellpadding="0" cellspacing="0">
<?php solutions_list()?>	    
</table>
<?php
function solutions_list()
{
	global $db,$params,$request,$pfileName;
	if(URLREWRITE)	
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."solutions` order by case ordering when 0 then id else ordering end desc) as `solutions` where channelId=$params[id]",'ordering desc',$db,solutionsCount,true,'/');
	else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."solutions` order by case ordering when 0 then id else ordering end desc) as `solutions` where channelId=$params[id]",'ordering desc',$db,solutionsCount,true,'./');
	if($sb->results)
	{
		foreach($sb->results as $key =>$value)
		{
			if(URLREWRITE)
			{
				?>
				<tr>
				<td valign="top">			
				<table class="contentpaneopen">
					<tr>
					<td class="contentheading" width="100%"><a href="/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html"><?php echo $value['title'] ?></a>
					</td>
					</tr>
				</table>
				<table class="contentpaneopen">
					<tr>
					<td valign="top">
						<span><?php echo $value['application'] ?></span>
					</td>
					</tr>
					<tr>
					<td valign="bottom" colspan="2"><P align=left style="text-indent:20px;"><STRONG>搜索关于：<?php echo get_searchwords($value['keyword'])?></STRONG></P>
					<P align=left style="text-indent:20px;">副标题：<?php echo $value['subheading'] ?><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目类型：<?php echo $value['types'] ?><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关键词：<?php echo $value['keyword'] ?><br /><br /></P>			
					</td>
					</tr>
					<tr>
					<td align="right" colspan="2"><a href="/html/<?php echo $pfileName ?>/view_<?php echo $value['id'] ?>.html">阅读全文...	</a></td>
					</tr>
				</table>
				<br />
				</td>
				</tr>		
				<?php
			}
			else
			{
				?>
				<tr>
				<td valign="top">			
				<table class="contentpaneopen">
					<tr>
					<td class="contentheading" width="100%"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
					</td>
					</tr>
				</table>
				<table class="contentpaneopen">
					<tr>
					<td valign="top">
						<span><?php echo $value['application'] ?></span>
					</td>
					</tr>
					<tr>
					<td valign="bottom" colspan="2"><P align=left style="text-indent:20px;"><STRONG>搜索关于：<?php echo get_searchwords($value['keyword'])?></STRONG></P>
					<P align=left style="text-indent:20px;">副标题：<?php echo $value['subheading'] ?><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目类型：<?php echo $value['types'] ?><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关键词：<?php echo $value['keyword'] ?><br /><br /></P>			
					</td>
					</tr>
					<tr>
					<td align="right" colspan="2"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>">阅读全文...	</a></td>
					</tr>
				</table>
				<br />
				</td>
				</tr>		
				<?php
			}
		}
	echo '<tr><td align="right">'.$sb->get_pager_show().'</td></tr>';
	}
	else
	{
		echo '暂无文章。';
	}
}
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
