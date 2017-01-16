<?php
define('REGED',false);
// 赋值函数
function data($key,$return_switch=false)
{
	$keyarr = explode('.',$key);
	if($return_switch)
	{
		eval('global $data_'.$key.';'.'return $data_'.$key.';');

	}
	else
	{
		switch(count($keyarr))
		{
			case 1:
				eval('global $data_'.$keyarr[0].';'.'echo $data_'.$keyarr[0].';');
				break;
			case 2:
				eval('global $data_'.$keyarr[0].';'.'echo $data_'.$keyarr[0].'->'.$keyarr[1].';');
				break;
		}

	}
}
function setdata($key,$d_value)
{
	eval('global $data_'.$key.';$data_'.$key.' = $d_value;');
}
function ewebeditor($style,$name,$content='')
{
	switch($style)
	{
		case 'ewebeditor':
			echo '<textarea name="'.$name.'" style="display:none">'.$content.'</textarea><IFRAME ID="dtEditor1" src="../webeditor/?id='.$name.'&style=coolblue" frameborder=0 height=400 scrolling=no style="width:95%"></IFRAME>';
			break;
		case 'fckeditor':
			$oFCKeditor 		= new FCKeditor($name) ;
			$oFCKeditor->Value 	= $content;
			$oFCKeditor->Create() ;
			break;
	}
}
?>