<style type="text/css">
<!--
.change{ padding-left:4%;}
dl{margin:0 0 10px 0; padding:10px 0;}
dd{margin:0; padding:0;}
dd img{ border:1px solid #f1f1f1; padding:0; clear:both; }
.u_box {
	float: left;
	width: 189px;
	margin-right:10px;
	padding-left:29px;
	background-color:#FFFFCC;
	border:1px solid #ff0;
}

.skinbox{width: 189px; margin-right:10px; padding-left:29px; border:1px solid #CCC; background-color:#F9F9F9; float:left;}
.skinbox dd,.u_box dd{ line-height:24px;}
/*img { border:none;}*/
-->
</style>
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=changeskin&l=<?php echo $request['l']?>">模板管理</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="0" class='tableBorder'>
  <tr>
    <td class='tableHeading'>安装模板</td>
  </tr>
</table>
  <div class="box">
 <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
	<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="?m=system&s=changeskin&a=upload_template&l=<?php echo $request['l']?>">
	<tr>
	  <td width="10%">上传模板</td>
	  <td width="90%"><input name="upfile" type="file" id="upfile" style="width:300px" /> 
		<input type="submit" name="Submit" value="上传并且安装" />(zip格式)  </td>
	</tr>
	<tr>
	  <td>相关资源</td>
	  <td><a href="http://www.deepthroat.com.cn/bbs/thread.php?fid=56" target="_blank">下载最新模板</a> | <a href="http://www.deepthroat.com.cn/bbs/read.php?tid=6093" target="_blank">模板制作教程</a></td>
	</tr> </form>
  </table>
  </div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class='tableBorder'>
  <tr>
    <td class='tableHeading'>选择模板</td>
  </tr>
</table>  
<div class="box change">
<table width="100%" border="0"  cellpadding="0" cellspacing="0">
    <tr>
    <td>
	<?php get_skins_info(get_directory("../skins/")); ?>
	</td>
  </tr>
</table>
</div>