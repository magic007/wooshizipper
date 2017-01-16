<?php
function getLocation()
{
	global $pageInfo,$db,$request;
	$request['l']=='en'||(empty($request['l'])&&SITELANGUAGE=='en')?$home='Home':$home='首 页';
	if($request['p'])
	{
	$model_info = get_model_info($request['p']);
	if($model_info['deep'])
	{
		$pmodel_info = get_model_info($model_info['parentId']);
	return ' <a href="./">'.$home.'</a> → <a href="./?p='.$pmodel_info['id'].'">'.$pmodel_info['title'].'</a> → '.$model_info['title'];
	}
	else {
		return ' <a href="./">'.$home.'</a> → '.$model_info['title'];
	}
	}
	else 
	{
		return $home ;
	}
}
function get_model_info($id)
{
	global $db;
	return $db->get_row("select * from ".TB_PREFIX."menu where id=$id",ARRAY_A);
}
?>