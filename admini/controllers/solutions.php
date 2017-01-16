<?php
require(ABSPATH.'/inc/class.guid.php');
function index()
{
	global $solutions,$db,$request;
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'solutions` order by case ordering when 0 then id else ordering end desc) as `solutions` where channelId='.$request['p'],'ordering desc',$db,20);
	$solutions = new DataTable($sb,'新闻列表页面');
	$solutions->add_col('编号','id','db',40,'"$rs[id]"');
	$solutions->add_col('主题','title','db',0,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[title]</a>"');
	$solutions->add_col('作者','author','db',0,'"$rs[author]"');
	$solutions->add_col('预览','preview','text',40,'"<a target=\"_blank\" href=\"../?p=$rs[channelId]\">预览</a>"');
	$solutions->add_col('时间','dtTime','db',140,'');
	$solutions->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除该解决方案?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$solutions->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function edit()
{
	global $solutions_item,$db,$request;
	if(empty($request['title']))
	{
		$sql='select id,`title`,`author`,`keyword`,`subheading`,`application`,`types`,`origialPic`,'.TB_PREFIX.'solutions.guid as guid,`content` from '.TB_PREFIX.'solutions,'.TB_PREFIX.'solutions_content where id='.$request['n'].' and '.TB_PREFIX.'solutions.guid='.TB_PREFIX.'solutions_content.guid';
		$solutions_item = $db->get_row($sql);
	}
	else
	{
		$solutions = new solutions();
		$solutions_content = new solutions_content();
		$solutions->get_request($request);		
		$solutions->editTime = date("Y-m-d H:i:s");
		$solutions_content->guid = $request['guid'];
		$solutions->id=$request['n'];
		$solutions->channelId=$request['p'];
		$solutions_content->content=$request['content'];
		$solutions_content->save();
		$solutions->save();
		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function create()
{
	global $result,$db,$request;
	if($_POST)
	{
		$guid = new Guid();
		$guid = $guid->toString();

		$solutions = new solutions();
		$solutions->addnew();
		$solutions->get_request($request);
		$solutions->guid = $guid;
		$solutions->dtTime = date("Y-m-d H:i:s");
		$solutions->channelId=$request['p'];
		$solutions->subheading=$request['subheading'];
		$solutions->application=$request['application'];
		$solutions->types=$request['types'];
		$solutions->save();

		$solutions_content = new solutions_content();
		$solutions_content->primary_key='id';
		$solutions_content->addnew();
		$solutions_content->guid 	=$guid;
		$solutions_content->content	=$request['content'];
		$solutions_content->save();
		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='select guid from '.TB_PREFIX.'solutions where id='.$request['n'];
		$guid = $db->get_var($sql);
		$sql='delete from '.TB_PREFIX.'solutions where id='.$request['n'].' limit 1';
		$db->query($sql);
		$sql='delete from '.TB_PREFIX.'solutions_content where guid=\''.$guid.'\' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
}
function addpicture()
{
	global $db,$request;

	$solutions = new solutions();
	$solutions->get_request($request);
	$solutions->id=$request['n'];
	$solutions->channelId=$request['p'];
	if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."article where id=".$request['n'];
		$row = $db->get_row($sql);
		if($row)
		{
			if(file_exists(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->smallPic);
			}
		}
		$upload = new Upload();
		$fileName = $upload->SaveFile('uploadfile');
		$solutions->origialPic = UPLOADPATH.$fileName;
		$paint = new Paint($solutions->origialPic);
		$solutions-> smallPic= $paint->Resize(solutionsWidth,solutionsHight,'s_');
	}
		
	if($solutions->save())
		redirect("./?p=$request[p]&l=$request[l]");
	else 
	echo'保存失败!';
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		if(empty($value))$value=0;
		$sql ='update '.TB_PREFIX.'solutions set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>