<?php
//数据库配置字段
define('DB_HOSTNAME','localhost');
define('DB_USER','root');
define('DB_PASSWORD','Nb_DB*2!#$');
define('DB_DBNAME','wushi');
define('TB_PREFIX','ws_');
//模板配置字段
define('SITENAME','乌石拉链企业网站');
define('SITESUMMARY','乌石拉链企业');
define('UPLOADPATH','/upload/');
define('TIMEZONENAME','8');
define('STYLENAME','model_813');
define('URLREWRITE',false);
define('COMMENTAUDITING',false);
define('SITELANGUAGE','cn');
define('SKINROOT','skins');
//编辑器
define('EDITORSTYLE','fckeditor');
//默认设置
define('ABSPATH',dirname(__FILE__).'/../');
define('ROOTPATH',''); //类似于 /xmlol (注意后面不带 /)
define('VERSION','3.8.90215/cn/en');
$fileIndex 	= 'index.html';
$fileCommon = 'common.html';
//首页调用模板图片的默认尺寸
define('articleWidth','80');
define('articleHight','80');
define('listWidth','121');
define('listHight','121');
define('productWidth','160');
define('productHight','80');
define('pictureWidth','80');
define('pictureHight','80');
//内容页列表模块单页显示默认条数
define('listCount','12');
define('pictureCount','12');
define('productCount','6');
define('videoCount','12');
define('guestbookCount','10');
define('jobsCount','2');
define('calllistCount','6');
define('downloadCount','10');
define('solutionsCount','8');

function get_skin_root()
{
	return ROOTPATH.'/'.SKINROOT.'/'.STYLENAME.'/'.$_SESSION[TB_PREFIX.'dtLanguage'].'/';
}
function get_abs_skin_root()
{
	return ABSPATH.'/'.SKINROOT.'/'.STYLENAME.'/'.$_SESSION[TB_PREFIX.'dtLanguage'].'/';
}
function get_root_path()
{
	return ROOTPATH;
}
?>