<?php
////````////
//得到栏目的父ID
function getParentId($id)
{
	global $db;
	if(isset($id))
	{
		$sql="select parentId from ".TB_PREFIX."menu where id=$id limit 1";
		$parentId=$db->get_var($sql);
		return $parentId==0?$id:$parentId;
	}
	else
	{
		return $id;
	}
}

//得到栏目的父ID
function getParentIds($id)
{
	global $db;
	if(isset($id))
	{
		$sql="select parentId from ".TB_PREFIX."menu where id=$id limit 1";
		$parentId=$db->get_var($sql);
		return $parentId;
	}
	else
	{
		return $id;
	}
}

function main_menu($str='<li>||</li>',$select_str='<li class="selected">||</li>',$span_style='')
{
	global $db,$params;
	if($_SESSION[TB_PREFIX.'dtLanguage'])
		$menu = $db->get_results("select * from ".TB_PREFIX."menu where deep = 0 and isHidden=0 and dtLanguage='".$_SESSION[TB_PREFIX.'dtLanguage']."' order by ordering");
	if(!empty($str))
	{
		$strarr= explode('||',$str);
		if(empty($select_str))
		$select_str=$str;
		$select_strarr = explode('||',$select_str);
	}

	if($menu)
	{
		foreach ($menu as $o)
		{
			if(URLREWRITE)
			{
				if(empty($span_style))
				{
					if($o->isExternalLinks=='0')
					{
						if($params['id']==$o->id)
						echo $select_strarr[0].'<a href="/html/'.$o->menuName.'/">'.$o->title."</a>".$select_strarr[1];
						else
						echo $strarr[0].'<a href="/html/'.$o->menuName.'/">'.$o->title."</a>".$strarr[1];
					}
					elseif($o->isExternalLinks=='1')
					{
						echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$o->title."</a>".$strarr[1];
					}
				}
				else
				{
					if($o->isExternalLinks=='0')
					{
						if($params['id']==$o->id)
						echo $select_strarr[0].'<a href="/html/'.$o->menuName.'/">'.$span_style.$o->title."</span></a>".$select_strarr[1];
						else
						echo $strarr[0].'<a href="/html/'.$o->menuName.'/">'.$span_style.$o->title."</span></a>".$strarr[1];
					}
					elseif($o->isExternalLinks=='1')
					{
						echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$span_style.$o->title."</span></a>".$strarr[1];
					}
				}
				
			}
			else
			{
				if(empty($span_style))
				{
					if($o->isExternalLinks=='0')
					{
						if($params['id']==$o->id||getParentId($params['id'])==$o->id) {
							echo $select_strarr[0] ?><a href="index.php?p=<?php echo $o->id; ?>" class="current"><?php echo $o->title; ?></a><div class="subnav"><?php 
								call_sub_menu($o->id); ?></div><?php echo $select_strarr[1];}
						else{
						echo $strarr[0]?><a href="index.php?p=<?php echo $o->id; ?>"><?php echo $o->title ?></a><div class="subnav"><?php call_sub_menu($o->id) ?></div><?php echo $strarr[1]; }
					}
					elseif($o->isExternalLinks=='1')
					{
						echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$o->title."</a>".$strarr[1];
					}
				}
				else
				{
					if($o->isExternalLinks=='0')
					{
						if($params['id']==$o->id)
						echo $select_strarr[0].'<a href="index.php?p='.$o->id.'">'.$span_style.$o->title."</span></a>".$select_strarr[1];
						else
						echo $strarr[0].'<a href="index.php?p='.$o->id.'">'.$span_style.$o->title."</span></a>".$strarr[1];
					}
					elseif($o->isExternalLinks=='1')
					{
						echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$span_style.$o->title."</span></a>".$strarr[1];
					}
				}
			}
		}
	}
	else
	echo 'No channel';
}
function sub_menu($str='<li>||</li>',$select_str='<li class="selected">||</li>',$span_style='')
{
	global $db,$params,$menu_arr;
	$pid = getParentId($params['id']);
$pids= getParentIds($params['id']);
	if(!empty($str))
	{
		$strarr= explode('||',$str);
		if(empty($select_str))
		$select_str=$str;
		$select_strarr = explode('||',$select_str);
	}
	
	if(function_exists(ex_sub_menu))
	{
		ex_sub_menu($strarr,$select_strarr,$pid,$params['cid'],$span_style='',$params['id']);
	}
	else
	{
		$menu = $db->get_results("select * from ".TB_PREFIX."menu where deep = 1 and isHidden=0 and parentId = $pid order by ordering");
		if($menu)
		{
			$i = 0;
			foreach ($menu as $o)
			{
				if(URLREWRITE)
				{
					if(empty($span_style))
					{
						if($o->isExternalLinks=='0')
						{
							if($params['id']==$o->id)
							echo $select_strarr[0].'<a href="/html/'.$o->menuName.'/" >'.$o->title."</a>".$select_strarr[1];
							else
							echo $strarr[0].'<a href="/html/'.$o->menuName.'/">'.$o->title."</a>".$strarr[1];
						}
						elseif($o->isExternalLinks=='1')
						{
							echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$o->title."</a>".$strarr[1];
						}
					}
					else
					{
						if($o->isExternalLinks=='0')
						{
							if($params['id']==$o->id)
							echo $select_strarr[0].'<a href="/html/'.$o->menuName.'/" >'.$span_style.$o->title."</span></a>".$select_strarr[1];
							else
							echo $strarr[0].'<a href="/html/'.$o->menuName.'/">'.$span_style.$o->title."</span></a>".$strarr[1];
						}
						elseif($o->isExternalLinks=='1')
						{
							echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$span_style.$o->title."</span></a>".$strarr[1];
						}
					}
				}
				else
				{
					if(empty($span_style))
					{
						if($o->isExternalLinks=='0')
						{
							if($params['id']==$o->id||(empty($i)&&empty($pids)))
							echo $select_strarr[0].'<a href="index.php?p='.$o->id.'" class="current">'.$o->title."</a>".$select_strarr[1];
							else
							echo $strarr[0].'<a href="index.php?p='.$o->id.'">'.$o->title."</a>".$strarr[1];
						}
						elseif($o->isExternalLinks=='1')
						{
							echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$o->title."</a>".$strarr[1];
						}
						$i++;
					}
					else
					{
						if($o->isExternalLinks=='0')
						{
							if($params['id']==$o->id)
							echo $select_strarr[0].'<a href="index.php?p='.$o->id.'">'.$span_style.$o->title."</span></a>".$select_strarr[1];
							else
							echo $strarr[0].'<a href="index.php?p='.$o->id.'">'.$span_style.$o->title."</span></a>".$strarr[1];
						}
						elseif($o->isExternalLinks=='1')
						{
							echo $strarr[0].'<a target="_blank" href="'.$o->redirectUrl.'">'.$span_style.$o->title."</span></a>".$strarr[1];
						}
					}
				}
			}
		}
	}
}
function call_sub_menu($smId)
{
	global $db,$params,$menu_arr;
	$smId = getParentId($smId);
    $menu = $db->get_results("select title,id from ".TB_PREFIX."menu where deep = 1 and isHidden=0 and parentId = $smId order by ordering");
	if($menu)
	{
		echo "<ul>";
		 foreach ($menu as $o)
		{   echo '<li><a href="index.php?p='.$o->id.'">'.$o->title.'</a></li>';
		}
		echo "</ul>";
	}
}
//判断是否载入评论系统
function isComment()
{
	global $params,$db;
	
	$part_path = ABSPATH.'/skins/'.STYLENAME.'/'.$_SESSION[TB_PREFIX.'dtLanguage'].'/parts/comment_index.php';
	$content_part_path=ABSPATH.'/content/comment/part_index.php';
	
	$sql = "select isComment from ".TB_PREFIX."menu where id=".$params['id'];
	$isComment = $db->get_var($sql);
	if(($isComment == '1' && $params['action'] == 'view') || ($isComment == '1' && $params['model'] == 'article'))
	{
		if(file_exists($part_path))
		require_once($part_path);
		else 
		require_once($content_part_path);
	}
}
function get_location($str='>>')
{
	global $db,$params,$menu_arr;
	$_str = '';
	if ($menu_arr['type'] == 'product' && $params['cid'] > 0)
	{
		$rows = $db->get_results('select title from '.TB_PREFIX.'product_category where id ="' . $params['cid'].'"');
		$m = array_shift($rows);
		$_str = $str.'<a href="?p='.$params['id'].'&c='.$params['cid'].'">'.$m->title.'</a>';
	}

	if(!empty($menu_arr['id']))
	{
		if(URLREWRITE)
		{
			$temp_str 	= '<a href="/'.get_root_path().'">首页</a>';
			if($menu_arr['deep']=='0')
			{
				$temp_str   .= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';
			}
			if($menu_arr['deep']=='1')
			{
				$tempParentId=$menu_arr['parentId'];
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$tempParentId order by ordering");
				$temp_str   .= $str.'<a href="/html/'.$menu->menuName.'/">'.$menu->title.'</a>';
				$temp_str   .= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';
			}
			if($menu_arr['deep']=='2')
			{
				$tempParentId=$menu_arr['parentId'];
				$menusub 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 1 and id=$tempParentId order by ordering");
				$pid=getParentId($menusub->id);
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$pid order by ordering");
				$temp_str.= $str.'<a href="/html/'.$menu->menuName.'/">'.$menu->title.'</a>';
				$temp_str.= $str.'<a href="/html/'.$menusub->menuName.'/">'.$menusub->title.'</a>';
				$temp_str.= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';
			}
		}
		else
		{
			$temp_str 	= '<a href="./">首页</a>';
			if($menu_arr['deep']=='0')
			{
				$temp_str   .= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';
			}
			if($menu_arr['deep']=='1')
			{
				$tempParentId=$menu_arr['parentId'];
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$tempParentId order by ordering");
				$temp_str   .= $str.'<a href="index.php?p='.$menu->id.'">'.$menu->title.'</a>';
				$temp_str   .= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';
			}
			if($menu_arr['deep']=='2')
			{
				$tempParentId=$menu_arr['parentId'];
				$menusub 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 1 and id=$tempParentId order by ordering");
				$pid=getParentId($menusub->id);
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$pid order by ordering");
				$temp_str.= $str.'<a href="index.php?p='.$menu->id.'">'.$menu->title.'</a>';
				$temp_str.= $str.'<a href="index.php?p='.$menusub->id.'">'.$menusub->title.'</a>';
				$temp_str.= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';
			}
		}
	}
	return $temp_str . $_str;
}
function get_en_location($str='>>')
{
	global $db,$params,$menu_arr;
	if ($menu_arr['type'] == 'product' && $params['cid'] > 0)
	{
		$rows = $db->get_results('select title from '.TB_PREFIX.'product_category where id ="' . $params['cid'].'"');
		$m = array_shift($rows);
		$_str = $str.'<a href="?p='.$params['id'].'&c='.$params['cid'].'">'.$m->title.'</a>';
	}
	if(!empty($menu_arr['id']))
	{
		if(URLREWRITE)
		{
			$temp_str 	= '<a href="/'.get_root_path().'">Home</a>';
			if($menu_arr['deep']=='0')
			{
				$temp_str   .= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';//�?级栏�?
			}
			if($menu_arr['deep']=='1')
			{
				$tempParentId=$menu_arr['parentId'];
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$tempParentId order by ordering");
				$temp_str   .= $str.'<a href="/html/'.$menu->menuName.'/">'.$menu->title.'</a>';//�?级栏�?
				$temp_str   .= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';//二级栏目
			}
			if($menu_arr['deep']=='2')
			{
				$tempParentId=$menu_arr['parentId'];
				$menusub 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 1 and id=$tempParentId order by ordering");
				$pid=getParentId($menusub->id);
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$pid order by ordering");
				$temp_str.= $str.'<a href="/html/'.$menu->menuName.'/">'.$menu->title.'</a>';//�?级栏�?
				$temp_str.= $str.'<a href="/html/'.$menusub->menuName.'/">'.$menusub->title.'</a>';//二级栏目
				$temp_str.= $str.'<a href="/html/'.$menu_arr['menuName'].'/">'.$menu_arr['title'].'</a>';//三级栏目
			}
		}
		else
		{
			$temp_str 	= '<a href="./">Home</a>';
			if($menu_arr['deep']=='0')
			{
				$temp_str   .= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';//�?级栏�?
			}
			if($menu_arr['deep']=='1')
			{
				$tempParentId=$menu_arr['parentId'];
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$tempParentId order by ordering");
				$temp_str   .= $str.'<a href="index.php?p='.$menu->id.'">'.$menu->title.'</a>';//�?级栏�?
				$temp_str   .= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';//二级栏目
			}
			if($menu_arr['deep']=='2')
			{
				$tempParentId=$menu_arr['parentId'];
				$menusub 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 1 and id=$tempParentId order by ordering");
				$pid=getParentId($menusub->id);
				$menu 		= $db->get_row("select * from ".TB_PREFIX."menu where deep = 0 and id=$pid order by ordering");
				$temp_str.= $str.'<a href="index.php?p='.$menu->id.'">'.$menu->title.'</a>';//�?级栏�?
				$temp_str.= $str.'<a href="index.php?p='.$menusub->id.'">'.$menusub->title.'</a>';//二级栏目
				$temp_str.= $str.'<a href="index.php?p='.$menu_arr['id'].'">'.$menu_arr['title'].'</a>';//三级栏目
			}
		}
	}
	return $temp_str . $_str;
}
function get_subMenu_name()
{
	global $db,$params;
	$sql = "SELECT title FROM ".TB_PREFIX."menu WHERE id=".$params['id'];
	if(URLREWRITE)
	return '<a href="/html/">'.$db->get_var($sql).'</a>';
	else
	return '<a href="/?p='.$params['id'].'">'.$db->get_var($sql).'</a>';
}
//urlrewrite 后根据返回的字符串去查找相应ID
function getIdByFile($file)
{
	global $db;
	$sql="select id from ".TB_PREFIX."menu where menuName='$file'";
	return $db->get_var($sql);
}
//urlrewrite 后根据返回的ID去查找相应menuName
function get_menuName($id)
{
	global $db;
	if($id==0)
	return 'list';
	else
	return $db->get_var("select menuName from ".TB_PREFIX."menu where id=$id");
}
/*获取频道栏目名称*/
function get_channel_name($id)
{
	global $db;
	if($id)
	{
		$result=(array)$db->get_row("select * from ".TB_PREFIX."menu where id=$id");
		return $result['title'];
	}
	else
	return null;
}
/*获取当前栏目或页面标题以及站点名称组成当前页面标题，用在<title></title>标记中，利于搜索引擎捕捉当前页面标题内容*/
function get_title_name($p,$r)
{
	global $db,$request;
	$p = intval($p);
	$r = intval($r);
	if($p)
	{
		$result=(array)$db->get_row("select * from ".TB_PREFIX."menu where id=$p");
		$type=$result['type'];
	}
	if(intval($r)>0)
	{
		if($type=='list')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."list where id=$r");
			return $channel['title'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='product'||$type=='productlist')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			return $channel['name'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='jobs')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			return $channel['jobName'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='download')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			return $channel['softwareName'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='shopping')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."shopping_product where id=$r");
			return $channel['name'].' '.$result['title'].' '.SITENAME;
		}
		else
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			return $channel['title'].' '.$result['title'].' '.SITENAME;
		}
	}
	else
	{
		if($p!='')
		{
			return $result['title'].' '.SITENAME;
		}
		else
			return SITENAME;
	}
}
/*获取当前栏目或页面的�?介，用在当前页面<meta name="description" content="" />标记中，利于搜索引擎捕捉当前页面内容�?�?*/
function get_description_name($p,$r)
{
	global $db,$request;
	$p = intval($p);
	$r = intval($r);
	if($p)
	{
		$result=(array)$db->get_row("select * from ".TB_PREFIX."menu where id=$p");
		$type=$result['type'];
	}
	if(intval($r)>0)
	{
		if($type=='list')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."list as a,".TB_PREFIX."list_content as b where a.guid=b.guid and a.id=$r");
			if(!empty($channel['tags']))
			return $channel['tags'].' '.cnSubstr(strip_tags($channel['content']),0,150);
			elseif(!empty($channel['summary']))
			return $channel['summary'];
			elseif(!empty($channel['content']))
			return cnSubstr(strip_tags($channel['content']),0,300);
			else
			return $channel['title'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='product'||$type=='productlist')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			if(!empty($channel['summary']))
			return $channel['summary'];
			elseif(!empty($channel['content']))
			return cnSubstr(strip_tags($channel['content']),0,300);
			else
			return $channel['name'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='jobs')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			if(!empty($channel['jobName']) || !empty($channel['summary']))
			return $channel['jobName'].','.cnSubstr(strip_tags($channel['summary']),0,300);
			else
			return $channel['jobName'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='download')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			if(!empty($channel['softwareName']) || !empty($channel['introduce']))
			return $channel['softwareName'].','.cnSubstr(strip_tags($channel['introduce']),0,300);
			else
			return $channel['softwareName'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='shopping')
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."shopping_product where id=$r");
			if(!empty($channel['name']) || !empty($channel['summary']))
			return $channel['name'].','.cnSubstr(strip_tags($channel['summary']),0,300);
			else
			return $channel['name'].' '.$result['title'].' '.SITENAME;
		}
		else
		{
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where id=$r");
			if(!empty($channel['tags']))
			return $channel['tags'];
			elseif(!empty($channel['summary']))
			return $channel['summary'];
			elseif(!empty($channel['content']))
			return cnSubstr(strip_tags($channel['content']),0,300);
			else
			return $channel['title'].' '.$result['title'].' '.SITENAME;
		}
	}
	else
	{
		if($type=='article')
		{
			if(intval($request['mdtp'])>0)
			$request['mdtp']=intval($request['mdtp'])-1;
			else
			$request['mdtp']=intval($request['mdtp']);
			
			$channel=(array)$db->get_row("select * from ".TB_PREFIX."$type where channelId=$p and pageId=".$request['mdtp']);
			if(!empty($channel['summary']))
			return $channel['summary'];
			elseif(!empty($channel['content']))
			return cnSubstr(strip_tags($channel['content']),0,300);
			else
			return $channel['name'].' '.$result['title'].' '.SITENAME;
		}
		else if($type=='jobs')
		{
			$channel=(array)$db->get_results("select * from ".TB_PREFIX."$type where channelId=$p");
			if(count($channel)>0)
			{
				$tempJobName=null;
				$tempJobName='招聘 招募 ';
				foreach($channel as $o)
				{
					$tempJobName = $tempJobName.$o->jobName.' ';
				}
				return $tempJobName.' job jobs Recruitment';
			}			
			else
			{
				return $result['title'].' '.SITENAME;
			}
		}
		else if($type=='guestbook')
		{
			$channel=(array)$db->get_results("select * from ".TB_PREFIX."$type where channelId=$p order by id desc limit 3");
			if(count($channel)>0)
			{
				$tempJobName=null;
				$tempJobName='用户留言/反馈/回馈 ';
				foreach($channel as $o)
				{
					$tempJobName = $tempJobName.$o->name.' '.$o->content.' '.$o->content1.' ';
				}
				return $tempJobName.' guestbook bbs';
			}			
			else
			{
				return $result['title'].' '.SITENAME;
			}
		}
		else
			return $result['title'].' '.SITENAME;
	}
}
?>