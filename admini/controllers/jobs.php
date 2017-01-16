<?php 
function index()
{
	global $jobs,$db,$request;
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'jobs` order by case ordering when 0 then id else ordering end desc) as `jobs` where channelId='.$request['p'],'ordering desc',$db,12);
	$jobs = new DataTable($sb,'招聘信息页面');
	$jobs->add_col('编号','id','db',40,'"$rs[id]"');
	$jobs->add_col('职位名称','jobName','db',0,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[jobName]</a>"');
	$jobs->add_col('发布时间','dtTime','db',140,'');
	$jobs->add_col('截至时间','lastTime','db',140,'');
	$jobs->add_col('预览','preview','text',40,'"<a target=\"_blank\" href=\"../?p=$rs[channelId]\">预览</a>"');
	$jobs->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">[修改]</a>"');
	$jobs->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $result,$db,$request;
	if($_POST)
	{
		$jobs = new jobs();
		$jobs->addnew();
		$jobs->get_request($request);
		$jobs->dtTime = date("Y-m-d H:i:s");
		$jobs->classification = $request['l'];
		$jobs->channelId=$request['p'];
		if($jobs->save())
			redirect("./?p=$request[p]&l=$request[l]");
		else
		echo "添加失败！";
	}
}
function edit()
{
	global $jobs_item,$db,$request;
	if(empty($request['jobName']))
	{
		$sql='select * from '.TB_PREFIX.'jobs where id='.$request['n'];
		$jobs_item = $db->get_row($sql);
	}
	else
	{
		$jobs_item = new jobs();
		$jobs_item->get_request($request);
		$jobs_item->id = $request['n'];
		if($jobs_item->save())
			redirect("./?p=$request[p]&l=$request[l]");
		else
		echo '修改失败！';
	}
}

function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='delete from '.TB_PREFIX.'jobs where id=\''.$request['n'].'\' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
}
function viewresumes()
{
	global $db,$request,$resumes,$jobs;
	$jobs = $db->get_results('select * from `'.TB_PREFIX.'jobs` where lastTime>='.date('Y-m-d').' and classification="'.$request['l'].'"');
	if(empty($request['j']))
	$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'jobs` as a,`'.TB_PREFIX.'resume` as b where b.channelId='.$request['p'].' and b.parentId = a.id','b.id',$db,12);
	else
	$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'jobs` as a,`'.TB_PREFIX.'resume` as b where b.channelId='.$request['p'].' and b.parentId = a.id and b.parentId='.$request['j'],'b.id',$db,12);	
	$resumes = new DataTable($sb,'应聘者简历信息页面');
	$resumes->add_col('编号','id','db',40,'"$rs[id]"');
	$resumes->add_col('应聘者名称','name','db',150,'"<a href=\"./?a=viewresume&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">$rs[name]</a>"');
	$resumes->add_col('应聘职位名称','jobName','db',0,'"<a href=\"./?a=viewresume&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">$rs[jobName]</a>"');	
	$resumes->add_col('简历添加时间','dtTime','db',140,'');
	if(empty($request['j']))
	$resumes->add_col('操作','edit','text',140,'"<a href=\"./?a=destroyresume&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">[删除]</a><a href=\"./?a=viewresume&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">[查看]</a>"');
	else
	$resumes->add_col('操作','edit','text',140,'"<a href=\"./?a=destroyresume&p=$rs[channelId]&j='.$request['j'].'&n=$rs[id]&l='.$request[l].'\">[删除]</a><a href=\"./?a=viewresume&p=$rs[channelId]&n=$rs[id]&l='.$request[l].'\">[查看]</a>"');
}
function viewresume()
{
	global $db,$request,$resume;
	$sql = 'select * from `'.TB_PREFIX.'resume` where id='.$request['n'];
	$resume = $db->get_row($sql);
}
function destroyresume()
{
	global $db,$request;
	$sql = 'delete from `'.TB_PREFIX.'resume` where id='.$request['n'];
	if($db->query($sql))
	{
		if(empty($request['j']))
			redirect("./?p=$request[p]&l=$request[l]&a=viewresumes");
		else 
			redirect("./?p=$request[p]&l=$request[l]&j=$request[j]&a=viewresumes");
	}
	else
	{
		echo '删除失败！';
	}
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		if(empty($value))$value=0;
		$sql ='update '.TB_PREFIX.'jobs set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>