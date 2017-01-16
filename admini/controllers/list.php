<?php
require(ABSPATH.'/inc/class.guid.php');
function index()
{
	global $list,$db,$request;
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'list` order by case ordering when 0 then id else ordering end desc) as `temptable` where channelId='.$request['p'],'ordering desc',$db,20);
	$list = new DataTable($sb,'新闻列表页面');
	$list->add_col('编号','id','db',40,'"$rs[id]"');
	$list->add_col('主题','title','db',0,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[title]</a>"');
	$list->add_col('作者','author','db',0,'"$rs[author]"');
	$list->add_col('预览','preview','text',40,'"<a target=\"_blank\" href=\"../?p=$rs[channelId]&a=view&r=$rs[id]\">预览</a>"');
	$list->add_col('时间','dtTime','db',140,'');
	$list->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\" onclick=\"return confirm(\'您确认要删除该新闻?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$list->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function edit()
{
	global $list_item,$db,$request;
	if(empty($request['title']))
	{
		$sql='select id, `dtTime`,`counts`,`title`,`author`,`tags`,`origialPic`,'.TB_PREFIX.'list.guid as guid,`content` from '.TB_PREFIX.'list,'.TB_PREFIX.'list_content where id='.$request['n'].' and '.TB_PREFIX.'list.guid='.TB_PREFIX.'list_content.guid';
		$list_item = $db->get_row($sql);
	}
	else
	{
		$list = new dt_list();     //在这里要注意，由于此模块是list类型的，考虑到list()为系统函数。这里如果使用list类文件会产生冲突导致出错，所以修改为dt_list，所以如果您遇到此情况时也需要修改，并需要修改数据库模型文件夹下的即admini/models/下的文件同样也要命名为dt_list.php以及相应的内容的类继承也要统一
		$list_content = new list_content();
		$list->get_request($request);
		$list_content->guid = $request['guid'];
		$list->id=$request['n'];
		$list->channelId=$request['p'];
		$list_content->content=$request['content'];
		$list_content->save();
		$list->save();
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

		$list = new dt_list();     //在这里要注意，由于此模块是list类型的，考虑到list()为系统函数。这里如果使用list类文件会产生冲突导致出错，所以修改为dt_list，所以如果您遇到此情况时也需要修改，并需要修改数据库模型文件夹下的即admini/models/下的文件同样也要命名为dt_list.php以及相应的内容的类继承也要统一
		$list->addnew();
		$list->get_request($request);
		$list->guid = $guid;
		if(!empty($request['dtTime']))
		$list->dtTime = $request['dtTime'];
		else
		$list->dtTime = date("Y-m-d H:m:s");
		$list->channelId=$request['p'];
		$list->save();

		$list_content = new list_content();
		$list_content->primary_key='id';
		$list_content->addnew();
		$list_content->guid 	=$guid;
		$list_content->content	=$request['content'];
		$list_content->save();
		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='select guid from '.TB_PREFIX.'list where id='.$request['n'];
		$guid = $db->get_var($sql);
		$sql='delete from '.TB_PREFIX.'list where id='.$request['n'].' limit 1';
		$db->query($sql);
		$sql='delete from '.TB_PREFIX.'list_content where guid=\''.$guid.'\' limit 1';
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

	$list = new dt_list();     //在这里要注意，由于此模块是list类型的，考虑到list()为系统函数。这里如果使用list类文件会产生冲突导致出错，所以修改为dt_list，所以如果您遇到此情况时也需要修改，并需要修改数据库模型文件夹下的即admini/models/下的文件同样也要命名为dt_list.php以及相应的内容的类继承也要统一
	$list->get_request($request);
	$list->id=$request['n'];
	$list->channelId=$request['p'];
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
		$list->origialPic = UPLOADPATH.$fileName;
		$paint = new Paint($list->origialPic);
		$list-> smallPic= $paint->Resize(listWidth,listHight,'s_');
	}
 	if($list->save())
	{
		redirect("./?p=$request[p]&l=$request[l]");
	}
	else
	{
		echo '保存失败！';
	} 
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		if(empty($value))$value=0;
		$sql ='update '.TB_PREFIX.'list set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>