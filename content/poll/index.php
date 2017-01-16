<?php 
function index()
{
	global $db,$params,$request;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
	if(!empty($request['vtype'])&&!empty($request['choice']))
	{
		$sql="select * from ".TB_PREFIX."poll_category where id=".$request['r'];
		$poll_client=$db->get_row($sql);
		$cur_ip=getip();
		if(empty($poll_client->client_ip))
		{
			$insert_ip=$cur_ip;
		}
		else
		{
			$checkIP=split(";",$poll_client->client_ip);
			if(in_array($cur_ip,$checkIP))
			{
				echo "<script language='javascript'>alert('您已经投过票了！');window.history.go(-1);</script>";
				exit;
			}
			array_push($checkIP,$cur_ip);
			$insert_ip=implode(";",$checkIP);
		}
		if(URLREWRITE) 
			$url="/html/".get_menuName($params['id'])."/view_".$request['r'].".html";
		else
			$url="/?p=".$request['p']."&a=view&r=".$request['r'];
		if ($request["vtype"]=="a")
	    {	
			$sql="update ".TB_PREFIX."poll set num=num+1 where id=".$request['choice'];
			$db->query($sql);
			$sql="update ".TB_PREFIX."poll_category set client_ip='".$insert_ip."' where id=".$request['r'];
			$db->query($sql);
			echo '<script>alert("投票成功！");window.location.href="'.$url.'";</script>';
	    }
	    elseif ($request["vtype"]=="b")
	    {
			for ($i=0;$i<count($request['choice']);$i++)
			{
			 $sql="update ".TB_PREFIX."poll set num=num+1 where id=".$request['choice'][$i];
			 $db->query($sql);
			}
			$sql="update ".TB_PREFIX."poll_category set client_ip='".$insert_ip."' where id=".$request['r'];
			$db->query($sql);
			echo '<script>alert("投票成功！");window.location.href="'.$url.'";</script>';
	    }
	}
	else if(!empty($request['vtype'])&&empty($request['choice']))
	{
		echo "<script language='javascript'>alert('您没有添加选项！');window.history.go(-1);</script>";
		exit;
	}
}
function view()
{
	global $db,$params,$request;
	
	$sql='select * from '.TB_PREFIX.'poll_category where id='.$request['r'];
	$poll = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title =  $poll->title .' - '. $page->title ; 
	
	setdata('poll',$poll);
	setdata('page',$page);
}
?>