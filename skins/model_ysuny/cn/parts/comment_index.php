<style>
<!--
.alrelbtn{ border:0; width:80px; height:19px; background:url(inc/img/comment/alrele.png) no-repeat; cursor:pointer;}
.alrelbtnover{ border:0; width:80px; height:19px; background:url(inc/img/comment/alrele2.png) no-repeat; cursor:pointer;}
.info{ width:98%; padding:3px 0 0 0;}
.info span{ float:left; display:block;}
.info .wen{ padding:5px 0 0 8px;}
.info .rele{ float:right;}
.relbtn{ border:0; width:68px; height:19px; background:url(inc/img/comment/rele.png) no-repeat; cursor:pointer;}
.relbtnover{ border:0; width:68px; height:19px; background:url(inc/img/comment/rele2.png) no-repeat; cursor:pointer;}
.cont{ width:99%; background:url(inc/img/comment/gray-logo.gif) no-repeat center center;}
-->
</style>
<a name="commentPosition" id="commentPosition"></a>
<?php 
global $request;
if(intval($request['r'])>0)
$comment_url = get_root_path().'?p='.$request['p'].'&a=view_comment'.'&r='.$request['r'];
else
$comment_url = get_root_path().'?p='.$request['p'].'&a=view_comment';
?>
<table width="97%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="padding:0 0 0 4px"><img src="<?php get_root_path()?>inc/img/comment/comment.gif" /></td>
    <td align="right" style="padding:0 15px 0 0"><input name="button" class="alrelbtn" onmouseover="this.className='alrelbtnover'" onmouseout="this.className='alrelbtn'" type="button" onclick="window.open('<?php echo $comment_url?>','_blank');" value="" /></td>
  </tr>
</table>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
<?php 
global $request;
if(intval($request['comment_mdtp'])>0 && intval($request['mdtp'])>0)
$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
else
$tempMdt='&comment_mdtp='.$request['comment_mdtp'];

if($request['r']==0)
{
?>
<form action="/?p=<?php data('page.id')?>&a=submit_comment&r=0<?php echo $tempMdt ?>" method="post">
<?php 
}
else 
{
?>
<form action="/?p=<?php data('page.id')?>&a=submit_comment&r=<?php echo $request['r']?><?php echo $tempMdt ?>" method="post">
<?php 
}
?>  
  <tr>
    <td height="2px"></td>
  </tr>
  <tr>  
  <tr>
    <td style="padding:0 0 0 5px"><textarea name="content" style="border:1px #666 solid;" class="cont" cols="80%" rows="8"></textarea></td>
  </tr>
  <tr>
    <td height="2px"></td>
  </tr>
  <tr>
  	<td>
		<div class="info">
			<span class="wen">昵称：</span>
			<span><input style="width:60px; height:19px; border:1px #ccc solid;" name="name" type="text"></span>
			<span class="wen">email：</span>
			<span><input style="width:60px; height:19px; border:1px #ccc solid;" name="email" type="text"></span>
			<span class="wen">主页：</span>
			<span><input style="width:60px; height:19px; border:1px #ccc solid;" name="homepage" type="text"></span>
			<span class="rele"><input name="submit" class="relbtn" value="" type="submit" onmouseover="this.className='relbtnover'" onmouseout="this.className='relbtn'" /></span>
		</div>
	</td>
  </tr>
  </form>
</table>
<hr />
<?php show_comment(); ?>
<?php
function show_comment()
{
	global $db,$params,$request;
	if(COMMENTAUDITING)
	{
		if(!empty($_SESSION[TB_PREFIX.'user']) || $_SESSION[TB_PREFIX.'admin_roleId']>=8)
		{
			$comment_sb = new sqlbuilder('comment_mdt',"select * from ".TB_PREFIX."comment where channelId=".$request['p']." and recordId=".$request['r'],'id desc',$db,6,true,'./','#commentPosition');
		}
		else
		{
			$comment_sb = new sqlbuilder('comment_mdt',"select * from ".TB_PREFIX."comment where auditing=1 and channelId=".$request['p']." and recordId=".$request['r'],'id desc',$db,6,true,'./','#commentPosition');
		}
	}
	else
	{
		$comment_sb = new sqlbuilder('comment_mdt',"select * from ".TB_PREFIX."comment where channelId=".$request['p']." and recordId=".$request['r'],'id desc',$db,6,true,'./','#commentPosition');
	}
	if($comment_sb->results)
	{
		?>
		<table width="97%" border="0" cellpadding="0" cellspacing="0" style="margin:0 0 0 6px">
		<?php
		foreach($comment_sb->results as $rst)
		{
			?>			
  			<tr bgcolor="#e2e2e2" height="26">
   			<td>&nbsp;
			<?php 
			if(intval($rst['memberId'])==0)
			{
				echo '昵称:游客  '.$rst['name'];
			}
			else
			{
				global $db;
				if($rst['memberTableName']=='user')
				$sql="SELECT nickname FROM ".TB_PREFIX.$rst['memberTableName']." WHERE id=".$rst['memberId'];
				elseif($rst['memberTableName']=='shopping_customers')
				$sql="SELECT userName FROM ".TB_PREFIX.$rst['memberTableName']." WHERE id=".$rst['memberId'];
				echo '昵称:会员  '.$db->get_var($sql);
			}
			?>
			</td>
			<td>IP:<?php $ipArr=explode('.',$rst['ip']);$ipArrLen=count($ipArr); for($i=0;$i<$ipArrLen;$i++){if($i<2)echo $ipArr[$i].'.';else echo '*.';} ?></td>
    		<td align="right"><?php echo $rst['dtTime']  ?>发表&nbsp;&nbsp;</td>
  			</tr>
  			<tr bgcolor="#ffffff">
    		<td colspan="3" style="padding:6px">&nbsp;&nbsp;<?php echo $rst['content'] ?></td>
  			</tr>
  			<tr height="24" style="padding:0 8px 3px 8px; background:url(inc/img/comment/trbg.png) repeat-x top">
  			<?php 
			if(!empty($_SESSION[TB_PREFIX.'user']) || $_SESSION[TB_PREFIX.'admin_roleId']>=8)
			{
				if(intval($request['comment_mdtp'])>0 && intval($request['mdtp'])>0)
				$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
				else
				$tempMdt='&comment_mdtp='.$request['comment_mdtp'];
				
				if($rst['auditing'] == '1')
				{
					if($request['r']==0)
					{
					?>
					<td colspan="2">&nbsp;&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=destroycomment&comment=<?php echo $rst['id'].$tempMdt ?>">删除</a>&nbsp;|&nbsp;<font color="Blue">已审核</font></td><td align="right"><a href="mailto:<?php echo $rst['email']  ?>">邮件回复</a></td>
					<?php
					}
					else 
					{
					?>
					<td colspan="2">&nbsp;&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=destroycomment&r=<?php echo $request['r'] ?>&comment=<?php echo $rst['id'].$tempMdt ?>">删除</a>&nbsp;|&nbsp;<font color="Blue">已审核</font></td><td align="right"><a href="mailto:<?php echo $rst['email']  ?>">邮件回复</a></td>
					<?php
					}
				}
				else 
				{
					if($request['r']==0)
					{
					?>
					<td colspan="2">&nbsp;&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=destroycomment&comment=<?php echo $rst['id'].$tempMdt ?>">删除</a>&nbsp;|&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=auditingcomment&comment=<?php echo $rst['id'].$tempMdt ?>">审核</a></td><td align="right"><a href="mailto:<?php echo $rst['email']  ?>">邮件回复</a></td>
					<?php
					}
					else 
					{
					?>
					<td colspan="2">&nbsp;&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=destroycomment&r=<?php echo $request['r'] ?>&comment=<?php echo $rst['id'].$tempMdt ?>">删除</a>&nbsp;|&nbsp;<a href="<?php echo get_root_path() ?>?p=<?php echo $request['p'] ?>&a=auditingcomment&r=<?php echo $request['r'] ?>&comment=<?php echo $rst['id'].$tempMdt ?>">审核</a></td><td align="right"><a href="mailto:<?php echo $rst['email']  ?>">邮件回复</a></td>
					<?php	
					}
				}		 
			}
			else
			{
				?>
				<td align="right" colspan="3"><a href="mailto:<?php echo $rst['email']  ?>">邮件回复</a>&nbsp;&nbsp;</td>
				<?php
			}
  			?>
  			</tr>
			<?php
		}
		?>
		</table>
		<?php
	}
	echo '<div class="pager">'.$comment_sb->get_pager_show().'</div>';
}
?>