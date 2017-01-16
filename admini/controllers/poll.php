<?php 
function index()
{
	require_once(ABSPATH.'/inc/class.categorytree.php');
	global $poll,$poll_category,$db,$request;
	
	$poll_category = $db->get_results('select * from `'.TB_PREFIX.'poll_category` where channelId='.$request['p']);	
	
	if($request['c']=='0')
	{
		$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'poll_category` order by case ordering when 0 then id else ordering end desc) as `poll_category` where channelId='.$request['p'],'ordering desc',$db,12);
		$poll = new DataTable($sb,'投票主题页面');
		$poll->add_col('投票主题','title','db',200,'"$rs[title]"');
		$poll->add_col('操作','edit','text',140,'"<a href=\"./index.php?a=destroy_title&p='.$request['p'].'&c=$rs[id]&l='.$request['l'].'\"  onclick=\"return confirm(\'您确认要删除该产品?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./index.php?a=edit_title&p='.$request['p'].'&c=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
		$poll->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
	}
	else
	{
		$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'poll` order by case ordering when 0 then id else ordering end desc) as `poll` where categoryId='.$request['c'],'ordering desc',$db,12);
		$poll = new DataTable($sb,'投票主题页面');
		$poll->add_col('选项内容','choice','db',200,'"$rs[choice]"');
		$poll->add_col('操作','edit','text',140,'"<a href=\"./index.php?a=destroy_choice&p='.$request['p'].'&n=$rs[id]&c=$rs[categoryId]&l='.$request['l'].'\"  onclick=\"return confirm(\'您确认要删除该产品?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./index.php?a=edit_choice&p='.$request['p'].'&n=$rs[id]&c=$rs[categoryId]&l='.$request['l'].'\">[修改]</a>"');
		$poll->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
	}
}
function create_title()
{
	global $request;
	if($_POST)
	{
		$poll_category = new poll_category();
		$poll_category->addnew();
		$poll_category->get_request($request);
		$poll_category->dtTime = date("Y-m-d H:i:s");
		$poll_category->channelId=$request['p'];
		if($poll_category->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '添加主题失败！';
		}
	}
}
function edit_title()
{
	global $db,$request,$poll_category;
	$id = $request['c'];
	if(empty($request['title']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."poll_category WHERE id='$id'";
		$poll_category = $db->get_row($sql);
	}
	else
	{
		$poll_category = new poll_category();
		$poll_category->id = $id;
		$poll_category->get_request($request);
		if($poll_category->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '修改主题失败！';
		}
	}
}

function destroy_title()
{
	global $db,$request;
	if(!empty($request['c']))
	{
		$sql='delete from '.TB_PREFIX.'poll_category where id='.$request['c'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除主题失败！';
		}
	}
}

function create_choice()
{
	global $db,$request,$poll_category;
	$sql = "SELECT * FROM ".TB_PREFIX."poll_category WHERE id=".$request['c'];
	$poll_category = $db->get_row($sql);
	if($_POST)
	{
		$poll = new poll();
		$poll->addnew();
		$poll->get_request($request);
		$poll->channelId=$request['p'];
		$poll->categoryId=$request['c'];
		if($poll->save())
		{
						redirect("./?p=$request[p]&c=$request[c]&l=$request[l]");
		}
		else
		{
			echo '添加选项失败！';
		}
	}
}
function edit_choice()
{
	global $db,$request,$poll_category,$poll;
	$sql = "SELECT * FROM ".TB_PREFIX."poll_category WHERE id=".$request['c'];
	$poll_category = $db->get_row($sql);
	if(empty($request['choice']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."poll WHERE id=".$request['n'];
		$poll = $db->get_row($sql);
	}
	else
	{
		$poll = new poll();
		$poll->id = $request['n'];
		$poll->get_request($request);
		if($poll->save())
		{
						redirect("./?p=$request[p]&c=$request[c]&l=$request[l]");
		}
		else
		{
			echo '修改选项失败！';
		}
	}
}
function destroy_choice()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='delete from '.TB_PREFIX.'poll where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
						redirect("./?p=$request[p]&c=$request[c]&l=$request[l]");
		}
		else {
			echo '删除选项失败！';
		}
	}
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		$sql ='update '.TB_PREFIX.'poll set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
						redirect("./?p=$request[p]&c=$request[c]&l=$request[l]");
}
function category_ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		$sql ='update '.TB_PREFIX.'poll_category set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
						redirect("./?p=$request[p]&l=$request[l]");
}
?>