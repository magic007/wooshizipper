<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITENAME ?>-后台控制</title>
<link href="../inc/css/data_table.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="../inc/js/data_table.js"></script>
<script language="JavaScript" type="text/javascript" src="../inc/js/deepthroat.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body onLoad="init();">
<div id="dhtmltooltip"></div>
<script language="JavaScript" type="text/javascript" src="../inc/js/tips.js"></script>
<SCRIPT language="JavaScript" type="text/javascript" src="../inc/js/mt_dropdownC.js"></SCRIPT>
<SCRIPT language="JavaScript" type="text/javascript" src="../inc/js/mt_dropdown_initialize.js"></SCRIPT>
<script type="text/javascript">
<!--
document.onmousemove=positiontip;
//-->
</script>
<div id="wrapper">
	<div id="top">
		<h1><?php echo SITENAME; ?></h1>
		<ul>
		<?php if($_SESSION[TB_PREFIX.'admin_roleId']>8){ ?>
		   <li id="yellowLink"><a href="index.php?m=system&s=managechannel&l=<?php echo $request['l']?$request['l']:SITELANGUAGE ?>" class="constr" id="lm1">构建网站</a></li>
		   <?php } ?>
		   <li><a href="index.php?m=system&s=userinfo&a=edit&cid=<?php echo $_SESSION[TB_PREFIX.'admin_userID'] ?>&l=<?php echo $request['l'] ?>">个人资料</a> |</li>
		   <li><a href="login.php?act=logout">登出</a></li>
		</ul>
		<h2><a href="<?php echo ROOTPATH ?>/" class="browse" target="_blank">浏览网站</a></h2>
		<h3><a href="index.php?l=cn" class="browse">中文网站</a></h3>
		<h4><a href="index.php?l=en" class="browse">英文网站</a></h4>
	</div>
	<div id="nav">
		<ul>
			<?php if($request['l']=='cn') 
			{
				require_once('cn_nav.php');
			}
			elseif($request['l']=='en')
			{
				require_once('en_nav.php');
			}
			elseif(empty($request['l'])&&(SITELANGUAGE=='cn'))
			{
				require_once('cn_nav.php');
			}
			elseif(empty($request['l'])&&(SITELANGUAGE=='en'))
			{
				require_once('en_nav.php');
			}
		?>
		</ul>
		<SCRIPT language="JavaScript" type="text/javascript" src="<?php echo $request['l']=='cn'||empty($request['l'])&&(SITELANGUAGE=='cn')?cn:en;?>_menu_content.js"></SCRIPT>
	</div>
<div id="container">
<div class="location">当前位置:<?php echo getLocation() ?></div>