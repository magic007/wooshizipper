<style type="text/css">
/*Add on 2007-07-05*/
.webSearch1 a{font-size: 12px; color: #0000FF; text-decoration: underline;}
.webSearch2 a{font-size: 12px; color: #009900; text-decoration: underline;}
.webContent {font-size: 12px; text-decoration: none;}
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<div id="stuffbox">
<?php
	if(!checkSqlStr($request['keyword']))
	$request['keyword'] = $request['keyword'];
	else
	echo '非法字符';
	global $results,$request;
	if(!empty($results))
	{
		if(empty($request['i']))$request['i']=1;else $request['i'] = $request['i'];
		$temResult = array_slice($results,(intval($request['i'])-1)*10,10);
		foreach($temResult as $o)
		{
			?>
			<table border="0" cellpadding="0" cellspacing="0">
			<tr>
			<?php
			if($o['type'] == 'jobs' || $o['type'] == 'article' || $o['type'] == 'tour')
			{
				if(URLREWRITE)
				{
					if(empty($o['title']))
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/' ?>"><?php echo get_keyword_str($o['content'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
					else
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/' ?>"><?php echo get_keyword_str($o['title'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
				}
				else
				{
					if(empty($o['title']))
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'] ?>"><?php echo get_keyword_str($o['content'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
					else
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'] ?>"><?php echo get_keyword_str($o['title'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
				}
			}
			else
			{
				if(URLREWRITE)
				{
					if(empty($o['title']))
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/view_'.$o['id'] ?>.html"><?php echo get_keyword_str($o['content'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
					else
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/view_'.$o['id'] ?>.html"><?php echo get_keyword_str($o['title'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
				}
				else
				{
					if(empty($o['title']))
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'].'&a=view&r='.$o['id'] ?>"><?php echo get_keyword_str($o['content'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
					else
					{
						?>
						<td><span class="webSearch1"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'].'&a=view&r='.$o['id'] ?>"><?php echo get_keyword_str($o['title'],urldecode($request['keyword']),30) ?></a></span></td>
						<?php
					}
				}
			}
			?>
			</tr>
			<tr>
			<?php
			if(empty($o['content']))
			{
				?>
				<td class="webContent"><?php echo get_keyword_str($o['title'],urldecode($request['keyword']),100) ?></td>
				<?php
			}
			else
			{
				?>
				<td class="webContent"><?php echo get_keyword_str($o['content'],urldecode($request['keyword']),100) ?></td>
				<?php
			}
			?>
			</tr>
			<tr>
			<?php 
			if(URLREWRITE)
			{
				if($o['type']=='jobs' || $o['type'] == 'article' || $o['type'] == 'tour')
				{
					?>
					<td><?php echo $o['dtTime'] ?>&nbsp;&nbsp;<span class="webSearch2"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/' ?>">快速链接</a></span></td>
					<?php 
				}
				else
				{
					?>
					<td><?php echo $o['dtTime'] ?>&nbsp;&nbsp;<span class="webSearch2"><a target="_blank" href="<?php echo '/html/'.get_menuName($o['p']).'/view_'.$o['id'] ?>.html">快速链接</a></span></td>
					<?php 
				}
			}
			else
			{
				if($o['type']=='jobs' || $o['type'] == 'article' || $o['type'] == 'tour')
				{
					?>
					<td><?php echo $o['dtTime'] ?>&nbsp;&nbsp;<span class="webSearch2"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'] ?>">快速链接</a></span></td>
					<?php 
				}
				else
				{
					?>
					<td><?php echo $o['dtTime'] ?>&nbsp;&nbsp;<span class="webSearch2"><a target="_blank" href="<?php echo get_root_path().'?p='.$o['p'].'&a=view&r='.$o['id'] ?>">快速链接</a></span></td>
					<?php 
				}
			}
			?>
			</tr>			
			</table>
			<br />
			<?php
		}
		echo getPager($params['i'],10);
	}
	else
	{
		echo '对不起！没有找到相关内容！';
	}
	function getPager($i=1,$itemCounts)
	{
		global $results,$request;
		if(intval($i)==0)
		$i = 1;
		$count = count($results);
		$intCount = intval($count/$itemCounts);
		$resCount = intval($count%$itemCounts);
		if($resCount!=0)
		$intCount = $intCount + 1;
		if(URLREWRITE)
		{
			if($intCount <= 1)
			{
				return '<table><tr><td valgin="bottom">'.$i.'/'.$intCount.'页  共'.$count.'条  <a href="/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i=1"><span style="font-size: 12px; color: #F30;">首页</span></a>  <a href="/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$intCount.'"><span style="font-size: 12px; color: #F30;">尾页</span></a>  跳转至'.redPager($intCount,$_REQUEST['i']).'页</td></tr></table>';
			}
			else
			{
				return '<table><tr><td valgin="bottom">'.$i.'/'.$intCount.'页  共'.$count.'条  <a href="/?m=search&keyword='.urlencode(urlencode($_REQUEST['keyword'])).'&i=1"><span style="font-size: 12px; color: #F30;">首页</span></a>  <a href="'.get_url_previous($i,$intCount).'"><span style="font-size: 12px; color: #F30;">前一页</span></a>  <a href="'.get_url_next($i,$intCount).'"><span style="font-size: 12px; color: #F30;">后一页</span></a>  <a href="/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$intCount.'"><span style="font-size: 12px; color: #F30;">尾页</span></a>  跳转至'.redPager($intCount,$_REQUEST['i']).'页</td></tr></table>';
			}
		}
		else
		{
			if($intCount <= 1)
			{
				return '<table><tr><td valgin="bottom">'.$i.'/'.$intCount.'页  共'.$count.'条  <a href="'.get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i=1"><span style="font-size: 12px; color: #F30;">首页</span></a>  <a href="'.get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$intCount.'"><span style="font-size: 12px; color: #F30;">尾页</span></a>  跳转至'.redPager($intCount,$_REQUEST['i']).'页</td></tr></table>';
			}
			else
			{
				return '<table><tr><td valgin="bottom">'.$i.'/'.$intCount.'页  共'.$count.'条  <a href="'.get_root_path().'?m=search&keyword='.urlencode(urlencode($_REQUEST['keyword'])).'&i=1"><span style="font-size: 12px; color: #F30;">首页</span></a>  <a href="'.get_url_previous($i,$intCount).'"><span style="font-size: 12px; color: #F30;">前一页</span></a>  <a href="'.get_url_next($i,$intCount).'"><span style="font-size: 12px; color: #F30;">后一页</span></a>  <a href="'.get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$intCount.'"><span style="font-size: 12px; color: #F30;">尾页</span></a>  跳转至'.redPager($intCount,$_REQUEST['i']).'页</td></tr></table>';
			}
		}
	}
	function redPager($pagerCounts,$i)
	{
		$temStr = '<select onChange="window.location=this.value">';
		for($j=1;$j<=$pagerCounts;$j++)
		{
			if(URLREWRITE)
			{
				if($j == intval($i))
				$temStr .= '<option selected="true" value="http://'.$_SERVER['SERVER_NAME'].'/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$j.'">'.$j.'</option>';
				else
				$temStr .= '<option value="http://'.$_SERVER['SERVER_NAME'].'/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$j.'">'.$j.'</option>';
			}
			else
			{
				if($j == intval($i))
				$temStr .= '<option selected="true" value="'.get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$j.'">'.$j.'</option>';
				else
				$temStr .= '<option value="'.get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.$j.'">'.$j.'</option>';
			}
		}
		$temStr .= '</select>';
		return $temStr;
	}
	function get_url_next($i,$maxi)
	{
		if(URLREWRITE)
		{
			if(intval($i) < intval($maxi))
			return '/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($i)+1);
			else
			return '/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($maxi));
		}
		else
		{
			if(intval($i) < intval($maxi))
			return get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($i)+1);
			else
			return get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($maxi));
		}
	}
	function get_url_previous($i,$maxi)
	{
		if(URLREWRITE)
		{
			if(intval($i) <= intval($maxi) && intval($i) > 1 )
			return '/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($i)-1);
			else
			return '/?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i=1';
		}
		else
		{
			if(intval($i) <= intval($maxi) && intval($i) > 1 )
			return get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i='.strval(intval($i)-1);
			else
			return get_root_path().'?m=search&keyword='.urlencode($_REQUEST['keyword']).'&i=1';
		}
	}
?>
</div>
