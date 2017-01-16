<?php
checkme(9);
function model_radio_group($name,$select='article')
{
	global $db;
	$temp_arr=$db->get_results('select * from `'.TB_PREFIX.'models_reg` order by id');
	db_radio_box($temp_arr,'type','model_name',$name,$select);
}
function show_hide_radio($isHidden)
{
	if($isHidden==0||$isHidden=='')
		echo '<input type="radio" name="isHidden" value="0" checked="checked">显示<input type="radio" name="isHidden" value="1">隐藏';
	else
		echo '<input type="radio" name="isHidden" value="0">显示<input type="radio" name="isHidden" value="1" checked="checked">隐藏';
}
function show_isComment_radio($isComment)
{
	if($isComment==1)
		echo '<input type="radio" name="isComment" value="1" checked="checked">开启<input type="radio" name="isComment" value="0">关闭';		
	else
		echo '<input type="radio" name="isComment" value="1">开启<input type="radio" name="isComment" value="0" checked="checked">关闭';		
}
function is_commit_at($isComment,$n,$type)
{
	global $request;
	if($isComment)
	{
		if($type != 'guestbook' && $type != 'jobs' && $type != 'webmap' && $type != 'order')
		{
			return "|<a href=\"./?m=system&s=managechannel&a=destroycomment&cid=$n&l=$request[l]\"><font color=\"red\">[关闭评论模块]</font></a>";
		}
	}
	else
	{
		if($type != 'guestbook' && $type != 'jobs' && $type != 'webmap' && $type != 'order')
		{
			return "|<a href=\"./?m=system&s=managechannel&a=createcomment&cid=$n&l=$request[l]\"><font color=\"green\">[开启评论模块]</font></a>";
		}
	}
}
function index()
{
	global $menus,$db,$request,$menus,$sb;
	$request['cid']=empty($request['cid'])?getFristChannelId():$request['cid'];
	if($request['l']=='cn')
	{
		if($request['cid']!=null)
		{
			$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'menu` where parentId='.$request['cid'].'','ordering',$db,20);
			$menus = new DataTable($sb,'栏目列表');
			$menus->add_col('ID','id','db',40,'"$rs[id]"');
			$menus->add_col('英文名称','menuName','db',140,'"$rs[menuName]"');
			$menus->add_col('中文名称','title','db',140,'"$rs[title]"');
			$menus->add_col('类型','type','db',140,'$rs[type]');
			$menus->add_col('编辑','edit','text',0,'"<a href=\"./?m=system&s=managechannel&a=edit&cid=$rs[id]&l=cn\">[修改]</a>|<a href=\"./?m=system&s=managechannel&a=destroy&cid=$rs[id]&l=cn\" onclick=\"return confirm(\'您确认要删除本栏目?一旦删除，此栏目将不可恢复。\');\">[删除]</a>".is_commit_at($rs[\'isComment\'],$rs[\'id\'],$rs[\'type\'])');
			$menus->add_col('排序[升序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
			string2file(get_menu(),ABSPATH.'/admini/cn_menu_content.js');
			string2file(admin_menu(),ABSPATH.'/admini/cn_nav.php');
		}
		else
		{
			string2file('',ABSPATH.'/admini/cn_menu_content.js');
			string2file('<li><a href="?m=system&s=managechannel&cid=0&a=createchannel&l=cn">暂无网站频道，请添加网站频道</a></li>',ABSPATH.'/admini/cn_nav.php');
		}
	}
	elseif ($request['l']=='en')
	{
		if($request['cid']!=null)
		{
			$sb = new sqlbuilder('mdt','select * from `'.TB_PREFIX.'menu` where parentId='.$request['cid'].' and dtLanguage="en"','ordering',$db,20);
			$menus = new DataTable($sb,'栏目列表');
			$menus->add_col('ID','id','db',40,'"$rs[id]"');
			$menus->add_col('英文名称','menuName','db',140,'"$rs[menuName]"');
			$menus->add_col('中文名称','title','db',140,'"$rs[title]"');
			$menus->add_col('类型','type','db',140,'$rs[type]');
			$menus->add_col('编辑','edit','text',0,'"<a href=\"./?m=system&s=managechannel&a=edit&cid=$rs[id]&l=en\">[修改]</a>|<a href=\"./?m=system&s=managechannel&a=destroy&cid=$rs[id]&l=en\" onclick=\"return confirm(\'您确认要删除本栏目?一旦删除，此栏目将不可恢复。\');\">[删除]</a>".is_commit_at($rs[\'isComment\'],$rs[\'id\'],$rs[\'type\'])');
			$menus->add_col('排序[升序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
			string2file(get_en_menu(),ABSPATH.'/admini/en_menu_content.js');
			string2file(admin_en_menu(),ABSPATH.'/admini/en_nav.php');
		}
		else
		{
			string2file('',ABSPATH.'/admini/en_menu_content.js');
			string2file('<li><a href="?m=system&s=managechannel&cid=0&a=createchannel&l=en">No channel,please add!</a></li>',ABSPATH.'/admini/en_nav.php');
		}
	}
}
function create()
{
	global $db,$request;
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('栏目名不能为空!');window.history.go(-1);</script>";
			exit;
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以栏目的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->addnew();
					$menu->get_request($request);
					$menu->parentId=empty($request['cid'])?0:$request['cid'];
					$menu->deep=1;
					$menu->dtLanguage=$request['l'];
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->save();
					redirect('?m=system&s=managechannel&cid='.$menu->parentId.'&l='.$request['l'].'');
				}
			}
			else
			{
				$menu = new menu();
				$menu->addnew();
				$menu->get_request($request);
				$menu->parentId=empty($request['cid'])?0:$request['cid'];
				$menu->deep=1;
				$menu->dtLanguage=$request['l'];
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->save();
				redirect('?m=system&s=managechannel&cid='.$menu->parentId.'&l='.$request['l'].'');
			}
		}
	}
}
function createSubColumns()
{
	global $db,$request;
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('栏目名不能为空!');window.history.go(-1);</script>";
			exit;
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以栏目的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->addnew();
					$menu->get_request($request);
					$menu->parentId=empty($request['cid'])?0:$request['cid'];
					$menu->deep=2;
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->save();
					redirect('?m=system&s=managechannel&cid='.$menu->parentId.'&l='.$request['l'].'');
				}
			}
			else
			{
				$menu = new menu();
				$menu->addnew();
				$menu->get_request($request);
				$menu->parentId=empty($request['cid'])?0:$request['cid'];
				$menu->deep=2;
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->save();
				redirect('?m=system&s=managechannel&cid='.$menu->parentId.'&l='.$request['l'].'');
			}
		}
	}
}
function createchannel()
{
	global $db,$request;
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('频道名不能为空!');window.history.go(-1);</script>";
			exit;
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以频道的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->addnew();
					$menu->get_request($request);
					$menu->parentId=0;
					$menu->deep=0;
					$menu->dtLanguage=$request['l'];
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->save();
					redirect('?m=system&s=managechannel&l='.$request['l'].'');
				}
			}
			else
			{
				$menu = new menu();
				$menu->addnew();
				$menu->get_request($request);
				$menu->parentId=0;
				$menu->deep=0;
				$menu->dtLanguage=$request['l'];
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->save();
				redirect('?m=system&s=managechannel&l='.$request['l'].'');	
			}
		}
	}
}
function edit()
{
	global $menu_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'menu where id='.$request['cid'];
	$menu_item = $db->get_row($sql);
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('栏目名不能为空!');window.history.go(-1);</script>";
			exit;
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以频道的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']) && ($menu_item->menuName != $request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->id=$request['cid'];
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->get_request($request);
					if($menu->save())
					{
						redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
					}

				}
			}
			else
			{
				$menu = new menu();
				$menu->id=$request['cid'];
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->get_request($request);
				if($menu->save())
				{
					redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
				}
			}
		}
	}
}
function editSubColumns()
{
	global $menu_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'menu where id='.$request['cid'];
	$menu_item = $db->get_row($sql);
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('栏目名不能为空!');window.history.go(-1);</script>";
			exit;
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以频道的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']) && ($menu_item->menuName != $request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->id=$request['cid'];
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->get_request($request);
					if($menu->save())
					{
						redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
					}

				}
			}
			else
			{
				$menu = new menu();
				$menu->id=$request['cid'];
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->get_request($request);
				if($menu->save())
				{
					redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
				}
			}
		}
	}
}
function editchannel()
{
	global $menu_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'menu where id='.$request['cid'];
	$menu_item = $db->get_row($sql);
	if($_POST)
	{
		if(empty($request['title']))
		{
			echo "<script language='javascript'>window.alert('频道名不能为空!');window.history.go(-1);</script>";
		}
		else
		{
			if(URLREWRITE)
			{
				if(empty($request['menuName']))
				{
					echo "<script language='javascript'>window.alert('因为您在站点设置里选择了站点页面永久路径和页面静态化，所以频道的英文名必需填写!');window.history.go(-1);</script>";
					exit;
				}
				elseif(menuNameIsExist($request['menuName']) && ($menu_item->menuName != $request['menuName']))
				{
					echo "<script language='javascript'>window.alert('您填写的英文名已经被其它频道或栏目占用。请更换其它英文名!');window.history.go(-1);</script>";
					exit;
				}
				else
				{
					$menu = new menu();
					$menu->id=$request['cid'];
					if(intval($request['isHidden'])===0)$menu->isHidden='0';
					if(intval($request['isComment'])===0)$menu->isComment='0';
					if(intval($request['level'])===0)$menu->level='0';
					if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
					$menu->get_request($request);
					if($menu->save())
					{
						redirect('?m=system&s=managechannel&cid='.$request[cid].'&l='.$request['l'].'');
					}
				}
			}
			else
			{
				$menu = new menu();
				$menu->id=$request['cid'];
				if(intval($request['isHidden'])===0)$menu->isHidden='0';
				if(intval($request['isComment'])===0)$menu->isComment='0';
				if(intval($request['level'])===0)$menu->level='0';
				if(intval($request['isExternalLinks'])===0)$menu->isExternalLinks='0';
				$menu->get_request($request);
				if($menu->save())
				{
					redirect('?m=system&s=managechannel&cid='.$request[cid].'&l='.$request['l'].'');
				}
			}
		}
	}
}
function destroy()
{
	global $db,$request;
	if(!empty($request['cid']))
	{
		$sql='select * from '.TB_PREFIX.'menu where id='.$request['cid'];
		$menu_item = $db->get_row($sql);
		$sql='delete from '.TB_PREFIX.'menu where id='.$request['cid'].' limit 1';
		if($db->query($sql))
		{
			redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
		}
		else {
			echo '删除失败！';
		}
	}

}
function destroySubColumns()
{
	global $db,$request;
	if(!empty($request['cid']))
	{
		$sql='select * from '.TB_PREFIX.'menu where id='.$request['cid'];
		$menu_item = $db->get_row($sql);
		$sql='delete from '.TB_PREFIX.'menu where id='.$request['cid'].' limit 1';
		if($db->query($sql))
		{
			redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
		}
		else {
			echo '删除失败！';
		}
	}

}
function destroychannel()
{
	global $db,$request;
	if(!empty($request['cid']))
	{
		$sql='delete from '.TB_PREFIX.'menu where id='.$request['cid'].' or parentId='.$request['cid'].'';
		if($db->query($sql))
		{
			redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
		}
		else {
			echo '删除失败！';
		}
	}
}
function addpicture()
{
	global $db,$request,$menu_item;
	$menu = new menu();
	$art = $db->get_row("select origialPic from ".TB_PREFIX."menu where id=$request[cid]");
	$menu->id=$art->id;
	$menu->get_request($request);
	
	if(!empty($_FILES['uploadfile'])&&empty($request['origialPic']))
	{
		$sql = "SELECT origialPic,smallPic FROM ".TB_PREFIX."menu where id=$request[cid]";
		$row = $db->get_row($sql);

			if(is_file(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->smallPic);
			}	
		$menu->id=$request['cid'];

		$upload = new Upload();
		$fileName = $upload->SaveFile('uploadfile');
		$menu->origialPic = UPLOADPATH.$fileName;
		$paint = new Paint($menu->origialPic);
		$menu-> smallPic= $paint->Resize($request['width'],$request['hight'],'s_');
	}
	else
	{
		global $db,$request,$menu_item;
		$menu = new menu();
		$art = $db->get_row("select * from ".TB_PREFIX."menu where id=$request[cid]");
		$menu->id=$art->id;
		$menu->width=$art->width;
		$menu->hight=$art->hight;
		$menu->get_request($request);
	}
	if($menu->save())
	{
		redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
	}
	else
	{
		echo '保存失败！';
	}
}
function createcomment()
{
	global $menu,$db,$request;

	if(!empty($request['cid']))
	{
		$menu = new menu();
		$menu->id=$request['cid'];
		$menu->isComment = 1;
		if($menu->save())
		{
			redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
		}else {
			echo '评论添加失败！';
		}
	}
}
function destroycomment()
{
	global $menu,$db,$request;
	if(!empty($request['cid']))
	{
		$menu = new menu();
		$menu->id=$request['cid'];
		$menu->isComment = 0;
		if($menu->save())
		{
			redirect('?m=system&s=managechannel&cid='.$menu_item->parentId.'&l='.$request['l'].'');
		}
		else {
			echo '评论删除失败！';
		}
	}
}
function main_menu()
{
	global $db,$request;
	$sql='select * from '.TB_PREFIX.'menu where deep=0  and dtLanguage="'.$request['l'].'" order by ordering';
	$menus=$db->get_results($sql);
	if(!empty($menus))
	{
		foreach($menus as $menu)
		{
			echo '<a href="?m=system&s=managechannel&cid='.$menu->id.'&l='.$request['l'].'">'.$menu->title.'</a> | ';
		}

	}	
	else
	{echo '<a href="?m=system&s=managechannel&cid=0&a=createchannel">请添加网站频道</a>';}
}
function getFristChannelId()
{
	global $db,$request;
	$sql='select id from '.TB_PREFIX.'menu where deep=0 and dtLanguage="'.$request['l'].'" order by ordering LIMIT 1';
	return $db->get_var($sql);
}
//-------------------------------------------
//得到栏目的父ID
function getParentId($id)
{
	global $db;
	if(isset($id))
	{
		$sql="select parentId from ".TB_PREFIX."menu where id=$id limit 1";
		$parentId=@$db->get_var($sql);
		return $parentId==0?$id:$parentId;
	}
	else
	{
		return $id;
	}
}
//得到栏目的子ID
function getChildID($id)
{
	global $db;
	if(isset($id))
	{
		$sql="select id from ".TB_PREFIX."menu where parentId=$id order by ordering";	
 		$childId=@$db->get_col($sql);
		return $childId;
	}
	else
		return null;
}
function admin_menu()
{
	global $db;
	$tempstr = '';
	$sql="select * from ".TB_PREFIX."menu where deep=0 and dtLanguage='cn' order by ordering";
	$admin_menus=$db->get_results($sql);
	
	if(!empty($admin_menus))
	{
		foreach ($admin_menus as $menu)
		{
			$tempstr.= "<li><a href='./?p=$menu->id&l=cn' id='m$menu->id'>$menu->title</a></li>\r\n";
		}
		return $tempstr;
	}
}
function admin_en_menu()
{
	global $db;
	$tempstr = '';
	$sql="select * from ".TB_PREFIX."menu where deep=0 and dtLanguage='en' order by ordering";
	$admin_en_menus=$db->get_results($sql);
	
	if(!empty($admin_en_menus))
	{
		foreach ($admin_en_menus as $menu)
		{
			$tempstr.= "<li><a href='./?p=$menu->id&l=en' id='m$menu->id'>$menu->title</a></li>\r\n";
		}
		return $tempstr;
	}
}
function admin_submenu()
{
	global $pageId,$db,$pageInfo;
	if(isset($pageId))
	{
		if(getParentId($pageId)!= null)
		{
			$sql="select * from ".TB_PREFIX."menu where parentId=".getParentId($pageId)." order by ordering";
			$tempObj=$db->get_results($sql);
			if(!empty($tempObj))
			{
				if(!empty($tempObj))
				{
					foreach ($tempObj as $menu)
					{
						if($menu->id==$pageId)
						{
							echo "<li><a href=\"./?p=$menu->id\">".$menu->title."<span class=\"CNshadow\">".$menu->title."</span></a></li>";
							$pageInfo['submenuName']=$menu->title;
						}
						else
						{
							echo "<li><a href=\"./?p=$menu->id\">".$menu->title."<span class=\"CNshadow\">".$menu->title."</span></a></li>\r\n";
							echo "m$menu->channelId.addItem(\"$menu->title\",\"./?p=$menu->id\");";
						}
					}
				}
				else {}
			}
		}
	}
}
function get_menu()
{
	global $db;
	$tempstr ='if(mtDropDown.isSupported()){';
	$tempstr .='var ms = new mtDropDownSet(mtDropDown.direction.down, 0, 0, mtDropDown.reference.bottomLeft);';
	$sql="select * from ".TB_PREFIX."menu where dtLanguage='cn' order by ordering";
	$tempObj=$db->get_results($sql);
	if(!empty($tempObj))
	{
		foreach ($tempObj as $menu)
		{
			if($menu->deep==0)
			$tempstr .='var m'.$menu->id.' = ms.addMenu(document.getElementById("m'.$menu->id.'"));';
		}
		foreach ($tempObj as $menu)
		{
			if($menu->deep==1)
			$tempstr .="m$menu->parentId.addItem(\"$menu->title\",\"./?p=$menu->id&l=cn\");";
		}
		foreach ($tempObj as $menu)
		{
			if($menu->deep==2)
			$tempstr .="m$menu->parentId.addItem(\"$menu->title\",\"./?p=$menu->id&l=cn\");";
		}
	}
	$tempstr .='mtDropDown.renderAll();}';
	return $tempstr;
}
function get_en_menu()
{
	global $db;
	$tempstr ='if(mtDropDown.isSupported()){';
	$tempstr .='var ms = new mtDropDownSet(mtDropDown.direction.down, 0, 0, mtDropDown.reference.bottomLeft);';
	$sql="select * from ".TB_PREFIX."menu where dtLanguage='en' order by ordering";
	$tempObj=$db->get_results($sql);
	if(!empty($tempObj))
	{
		foreach ($tempObj as $menu)
		{
			if($menu->deep==0)
			$tempstr .='var m'.$menu->id.' = ms.addMenu(document.getElementById("m'.$menu->id.'"));';
		}
		foreach ($tempObj as $menu)
		{
			if($menu->deep==1)
			$tempstr .="m$menu->parentId.addItem(\"$menu->title\",\"./?p=$menu->id&l=en\");";
		}
		foreach ($tempObj as $menu)
		{
			if($menu->deep==2)
			$tempstr .="m$menu->parentId.addItem(\"$menu->title\",\"./?p=$menu->id&l=en\");";
		}
	}
	$tempstr .='mtDropDown.renderAll();}';
	return $tempstr;
}
function menuNameIsExist($menuName)
{
	global $db;
	$sql="select count(*) from ".TB_PREFIX."menu where menuName='".$menuName."'";
	if(intval($db->get_var($sql)) > 0)
	return true;
	else
	return false;
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		if(empty($value))$value=0;
		$sql ='update '.TB_PREFIX.'menu set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect('?m=system&s=managechannel&cid='.$request['cid'].'&l='.$request['l'].'');
}
?>