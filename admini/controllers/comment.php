<?php 
function auditingComment()
{
	global $db,$request;
	if(!empty($request['comment']))
	{
		$sql='update '.TB_PREFIX.'comment set auditing = 1 where id='.$request['comment'].' limit 1';
		if($db->query($sql))
		{
			if(intval($request['n'])>0)
			redirect('?a=edit&p='.$request['p'].'&l='.$request['l'].'&n='.$request['n'].'#adminiCommentPosition');
			else
			redirect('?p='.$request['p'].'&l='.$request['l'].'#adminiCommentPosition');
		}
		else
		{
			echo '审核失败！';
		}
	}
}
function destroyComment()
{
	global $db,$request;
	if(!empty($request['comment']))
	{
		$sql='delete from '.TB_PREFIX.'comment where id='.$request['comment'].' limit 1';
		if($db->query($sql))
		{
			if(intval($request['n'])>0)
			redirect('?a=edit&p='.$request['p'].'&l='.$request['l'].'&n='.$request['n'].'#adminiCommentPosition');
			else
			redirect('?p='.$request['p'].'&l='.$request['l'].'#adminiCommentPosition');
		}
		else
		{
			echo '删除失败！';
		}
	}
}
function auditingAllComment()
{
	global $db,$request;	
	
	if(!empty($request['comment_operation_all']))
	{
		$comment_operation_all = $request['comment_operation_all'];
		foreach($comment_operation_all as $o)
		{
			if(empty($o))$o=0;
			$sql ='update '.TB_PREFIX.'comment set auditing=1 where id='.$o;
			$db->query($sql);
		}
		if(intval($request['n'])>0)
		redirect('?a=edit&p='.$request['p'].'&l='.$request['l'].'&n='.$request['n'].'#adminiCommentPosition');
		else
		redirect('?p='.$request['p'].'&l='.$request['l'].'&n='.$request['n'].'#adminiCommentPosition');
	}
}
function destroyAllComment()
{
	global $db,$request;	
	
	if(!empty($request['comment_operation_all']))
	{
		$comment_operation_all = $request['comment_operation_all'];
		foreach($comment_operation_all as $o)
		{
			if(empty($o))$o=0;
			$sql ='delete from '.TB_PREFIX.'comment where id='.$o;
			$db->query($sql);
		}
		if(intval($request['n'])>0)
		redirect('?a=edit&p='.$request['p'].'&l='.$request['l'].'&n='.$request['n'].'#adminiCommentPosition');
		else
		redirect('?p='.$request['p'].'&l='.$request['l'].'#adminiCommentPosition');
	}
}
?>
