<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="深喉咙免费开源企业网站生成系统(Deepthroat CMS) 深喉咙企业建站系统 免费自动生成企业网站，方便的网站内容管理系统，便捷的网站管理，便捷的企业网站管理 网站生成，网站建设，网站建设方案，企业网站模板，免费生成企业网站，企业网站生成系统，深喉咙CMS，深喉咙企业网站生成系统，企业网站管理，Deepthroat服务，深喉咙建站，深喉" />
<meta name="keywords" content="深喉咙免费开源企业网站生成系统(Deepthroat CMS) 深喉咙企业建站系统 免费生成企业网站 深喉咙CMS XMLOL团队倾城提供 企业网站 网站系统 企业网站系统 企业网站生成系统 深喉咙企业网站生成系统 企业网站模板 深喉咙模板" />
<title><?php echo $moduleTitle ?></title>
<style>
<!--
body{ font-size:12px;}
.alrelbtn{ border:0; width:80px; height:19px; background:url(inc/img/comment/alrele.png) no-repeat; cursor:pointer;}
.alrelbtnover{ border:0; width:80px; height:19px; background:url(inc/img/comment/alrele2.png) no-repeat; cursor:pointer;}
.info{ width:98%; padding:3px 0 0 0;}
.info span{ float:left; display:block;}
.info .wen{ padding:5px 0 0 8px;}
.info .rele{ float:right;}
.relbtn{ border:0; width:68px; height:19px; background:url(inc/img/comment/rele.png) no-repeat; cursor:pointer;}
.relbtnover{ border:0; width:68px; height:19px; background:url(inc/img/comment/rele2.png) no-repeat; cursor:pointer;}
.cont{ width:99%; background:url(inc/img/comment/gray-logo.gif) no-repeat center center;}
#cont{ width:100%; color:#00FF00;}
.titles{ font-size:16px; font-weight:bold;}
/*-----头部-----*/
#alrtop{ width:812px; margin:0 auto; border:1px solid #ccc; border-bottom:none; height:80px; padding:0 0 0 15px; background:#F8FCFF;}
#alrtop div{ width:780px; height:62px; border-bottom:1px dashed #ccc; padding:8px 0 0 0;}
/*-----底部-----*/
#alrbot{ width:812px; margin:0 auto; border:1px solid #ccc; border-top:none; height:100px; font-family:Arial; background:#F8FCFF;}
#alrbot a{ color:#2487CA; text-decoration:none;}
#alrbot a:hover{ text-decoration:underline;}
#alrbot p{ background:#f4f4f4; padding:0; margin:0; width:100%; height:45px;}
#alrbot p img{ margin:3px 0 0 10px;}
#alrbot .alrt{ margin-top:10px; padding:25px 0 0 0; height:20px;}
-->
</style>
</head>

<body>
<?php 
$sourceUrl = null;
if(intval($request['r'])>0)
{
	$sourceUrl = get_root_path().'?p='.$request['p'].'&a=view&r='.$request['r'];
}
else
{
	$sourceUrl = get_root_path().'?p='.$request['p'];
}
?>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="alrtop">
<tr>
<td>
<div><a href="http://www.deepthroat.com.cn/"><img src="<?php get_root_path()?>inc/img/comment/logo.png" border="0" /></a></div>
</td>
</tr>
</table>
<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:12px; border-left:1px solid #ccc; border-right:1px solid #ccc; padding:0 5px">
<tr>
<td>
<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="<?php get_root_path()?>inc/img/comment/comment.gif" /></td>
    <td align="left" class="titles">话题：<?php echo $moduleTitle ?></td>
	<td align="right"><a target="_blank" href="<?php echo $sourceUrl ?>">查看原文</a></td>
  </tr>
</table>
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
		<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#F8FCFF;">
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
  			<tr>
    		<td colspan="3" style="padding:6px">&nbsp;&nbsp;<?php echo $rst['content'] ?></td>
  			</tr>
  			<tr height="24" style="padding:5px 8px 3px 8px; background:url(inc/img/comment/trbg.png) repeat-x top">
  			<?php 
			if(!empty($_SESSION[TB_PREFIX.'user']) || $_SESSION[TB_PREFIX.'admin_roleId']>=8)
			{
				if(!empty($request['comment_mdtp']) && !empty($request['mdtp']))
				$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
				if(!empty($request['comment_mdtp']))
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
<table width="800px" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#F8FCFF;">
<?php 
global $request;
if($request['r']==0)
{
?>
<form action="/?p=<?php data('page.id')?>&a=submit_comment&r=0" method="post">
<?php 
}
else 
{
?>
<form action="/?p=<?php data('page.id')?>&a=submit_comment&r=<?php echo $request['r']?>" method="post">
<?php 
}
?>  
  <tr>
    <td colspan="8" height="2px"></td>
  </tr>
  <tr>
    <td colspan="8"><textarea name="content" style="border:1px #ccc solid;" class="cont" cols="80%" rows="8"></textarea></td>
  </tr>
  <tr>
    <td colspan="8" height="2px"></td>
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
</td>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="alrbot"><tr><td>
	<p align="center" class="alrt">© 2008 by Deepthroat, Aiwise International Group Co.,Ltd, China BRAND .Inc</p>
	<p align="center">豫ICP备<a href="http://www.miibeian.gov.cn/">05008716</a>号<a href="http://www.deepthroat.com.cn/"><img src="http://www.deepthroat.com.cn/dtlink/Deepthroat_Mini_button_blue.gif" width="80" height="15" alt="技术支持：爱慧国际集团华北分公司（深喉咙项目开发组）" style="border:0;" /></a>
</p>
</td></tr></table>
</body>
</html>