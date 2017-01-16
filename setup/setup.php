<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安装程序--深喉咙企业网站生成系统中英文双语V3.8测试版本</title>
<link href="setup.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
	<div id="head">
		<div id="link">
			<ul>
				<li><a href="http://www.shenhoulong.com" target="_blank">官方网站</a></li>
				<li class="nobg"><a href="http://www.shenhoulong.net" target="_blank">官方论坛</a></li>
			</ul>
		</div>
	</div>
</div>
<?php
if (!file_exists('db-config-sample.php'))
    die('对不起，我需要 db-config-sample.php 这个文件，可是你的目录中没有，你可以重新下载一个试试。');
$configFile = file('db-config-sample.php');

if(!trim($_REQUEST['step']))
{
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span id="selected">安装须知</span></li>
				<li><span>软件许可协议</span></li>
				<li><span>运行环境检测</span></li>
				<li><span>文件权限设置</span></li>
				<li><span>帐号设置</span></li>
				<li class="over"><span>安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">1.安装须知</span>
			<div id="crs">
				<h3>（一）运行环境需求</h3>
				<p>可用的 httpd 服务器（如 Apache，IIS 等）</p> 
				<p>PHP 5.0 及以上 </p>
				<p>Mysql 4.3.x 及以上，建议使用5.0以上</p>
				<h3>（二）程序安装步骤</h3>
				<p>第一步：使用ftp工具中的二进制模式将本软件包里的 deepthroat 目录上传至服务器根目录。</p> 
				<p>第二步：访问 http://yourwebsite/setup/setup.php 进入安装程序，根据安装向导提示完成安装。</p>
				<a href="setup.php?step=1"><img src="images/next.jpg" alt="下一步" border="0" class="step1next" /></a>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php
}
elseif(trim($_GET['step']==1))
{
$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span>安装须知</span></li>
				<li><span id="selected">软件许可协议</span></li>
				<li><span>运行环境检测</span></li>
				<li><span>文件权限设置</span></li>
				<li><span>帐号设置</span></li>
				<li class="over"><span>安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">2.软件许可协议</span>
			<div id="crs">
				<textarea name="summary" cols="70" rows="10" class="txtArea" id="summary">
  深喉咙企业网站生成系统简体中文版使用授权协议 适用于简体中文版用户 

  版权所有 (c) 2002-2008，深喉咙技术在线（郑州）科技有限公司
  保留所有权利。 
	
  感谢您选择  深喉咙企业网站建设产品。希望我们的努力能为您提供一个简洁高效快速和强大的企业网站建设解决方案。 
	
  深喉咙 英文全称为 Deepthroat 中文全称为  深喉咙企业网站生成系统，以下简称 深喉咙。 
	
  深喉咙技术在线（郑州）科技有限公司为 深喉咙 产品的开发商，依法独立拥有 深喉咙 产品著作权。深喉咙技术在线（郑州）科技有限公司网址为 http://www.deepthroat.com.cn，深喉咙官方网站网址为 http://www.deepthroat.com.cn， 深喉咙官方技术论坛讨论区网址为 http://www.shenhoulong.net。 
	
  深喉咙著作权已在中华人民共和国国家版权局注册，著作权受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用深喉咙 软件。 
	
  本授权协议适用且仅适用于 深喉咙 3.x 版本，深喉咙技术在线（郑州）科技有限公司拥有对本授权协议的最终解释权。	
	
  协议许可的权利 
  您可以在完全遵守本最终用户授权协议的基础上，将本软件应用于非商业用途，而不必支付软件版权授权费用。 
  您可以在协议规定的约束和限制范围内修改 深喉咙 源代码(如果被提供的话)或界面风格以适应您的网站要求。 
  您拥有使用本软件构建的论坛中全部会员资料、文章及相关信息的所有权，并独立承担与文章内容的相关法律义务。 
  获得商业授权之后，您可以将本软件应用于商业用途，同时依据所购买的授权类型中确定的技术支持期限、技术支持方式和技术支持内容，自购买时刻起，在技术支持期限内拥有通过指定的方式获得指定范围内的技术支持服务。商业授权用户享有反映和提出意见的权力，相关意见将被作为首要考虑，但没有一定被采纳的承诺或保证。 
	
  协议规定的约束和限制 
  未获商业授权之前，不得将本软件用于商业用途（包括但不限于企业网站、经营性网站、以营利为目或实现盈利的网站）。购买商业授权请登陆http://www.deepthroat.com.cn参考相关说明，也可以致电0371-66052229了解详情。 
  不得对本软件或与之关联的商业授权进行出租、出售、抵押或发放子许可证。 
  无论如何，即无论用途如何、是否经过修改或美化、修改程度如何，只要使用 深喉咙 的整体或任何部分，未经书面许可，论坛页面页脚处的 深喉咙 名称和深喉咙技术在线（郑州）科技有限公司下属网站（http://www.deepthroat.com.cn、http://www.deepthroat.com.cn 或 http://www.shenhoulong.net） 的链接都必须保留，而不能清除或修改。 
  禁止在 深喉咙 的整体或任何部分基础上以发展任何派生版本、修改版本或第三方版本用于重新分发。 
  如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回，并承担相应法律责任。 
	
  有限担保和免责声明 
  本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的。 
  用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。 
  深喉咙技术在线（郑州）科技有限公司不对使用本软件构建的论坛中的文章或信息承担责任。 
  有关 深喉咙 最终用户授权协议、商业授权与技术服务的详细内容，均由 深喉咙 官方网站独家提供。深喉咙技术在线（郑州）科技有限公司拥有在不事先通知的情况下，修改授权协议和服务价目表的权力，修改后的协议或价目表对自改变之日起的新授权用户生效。 
	
  电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 深喉咙，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
				</textarea>
				<a href="setup.php"><img src="images/back.jpg" alt="上一步" border="0" class="back" /></a>
				<a href="setup.php?step=2"><img src="images/next.jpg" alt="下一步" border="0" class="next" /></a>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php }
elseif(trim($_GET['step']==2))
{
$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
$PHP_GD = '';
if(extension_loaded('gd'))
{
	if(function_exists('imagepng')) $PHP_GD .= 'png';
	if(function_exists('imagejpeg')) $PHP_GD .= ' jpg';
	if(function_exists('imagegif')) $PHP_GD .= ' gif';
}
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span>安装须知</span></li>
				<li><span>软件许可协议</span></li>
				<li><span id="selected">运行环境检测</span></li>
				<li><span>文件权限设置</span></li>
				<li><span>帐号设置</span></li>
				<li class="over"><span>安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">3.运行环境检测</span>
			<div id="crs">
				<table width="100%" cellpadding="0" cellspacing="0" class="table_list">
                  <tr>
                    <th>检查项目</th>
                    <th>当前环境</th>
                    <th>建议环境</th>
                    <th>功能影响</th>
                  </tr>
                  <tr>
                    <td>操作系统</td>
                    <td><?php echo php_uname();?></td>
                    <td>Windows_NT/Linux/Freebsd</td>
                    <td><span class="yellow">√</span></td>
                  </tr>
                  <tr>
                    <td>web 服务器</td>
                    <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
                    <td>Apache/IIS</td>
                    <td><span class="yellow">√</span></td>
                  </tr>
                  <tr>
                    <td>php 版本</td>
                    <td><?php echo phpversion();?></td>
                    <td>php 5.0 及以上</td>
                    <td><?php if(phpversion() >= '5.0.0'){ ?><span class="yellow">√<?php }else{ ?><span class="red">无法安装</span><?php }?></td>
                  </tr>
                  <tr>
                    <td>mysql 扩展</td>
                    <td><?php if(extension_loaded('mysql')){ ?>√<?php }else{ ?>×<?php }?></td>
                    <td>建议开启</td>
                    <td><?php if(extension_loaded('mysql')){ ?><span class="yellow">√</span><?php }else{ ?><span class="red">无法安装</span><?php }?></td>
                  </tr>
                  <tr>
                    <td>gd 扩展</td>
                    <td><?php if($PHP_GD){ ?>√ （支持 <?php echo $PHP_GD;?>）<?php }else{ ?>×<?php }?></td>
                    <td>建议开启</td>
                    <td><?php if($PHP_GD){ ?><span class="yellow">√</span><?php }else{ ?><span class="red">不支持缩略图和水印</span><?php }?></td>
                  </tr>
                </table>
				<a href="setup.php?step=1"><img src="images/back.jpg" alt="上一步" border="0" class="back" /></a>
				<a href="setup.php?step=3"><img src="images/next.jpg" alt="下一步" border="0" class="next" /></a>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php
}
elseif(trim($_GET['step']==3))
{
$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span>安装须知</span></li>
				<li><span>软件许可协议</span></li>
				<li><span>运行环境检测</span></li>
				<li><span id="selected">文件权限设置</span></li>
				<li><span>帐号设置</span></li>
				<li class="over"><span>安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">4.文件权限设置</span>
			<div id="crs">
				<table class="tb" style="margin:20px 0 20px 55px;width:90%;">
				<tr><th align="left">目录文件</th><th align="left">所需状态</th><th align="left">当前状态</th></tr>
				<tr><td>/config/dt-config.php</td><td class="right">可写</td><?php echo is_writable('../config/dt-config.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/inc/function.php</td><td class="right">可写</td><?php echo is_writable('../inc/function.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/inc/class.database.php</td><td class="right">可写</td><?php echo is_writable('../inc/class.database.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/setup/setup.php</td><td class="right">可写</td><?php echo is_writable('../setup/setup.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/setup/empty5.sql</td><td class="right">可写</td><?php echo is_writable('../setup/empty5.sql')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/setup/demo5.sql</td><td class="right">可写</td><?php echo is_writable('../setup/demo5.sql')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/setup/empty4.sql</td><td class="right">可写</td><?php echo is_writable('../setup/empty4.sql')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/setup/demo4.sql</td><td class="right">可写</td><?php echo is_writable('../setup/demo4.sql')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/admini/cn_nav.php</td><td class="right">可写</td><?php echo is_writable('../admini/cn_nav.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/admini/cn_menu_content.js</td><td class="right">可写</td><?php echo is_writable('../admini/cn_menu_content.js')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/admini/en_nav.php</td><td class="right">可写</td><?php echo is_writable('../admini/en_nav.php')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				<tr><td>/admini/en_menu_content.js</td><td class="right">可写</td><?php echo is_writable('../admini/en_menu_content.js')?'<td class="right">可写</td>':'<td class="wrong">不可写</td>';?></tr>
				</table>
				<p>权限设置为666或755。</p>
				<p>如果您需要在后台上传模板或备份数据库同时也需要对\skins和\temp以及\temp\data\目录设可写权限666；</p>
				<p style="color:#f00;">*[注：强烈建议您在程序安装后将setup目录删除或移走到虚拟主机以外的目录]</p>
				<a href="setup.php?step=2"><img src="images/back.jpg" alt="上一步" border="0" class="back" /></a>
				<a href="setup.php?step=4"><img src="images/next.jpg" alt="下一步" border="0" class="next" /></a>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php
}
elseif(trim($_GET['step']==4))
{
$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span>安装须知</span></li>
				<li><span>软件许可协议</span></li>
				<li><span>运行环境检测</span></li>
				<li><span>文件权限设置</span></li>
				<li><span id="selected">帐号设置</span></li>
				<li class="over"><span>安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">5.帐号设置</span>
			<div id="crs">
			<form id="form1" name="form1" method="post" action="setup.php?step=5">
				<p style="width:570px; height:13px; background:#f4f4f4; padding:6px 0 6px 10px; font-weight:bold;">1.设置数据库信息：</p>
				 <ul>
					<li>主&nbsp;机&nbsp;名&nbsp;称 &nbsp;：&nbsp;<input name="dbhost" type="text" id="dbhost" value="localhost" />
					  (99%的情况下不需要修改)</li>
					<li>&nbsp;&nbsp;&nbsp;用&nbsp;&nbsp;户&nbsp;&nbsp;名 &nbsp;：
					  <input name="uname" type="text" id="uname" value="root" />
					(空间商分配给你的数据库管理用户名)</li>
					<li>&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码&nbsp; &nbsp;&nbsp;：
					  <input name="pwd" type="text" id="pwd" />
					(空间商分配给你的数据库管理密码)</li>
					<li>数据库名称 ：
					  <input name="dbname" type="text" id="dbname" value="deepthroat" /> 
					  (空间商分配给你的数据库名称)</li>
					<li>数据表前缀 ：
					  <input name="pix" type="text" id="pix" value="shl_" /> 
					  (如果您在您的空间中安装多个深喉咙系统，请更改此项.例如:中文版使用cn_ 英文版使用en_)</li>
					</ul>
					
					<ul>
						<li>系统根路径 ：
							<input name="rootpath" type="text" id="rootpath" value="<?php echo $rpath ?>" />(99%的情况下默认为空。如果本系统不在环境根目录，请修改。例如：你的网站在/cn 目录下，请填入 /cn)
						</li>
						<li>是否安装测试数据 ：&nbsp;&nbsp;<input name="testdate" type="checkbox" id="testdate" value="1" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (如果您是第一次使用本系统，建议您安装测试数据，以帮助您了解、熟悉和使用本系统)
						</li>
						<li>Mysql 数据库版本 ：&nbsp;&nbsp;&nbsp;&nbsp;
							5.x<input name="mysqlver" type="radio" id="mysqlver" value="1" checked="checked" />&nbsp;&nbsp;&nbsp;&nbsp;4.x<input name="mysqlver" type="radio" id="mysqlver" value="2" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (如果您的数据库版本在4.3以上建议您使用5.x版本脚本)
						</li>
					</ul>
					<p style="width:570px; height:13px; background:#f4f4f4; padding:6px 0 6px 10px; font-weight:bold;">2.设置站点信息：</p>
					<ul>
						<li>管理员昵称 ：
							<input name="adminnick" type="text" id="adminnick" value="管理员" />(用来在系统中显示你的名字，可以为中文。)
						  </li>
						<li>管理员帐户 ：
							<input name="adminname" type="text" id="adminname" value="admin" />
						 </li>
						<li>管理员邮箱 ：
							<input name="mail" type="text" id="mail" value="admin@localhost" /></li>
						<li>管理员密码 ：
						 	<input name="adminpwd" type="text" id="adminpwd" value="admin" /> (设置后台登陆的密码,请输入20位以内的字母或数字)
						 </li>
					</ul>
				<input type="button" name="button" onclick="history.back(1)" value="" class="normalbutton" />
				<input type="submit" name="Submit" value="" class="submitbutton" />
				</form>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php
}
elseif(trim($_GET['step']==5))
{
$rpath=str_replace('/setup/setup.php','',$_SERVER['SCRIPT_NAME']);
$dbname  = trim($_REQUEST['dbname']);
$uname   = trim($_REQUEST['uname']);
$passwrd = trim($_REQUEST['pwd']);
$dbhost  = trim($_REQUEST['dbhost']);
$pix	 = trim($_REQUEST['pix']);
$rootpath= trim($_REQUEST['rootpath']);

//读写配置文件

$testDb = @mysql_connect($dbhost, $uname, $passwrd);
if (!$testDb) {
	die('不能够链接数据库:数据库服务器名、用户名或密码错误。 ');
}
mysql_select_db($dbname,$testDb) or die ($dbname.'数据表不存在。 ');;

$handle = fopen('../config/dt-config.php', 'w');

foreach ($configFile as $line_num => $line) {
	switch (substr($line,0,16)) {
		case "define('DB_HOSTN":
			fwrite($handle, str_replace("localhost", $dbhost, $line));
			break;
		case "define('DB_USER'":
			fwrite($handle, str_replace("'user'", "'$uname'", $line));
			break;
		case "define('DB_PASSW":
			fwrite($handle, str_replace("'pwd'", "'$passwrd'", $line));
			break;
		case "define('DB_DBNAM":
			fwrite($handle, str_replace("deepthroat", $dbname, $line));
			break;
		case "define('TB_PREFI":
			fwrite($handle, str_replace("shl_", $pix, $line));
			break;
		case "define('ROOTPATH":
			fwrite($handle, str_replace("root", $rootpath, $line));
			break;
		default:
			fwrite($handle, $line);
	}
}
fclose($handle);
@chmod('../config/dt-config.php', 0666);

//测试数据库。
require("../config/dt-config.php");	
$nickName=trim($_REQUEST["adminnick"]);
$adminName=trim($_REQUEST["adminname"]);
$mail=trim($_REQUEST["mail"]);
$adminPwd=sha1(trim($_REQUEST["adminpwd"]));
if(trim($_REQUEST["testdate"]) == '1' && trim($_REQUEST["mysqlver"]) == '1')
{
	$sqlFile='demo5.sql';
}
elseif(trim($_REQUEST["testdate"]) != '1' && trim($_REQUEST["mysqlver"]) == '1')
{
	$sqlFile='empty5.sql';
}
elseif(trim($_REQUEST["testdate"]) == '1' && trim($_REQUEST["mysqlver"]) == '2')
{
	$sqlFile='demo4.sql';
}
elseif(trim($_REQUEST["testdate"]) != '1' && trim($_REQUEST["mysqlver"]) == '2')
{
	$sqlFile='empty4.sql';
}
$sql_setup=file2String($sqlFile);
$testDb = @mysql_connect(DB_HOSTNAME, DB_USER, DB_PASSWORD);
mysql_select_db(DB_DBNAME,$testDb);
$sql_setup="SET NAMES UTF8;\n\n".$sql_setup;
$sql_setup.="INSERT INTO `##_user` (`nickname` , `email` , `username` , `pwd` , `role` , `right` , `dtTime` , `auditing` , `ip`) VALUES ('$nickName', '$mail', '$adminName', '$adminPwd', '9', '''0''', '".date('Y-m-d H:i:s')."', 1, '$_SERVER[REMOTE_ADDR]')";
$sql_setup.="--<br>--";
$sql_setup=str_replace("##_", TB_PREFIX, $sql_setup);
$sql_arr=explode('--<br>--',$sql_setup);

foreach ($sql_arr as $sql_o)
{
	//echo $sql_o.'<br>';
	mysql_query("SET NAMES UTF8;",$testDb);
	mysql_query($sql_o,$testDb);
}
?>
<div id="content">
	<div id="cleft">
		<img src="images/left_top.jpg" border="0" align="top"/>
		<div id="steps">
			<ul>
				<li><span>安装须知</span></li>
				<li><span>软件许可协议</span></li>
				<li><span>运行环境检测</span></li>
				<li><span>文件权限设置</span></li>
				<li><span>帐号设置</span></li>
				<li class="over"><span id="selected">安装完成</span></li>
			</ul>
		</div>
		<img src="images/left_bottom.jpg" border="0" align="top" />
	</div>
	<div id="cright">
		<div class="imgtop"><img src="images/right_top.jpg" border="0" align="top" /></div>
		<div id="install">
			<span class="title">6.安装完成</span>
			<div id="crs">
				<ul>
					<li><p style="color:#f00;">*注：强烈建议您在程序安装后将setup目录删除或移走到虚拟主机以外的目录;</p></li>
					<li>您的后台登陆用户名:<?php echo $adminName?> </li>
					<li>您的后台登陆密码：<?php echo $_REQUEST['adminpwd']?> </li>
					<li>您现在已经可以浏览网站的首页：<a href='<?php echo get_root_path();?>'>根目录</a></li>
					<li>也可以进入后台管理系统进行管理：<a href='<?php echo get_root_path()?>admini/index.php'>/admini/</a></li>
					<li>安全起见，请将 /setup/ 目录删除。并将根目录下的dt_config.php文件权限设置为666或755。</li>
				</ul>
				<p>	<a href="<?php echo get_root_path()?>admini/index.php"><img src="images/over.jpg" alt="完成" border="0" class="back" /></a></p>
			</div>
		</div>
		<img src="images/right_bottom.jpg" border="0" align="top" />
	</div>
</div>
<?php
}
function file2String($filePath)
{
	$fp = fopen($filePath,"r");
	$content_= fread($fp, filesize($filePath));
	fclose($fp);
	return $content_;

}
?>
</body>
</html>
