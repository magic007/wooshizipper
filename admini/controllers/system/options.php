<?php
checkme(9);
function index()
{
}
function save()
{
	global $request;
	if(filesize(ABSPATH.'/config/dt-config.php')>0)
	{
		if (empty($request['urlrewrite']))
		{
			$request['urlrewrite'] = 'false';
		}
		if (empty($request['commentauditing']))
		{
			$request['commentauditing'] = 'false';
		}
		$tempStr = file2String(ABSPATH.'/config/dt-config.php');
		$tempStr = preg_replace("/'SITENAME','.*?'/i","'SITENAME','".$request['sitename']."'",$tempStr);
		$tempStr = preg_replace("/'SITESUMMARY','.*?'/i","'SITESUMMARY','".$request['sitesummary']."'",$tempStr);
		$tempStr = preg_replace("/'UPLOADPATH','.*?'/i","'UPLOADPATH','".$request['uploadpath']."'",$tempStr);
		$tempStr = preg_replace("/'TIMEZONENAME','.*?'/i","'TIMEZONENAME','".$request['timeZoneName']."'",$tempStr);
		$tempStr = preg_replace("/'ROOTPATH','.*?'/i","'ROOTPATH','".$request['rootpath']."'",$tempStr);
		$tempStr = preg_replace("/\('URLREWRITE',.*?\)/i","('URLREWRITE',".$request['urlrewrite'].")",$tempStr);
		$tempStr = preg_replace("/\('SITELANGUAGE',.*?\)/i","('SITELANGUAGE','".$request['SITELANGUAGE']."')",$tempStr);
		$tempStr = preg_replace("/\('COMMENTAUDITING',.*?\)/i","('COMMENTAUDITING',".$request['commentauditing'].")",$tempStr);
		$tempStr = preg_replace("/\('EDITORSTYLE',.*?\)/i","('EDITORSTYLE','".$request['editorstyle']."')",$tempStr);
		
		$tempStr = preg_replace("/\('articleWidth',.*?\)/i","('articleWidth','".$request['articleWidth']."')",$tempStr);
		$tempStr = preg_replace("/\('articleHight',.*?\)/i","('articleHight','".$request['articleHight']."')",$tempStr);
		$tempStr = preg_replace("/\('listWidth',.*?\)/i","('listWidth','".$request['listWidth']."')",$tempStr);
		$tempStr = preg_replace("/\('listHight',.*?\)/i","('listHight','".$request['listHight']."')",$tempStr);
		$tempStr = preg_replace("/\('productWidth',.*?\)/i","('productWidth','".$request['productWidth']."')",$tempStr);
		$tempStr = preg_replace("/\('productHight',.*?\)/i","('productHight','".$request['productHight']."')",$tempStr);
		$tempStr = preg_replace("/\('pictureWidth',.*?\)/i","('pictureWidth','".$request['pictureWidth']."')",$tempStr);
		$tempStr = preg_replace("/\('pictureHight',.*?\)/i","('pictureHight','".$request['pictureHight']."')",$tempStr);
		
		$tempStr = preg_replace("/\('listCount',.*?\)/i","('listCount','".$request['listCount']."')",$tempStr);
		$tempStr = preg_replace("/\('pictureCount',.*?\)/i","('pictureCount','".$request['pictureCount']."')",$tempStr);
		$tempStr = preg_replace("/\('productCount',.*?\)/i","('productCount','".$request['productCount']."')",$tempStr);
		$tempStr = preg_replace("/\('videoCount',.*?\)/i","('videoCount','".$request['videoCount']."')",$tempStr);
		$tempStr = preg_replace("/\('guestbookCount',.*?\)/i","('guestbookCount','".$request['guestbookCount']."')",$tempStr);
		$tempStr = preg_replace("/\('jobsCount',.*?\)/i","('jobsCount','".$request['jobsCount']."')",$tempStr);
		$tempStr = preg_replace("/\('calllistCount',.*?\)/i","('calllistCount','".$request['calllistCount']."')",$tempStr);
		$tempStr = preg_replace("/\('downloadCount',.*?\)/i","('downloadCount','".$request['downloadCount']."')",$tempStr);
		$tempStr = preg_replace("/\('solutionsCount',.*?\)/i","('solutionsCount','".$request['solutionsCount']."')",$tempStr);
		
		string2file($tempStr,ABSPATH.'/config/dt-config.php');
		chmod(ABSPATH.'/config/dt-config.php', 0666);
		redirect(ROOTPATH.'/admini/?m=system&s=options&l='.$request['l']);
	}
	else
	{
		echo "文件不存在!";
	}
}
?>