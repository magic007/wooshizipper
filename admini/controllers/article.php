<?php
function index()
{
	global $article,$db,$request,$i,$count;

	$count = $db->get_var("select count(*) from ".TB_PREFIX."article where channelId=$request[p]");

	if($request[i])
	{
		$i = $request[i];
		$article = $db->get_row("select * from ".TB_PREFIX."article where channelId=$request[p] and id=$request[i] order by pageId desc ");
	}
	else
	{

		$article = $db->get_row("select * from ".TB_PREFIX."article where channelId=$request[p] order by pageId");
	}

}
function update()
{
	global $request,$db;
	$article = new article();
	if(empty($request['i']))
	{
		if($article->get_var("select count(*) from ".TB_PREFIX."article where channelId=$request[p]")==0)
		$article->addnew();
		else
		{
			$art = $db->get_row("select * from ".TB_PREFIX."article where channelId=$request[p] order by pageId");
			$article->id=$art->id;
		}
	}
	else
	$article->id		=$request['i'];
	$aid=$article->id;
	$article->channelId	=$request['p'];
	
	$article->pageName 	= $request['title'];
	$article->summary 	= $request['summary'];
	$article->content 	= $request['content'];
	$article->dtTime 	= date('Y-m-d H:i:s');
	$article->save();

	redirect("./?p=$request[p]&i=$aid&l=$request[l]");

}
function addarticle()
{
}

function newarticle()
{
	global $request,$db;

	$count = $db->get_var("select count(*) from ".TB_PREFIX."article where channelId=$request[p]");

	$i = $count;

	$article = new article();
	$article->addnew();

	$article->channelId=$request['p'];
	$article->pageName 	= $request['title'];
	$article->summary 	= $request['summary'];
	$article->content 	= $request['content'];
	$article->dtTime 	= date('Y-m-d H:i:s');
	$article->pageId    = $i;
	$article->save();
	redirect("./?p=$request[p]&l=$request[l]");

}
function destroy()
{
	global $db,$request;
	if(!empty($request['i']))
	{
		$sql = 'SELECT * FROM '.TB_PREFIX.'article where  id ='.$request['i'];
		$row = $db->get_row($sql);
		if(!empty($row->origialPic))
		{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->smallPic);
		}
		$sql='delete from '.TB_PREFIX.'article where id ='.$request['i'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败';
		}
	}
	else {
		$sql='delete from '.TB_PREFIX.'article where pageId =0 and channelId ='.$request['p'].' limit 1';
		$db->query($sql);
		redirect("./?p=$request[p]&l=$request[l]");
	}
}
function addpicture()
{
	global $db,$request;
	!$request[i]?$i=0:$i=$request[i];

	$article = new article();
	if($article->get_var("select count(*) from ".TB_PREFIX."article where channelId=$request[p] and pageId=$i")==0)
	{
		$article->addnew();
	}
	else
	{
		$art = $db->get_row("select * from ".TB_PREFIX."article where channelId=$request[p] and pageId=$i");
		$article->id=$art->id;
	}
	$article->get_request($request);
	
	if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."article where channelId=$request[p] and pageId=$i";
		$row = $db->get_row($sql);
		if($row)
		{
			if(file_exists(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->smallPic);
			}
		}
		$article->channelId=$request['p'];

		$upload = new Upload();
		$fileName = $upload->SaveFile('uploadfile');
		$article->origialPic = UPLOADPATH.$fileName;
		$paint = new Paint($article->origialPic);
		$article-> smallPic= $paint->Resize(articleWidth,articleHight,'s_');
	}
	if($article->save())
	{
		redirect("./?p=$request[p]&l=$request[l]");
	}
	else
	{
		echo '保存失败！';
	}
}
function get_article_page($channel_id)
{
	global $db,$request;
	$sql = "select * from ".TB_PREFIX."article where channelId=$channel_id order by pageId";
	$art_page = $db->get_results($sql);
	if($art_page)
	{
		$i=1;
		foreach ($art_page as $o)
		{
		?>
		<tr><td class='tableCellTwo' ><a href="./?p=<?php echo $channel_id ?>&i=<?php echo $o->id ?>"><?php echo '('.$i.')'?></a>&nbsp;<a href="./?p=<?php echo $channel_id ?>&i=<?php echo $o->id ?>"><?php echo $o->pageName ?></a></td><td class='tableCellTwo red'><a href="./?a=destroy&p=<?php echo $channel_id ?>&i=<?php echo $o->id ?>&l=<?php echo $request['l']?>">删除</a></td></tr>
		<?php
		$i++;
		}
	}
}
?>