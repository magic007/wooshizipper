<?php
function submit_comment()
{
	global $db,$params,$request;
	
	if($_POST)
	{
		if(!empty($request['content']))
		{
			require(ABSPATH.'/admini/models/comment.php');			
			$comment = new comment();
			$comment->addnew();
			//必填字段
			$comment->name=$request['name'];
			$comment->email=$request['email'];
			$comment->content=$request['content'];
			$comment->homepage=$request['homepage'];
			$comment->dtTime=date('Y-m-d H:i:s');
			$comment->channelId=$params['id'];
			$comment->ip=$_SERVER['REMOTE_ADDR'];
			$comment->recordId=$request['r'];
			
			if(intval($_SESSION[TB_PREFIX.'user_ID'])>0)
			{
				$comment->memberId=$_SESSION[TB_PREFIX.'user_ID'];
				$comment->memberTableName='user';
			}
			if(intval($_SESSION['shopping_admin_userID'])>0)
			{
				$comment->memberId=$_SESSION['shopping_admin_userID'];
				$comment->memberTableName='shopping_customers';
			}
			if(intval($_SESSION[TB_PREFIX.'admin_userID'])>0)
			{
				$comment->memberId=$_SESSION[TB_PREFIX.'admin_userID'];
				$comment->memberTableName='user';
			}
			if($comment->save())
			{
				if(COMMENTAUDITING)
				{
					echo '<script>alert("恭喜，您的评论已提交成功，为了不出现违法言论信息，我们设置了需经过审核才能显示您的评论，请等待我们的工作人员审核！");</script>';
				}
				if(intval($request['comment_mdtp'])>0 && intval($request['mdtp'])>0)
				$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
				else
				$tempMdt='&comment_mdtp='.$request['comment_mdtp'];
				
				if(intval($request['r']) == 0)
				redirect_to($request['p'],'index'.$tempMdt.'#commentPosition');
				else
				redirect_to($request['p'],'view&r='.$request['r'].$tempMdt.'#commentPosition');
			}
			else 
			{
				echo '<script>alert("对不起，系统错误，您的评论未能及时提交，请与我们的工作人员联系！");location.href="javascript:history.go(-1)";</script>';
				exit;
			}
		}
		else
		{
			echo '<script>alert("您的评论内容不能为空！");location.href="javascript:history.go(-1)";</script>';
			exit;
		}
	}
}
function auditingcomment()
{
	global $db,$request;
	
	if(intval($request['comment_mdtp'])>0 && intval($request['mdtp'])>0)
	$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
	else
	$tempMdt='&comment_mdtp='.$request['comment_mdtp'];
	
	if(!empty($_SESSION[TB_PREFIX.'user']) || $_SESSION[TB_PREFIX.'admin_roleId']>=8)
	{
		if($request['comment'] > 0)
		{
			$sql='update '.TB_PREFIX.'comment set auditing = 1 where id='.$request['comment'].' limit 1';
			if($db->query($sql))
			{
				if(intval($request['r']) == 0)
				redirect(get_root_path().'?p='.$request['p'].$tempMdt.'#commentPosition');
				else 
				redirect(get_root_path().'?p='.$request['p'].$tempMdt.'&a=view&r='.$request['r'].'#commentPosition');
			}
			else
			{
				echo '<script>alert("对不起，系统错误，审核失败！");location.href="javascript:history.go(-1)";</script>';
				exit;
			}
		}
	}
	else
	{
		echo '<script>alert("对不起，您没有对该评论审核的权限！");location.href="javascript:history.go(-1)";</script>';
		exit;
	}
}
function destroycomment()
{
	global $db,$request;
	
	if(intval($request['comment_mdtp'])>0 && intval($request['mdtp'])>0)
	$tempMdt='&mdtp='.$request['mdtp'].'&comment_mdtp='.$request['comment_mdtp'];
	else
	$tempMdt='&comment_mdtp='.$request['comment_mdtp'];
	
	
	if(!empty($_SESSION[TB_PREFIX.'user']) || $_SESSION[TB_PREFIX.'admin_roleId']>=8)
	{
		if($request['comment'] > 0)
		{
			$sql='delete from '.TB_PREFIX.'comment where id='.$request['comment'].' limit 1';
			if($db->query($sql))
			{
				if(empty($request['r']))
				redirect(get_root_path().'?p='.$request['p'].$tempMdt.'#commentPosition');
				else 
				redirect(get_root_path().'?p='.$request['p'].$tempMdt.'&a=view&r='.$request['r'].'#commentPosition');
			}
			else
			{
				echo '<script>alert("对不起，系统错误，删除失败！");location.href="javascript:history.go(-1)";</script>';
				exit;
			}
		}
	}
	else
	{
		echo '<script>alert("对不起，您没有对该评论删除的权限！");location.href="javascript:history.go(-1)";</script>';
		exit;
	}
}
function view_comment()
{
	global $params,$request,$db,$moduleTitle;
		
	$moduleTitle =  getModuleTitle();
	//载入评论模块模版	
	$part_path=ABSPATH.'/skins/'.STYLENAME.'/parts/comment_'.$params['action'].'.php';
	$content_part_path=ABSPATH.'/content/comment/parts_'.$params['action'].'.php';
	
	if(file_exists($part_path))
	require_once($part_path);
	else 
	require_once($content_part_path);
	if($_POST)
	{
	
	}	
	exit;
}
function getModuleTitle()
{
	global $params,$request,$db;
	//取得当前模块信息
	
	$tableInfo = get_model_type($params[id]);
	if(intval($request['r']>0))
	$titleInfo = $db->get_row("select * from ".TB_PREFIX.$tableInfo['type']." where channelId=$params[id] and id=".$request['r']." limit 1");
	else
	$titleInfo = $db->get_row("select * from ".TB_PREFIX.$tableInfo['type']." where channelId=$params[id] limit 1");
	switch($tableInfo['type'])
	{
		case 'article':
			return $titleInfo->pageName;
			break;
		case 'download':
			return $titleInfo->softwareName;
			break;
		case 'jobs':
			return $titleInfo->jobName;
			break;
		case 'list':
			return $titleInfo->title;
			break;
		case 'order':
			return $titleInfo->productName;
			break;
		case 'picture':
			return $titleInfo->title;
			break;
		case 'product':
			return $titleInfo->name;
			break;
		case 'productlist':
			return $titleInfo->name;
			break;
		case 'shopping':
			return $titleInfo->name;
			break;
		case 'solutions':
			return $titleInfo->title;
			break;
		case 'video':
			return $titleInfo->title;
			break;
	}
}
?>
