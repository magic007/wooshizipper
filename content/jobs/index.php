<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));

}
function view()
{
	global $db,$params;

	$sql='select * from '.TB_PREFIX.'jobs where id='.$params['args'];
	$jobs = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);
	
	//构造页面标题
	$page->title =  $jobs->jobName .' - '. $page->title ; 
	
	setdata('jobs',$jobs);
	setdata('page',$page);
}
function send()
{
	global $db,$resume,$pfileName,$request;
	if(!empty($request['name']))
	{
		require_once(ABSPATH.'/inc/models/resume.php');	
		$resume = new c_resume();	
		$resume->addnew();	
		$resume->get_request($request);
		$resume->parentId = $request['r'];
		$resume->channelId = $request['p'];
		$resume->dtTime = date("Y-m-d H:i:s");
		
		if($resume->save())
		{	
			if(URLREWRITE)
			{
				echo '<script>alert("您的个人简历已经提交成功，工作人员会及时回复并和你联系！");</script>';
				redirect('/html/'.get_menuName($request['p']).'/');
			}
			else
			{
				echo '<script>alert("您的个人简历已经提交成功，工作人员会及时回复并和你联系！");</script>';
				redirect_to($request['p'],'index');
			}			
		}
		else
		{
			if(URLREWRITE)
			{
				echo '<script>alert("对不起，系统错误，您的个人简历并未提交成功，请电话与我们联系！");</script>';
				redirect('/html/'.get_menuName($request['p']).'/');
			}
			else
			{
				echo '<script>alert("对不起，系统错误，您的个人简历并未提交成功，请电话与我们联系！");</script>';
				redirect_to($request['p'],'index');
			}	
		}
	}
}
?>