<?php
require(ABSPATH.'/inc/class.zip.php');
require_once(ABSPATH.'/inc/class.upload.php');
checkme(9);
function index()
{
	
}
function upload_template()
{
	global $error,$request;
	//unzip(ABSPATH.'/'.SKINROOT,$_FILES["upfile"][tmp_name],$_FILES["upfile"][name])==1;

	//把模版先暂时上传在系统根目录的TEMP文件夹里，解决safe_mode On时无法上传在环境文件夹下
	//suny.2008.10.16
	$upload = new Upload(10000,'/temp/');
	$fileName = $upload->SaveFile('upfile');
	if(file_exists(ABSPATH.'/temp/'.$fileName))
	{
		if(unzip(ABSPATH.'/'.SKINROOT,ABSPATH.'/temp/'.$fileName,ABSPATH.'/temp/'.$fileName)==1)
		echo '<script language="javascript">alert("安装成功!");history.back(1);</script>';
		elseif(unzip(ABSPATH.'/'.SKINROOT,ABSPATH.'/temp/'.$fileName,ABSPATH.'/temp/'.$fileName)==0)
		echo '<script language="javascript">alert("安装失败!");history.back(1);</script>';
		else
		echo '<script language="javascript">alert("此文件不是ZIP格式!");history.back(1);</script>';
	}
	else
	{
		echo '<script language="javascript">alert("文件上传失败!");history.back(1);</script>';
	}
	redirect('?m=system&s=changeskin&l='.$request['l'].'');
}

function changeSkin()
{
	global $request;
	change_skin_by_name($request['skin']);
	redirect('?m=system&s=changeskin&l='.$request['l'].'');
}

function delete() 
{
	global $request;
	del_dir(ABSPATH.'/'.SKINROOT.'/'.$request['skinname']);
	redirect('?m=system&s=changeskin&l='.$request['l'].'');
}



//-----------------------------------------------------功能函数---------------------------------------//
function del_dir($dir) {
	$dh=opendir($dir);
	while ($file=readdir($dh)) {
		if($file!="." && $file!="..") {
			$fullpath=$dir."/".$file;
			if(!is_dir($fullpath)) {
				unlink($fullpath);
			} else {
				del_dir($fullpath);
			}
		}
	}

	closedir($dh);

	if(rmdir($dir)) {
		return true;
	} else {
		return false;
	}
}
function change_skin_by_name($skinStr)
{
	//echo ABSPATH.'/skins/'.$skinStr.'/config.xml';
	//exit;
	if(file_exists(ABSPATH.'/skins/'.$skinStr.'/config.xml'))
	{
		$tempStr = file2String(ABSPATH.'/config/dt-config.php');
		$newStr = preg_replace("/'STYLENAME','.*?'/i","'STYLENAME','$skinStr'",$tempStr);

		string2file($newStr,ABSPATH.'/config/dt-config.php');
		chmod(ABSPATH.'/config/dt-config.php', 0666);
		//del_file(ABSPATH.'/skins_c');
		return true;
	}
	else 
	{
		return false;
	}
}

function get_directory($dirstr)
{
	$skinsArr = array();
	$handle=opendir($dirstr);  //这里输入其它路径
	while (false !== ($file = readdir($handle)))
	{
		if ($file != "." && $file != "..") {
			if(is_dir($dirstr.$file))
			{
				$skinsArr[] = $file;
			}
		}
	}
	closedir($handle);
	return $skinsArr;
}
/**
 * 获取模板文件中的网站样式名称
 *
 * @return string
 */
function get_skin_config()
{
	$tempStr = file2String(ABSPATH.'/config/dt-config.php');
	preg_match("/'STYLENAME','(.*?)'/i",$tempStr, $matches);
	return $matches[1];
}
/**
 * 获取模板文件的信息
 * 返回数组
 *
 * @param array $tArr
 */
function get_skins_info($tArr)
{
	global $request;
	$configs=array();
	$arraynum=0;
	foreach ($tArr as $o)
	{
		$xmlFilePath= ABSPATH."/skins/".$o.'/config.xml';
		if(file_exists($xmlFilePath))
		{
			$doc=new DOMDocument();
			$doc = new DOMDocument(null,'utf-8');

			$doc->load($xmlFilePath);
			$configs[$arraynum]['path']=$o;
			$configs[$arraynum]['pic']=ROOTPATH.'/skins/'.$o.'/'.$doc->getElementsByTagName('pic')->item(0)->nodeValue;
			$configs[$arraynum]['siteName']=$doc->getElementsByTagName('SiteName')->item(0)->nodeValue;
			$configs[$arraynum]['FileName']=$doc->getElementsByTagName('FileName')->item(0)->nodeValue;
			$configs[$arraynum]['SiteMaster']=$doc->getElementsByTagName('SiteMaster')->item(0)->nodeValue;
			$configs[$arraynum]['PubDate']=$doc->getElementsByTagName('PubDate')->item(0)->nodeValue;
			$configs[$arraynum]['summary']=$doc->getElementsByTagName('summary')->item(0)->nodeValue;
		}
		$arraynum=$arraynum+1;
	}
	$useSkin=get_skin_config();
	foreach ($configs as $entry)
	{
		if($useSkin==$entry['path'])
		{
			echo '<dl class="u_box">';
		}
		else
		{
			echo '<dl class="skinbox">';
		}
		echo '<dd><a href="./?m=system&s=changeskin&a=changeskin&skin='.$entry['path'].'&l='.$request['l'].'" onmouseover="ddrivetip(\''.$entry['summary'].'\', \'\', 220)" onmouseout="hideddrivetip()"><img width="160" height="120" src="';
		//echo file_exists(ABSPATH.$entry['pic'])?$entry['pic']:"images/none.jpg";
		echo $entry['pic'];
		echo '" /></a></dd>';
		echo '<dd>名称：'.$entry['siteName'].'</dd>';
		echo '<dd>标识：'.$entry['FileName'].'</dd>';
		echo '<dd>作者：'.$entry['SiteMaster'].'</dd>';
		echo '<dd>日期：'.$entry['PubDate'].'</dd>';
		echo '<dd><a href="?m=system&s=changeskin&a=delete&skinname='.$entry['path'].'&l='.$request['l'].'" onclick="return confirm(\'您确认要删除本模板?\n一旦删除，此模板将不可恢复。\');">【删除】</a>&nbsp;&nbsp;<a href="./?m=system&s=changeskin&a=changeskin&skin='.$entry['path'].'&l='.$request['l'].'" onmouseover="ddrivetip(\'使用此模版\', \'\', 60)" onmouseout="hideddrivetip()">【使用】</a></dd>';
		echo '</dl>';
	}
}

function del_file($dir) {

	$dh=opendir($dir);

	while ($file=readdir($dh)) {
		if($file!="." && $file!="..") {
			$fullpath=$dir."/".$file;
			if(!is_dir($fullpath)) {
				unlink($fullpath);
			} else {
				delFile($fullpath);
			}
		}
	}
 
	closedir($dh);
}
?>
