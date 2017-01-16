<?php
$model_results = $db->get_results('select type from '.TB_PREFIX.'models_reg');
if($model_results)
foreach ($model_results as $mt)
{
	if(file_exists(ABSPATH.'/content/index/'.$mt->type.'.php'))require_once(ABSPATH.'/content/index/'.$mt->type.'.php');
}

//-------------------功能函数----------------------------
function get_style_file($func_name,$style=0)
{
	$style_file1 = get_abs_skin_root().'index/'.$func_name.'_'.$style.'.php';
	$style_file2 = ABSPATH.'/content/index/style/index_'.$func_name.'_'.$style.'.php';
	return file_exists($style_file1)?$style_file1:$style_file2;
}
function dt_menu($id,$style=0,$strcount=0,$isellipsis=true)
{
	global $db;
	$results=$db->get_results("select * from `".TB_PREFIX."menu`where id=$id");
	if($results)
	{
		foreach($results as $o)
		{
			if(!$isellipsis&&$strcount>0)$o->title=cnSubstr($o->title,0,$strcount-1); //截取标题字数
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)>$strcount)$o->title=cnSubstr($o->title,0,$strcount-1)."..";
			elseif($isellipsis&&$strcount>0&&cnStrLen($o->title)<$strcount)$o->title=$o->title;
			else $o->title=$o->title; //保留完整标
			require(get_abs_skin_root().'index/menu_'.$style.'.php');	
		}
	}
}
?>
