<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));

}
function view()
{
	global $db,$params,$comment,$request;
	$sql='select * from '.TB_PREFIX.'productlist where id='.$request['r'];
	$productlist = $db->get_row($sql);
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	$page = $db->get_row($sql);

	//构造页面标题
	$page->title =  $productlist->name .' - '. $page->title ;
	$productlist->origialPic = get_root_path().$productlist->origialPic;
	$productlist->middlePic = get_root_path().$productlist->middlePic;
	$productlist->smallPic = get_root_path().$productlist->smallPic;
	setdata('productlist',$productlist);
	setdata('page',$page);
}
function ex_sub_menu($strarr,$select_strarr,$pid,$select_id)
{
	global $db;
	$menu = $db->get_results("select * from ".TB_PREFIX."productlist_category where deep = 0 and channelId = $pid order by ordering");
	if($menu)
	{
		foreach ($menu as $o)
		{
			if($select_id==$o->id)
			{
				echo $select_strarr[0].'<a href="./?p='.$o->channelId.'&c='.$o->id.'">'.$o->title."</a>".$select_strarr[1];
				menu_product($o->id,$o->channelId,$select_strarr);
			}
			else
			{
				echo $strarr[0].'<a href="./?p='.$o->channelId.'&c='.$o->id.'">'.$o->title."</a>".$strarr[1];
			}
		}
	}
}
function menu_product($cid,$pid,$select_strarr)
{
	global $db;
	$pro_menu = $db->get_results("select * from ".TB_PREFIX."productlist where channelId = $pid and categoryId=$cid order by ordering desc");
	if(!empty($pro_menu))
	{
		foreach($pro_menu as $o)
		{
			echo $select_strarr[0].'&nbsp;&nbsp;&nbsp;&nbsp;<a href="./?p='.$o->channelId.'&a=view&c='.$cid.'&r='.$o->id.'">'.$o->name."</a>".$select_strarr[1];
		}
	}
}
function download_categories($category)
{
	global $db,$params,$sb,$db,$bw,$request;
	$id=$request['r'];
	$downlist = (array)$db->get_row("select * from ".TB_PREFIX."productlist where id=$id");
	if($downlist[$category]!="")
	{
			$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."download where id in (".$downlist[$category].")",'id desc',$db,12);
			if($sb->results)
			{	
				   echo '<table width="90%" border="0" align="left" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC"><tr><td width="10"></td><td height="20" bgcolor="#FFFFFF"><div align="center">名称</div></td><td width="80" bgcolor="#FFFFFF"> <div align="center">大小</div></td><td bgcolor="#FFFFFF"> <div align="center">类别</div></td></tr>';
				$i=1;
						foreach($sb->results as $key =>$value)
						{
?>
		<tr> 
		<td bgcolor="#FFFFFF" height="18"><?php echo $i?></td>
		<td bgcolor="#FFFFFF" height="18"><div align="left"><a href="<?php echo ROOTPATH ?>/?p=<?php echo $value['channelId'] ?>&a=view&r=<?php echo $value['id'] ?>" target=_blank><?php echo $value['softwareName']."\t" ?></a> </div></td>
		<td bgcolor="#FFFFFF"> <div align="left"><?php echo $value['softwareSize']."\t" ?> </div></td>
		<td bgcolor="#FFFFFF"> <div align="left"><?php echo $value['classification'] ?></div></td>
		</tr>
<?php
						   $i++;
						}
					echo '</table>';
			}	
	}
	else
		echo 'NO download';
}
?>