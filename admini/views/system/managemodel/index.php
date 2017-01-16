<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./?m=system&s=managemodel&l=<?php echo $request['l']?>">模块管理</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 
  <tr>
    <td>模块管理 | <a href="http://www.deepthroat.com.cn/">获取最新模块</a></td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php echo $model_list->render() ?>	
	  </td>
  </tr>
</table>
<h2 class="title">安装模块</h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
  <tr>
    <td>安装模块</td>
  </tr>
  
    <tr>
      <td bgcolor="#FFFFFF"><table width="90%" border="0" align="center" cellpadding="4" cellspacing="0">
        <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="?m=system&s=managemodel&a=upload_model&l=<?php echo $request['l']?>">
		<tr>
          <td width="10%">安装模块</td>
          <td width="90%"><input name="upfile" type="file" id="upfile" style="width:300px" /> 
            <input type="submit" name="Submit" value="上传并且安装" />(zip格式)  </td>
        </tr>
        <tr>
          <td>相关资源</td>
          <td><a href="http://www.shenhoulong.com/thread.php?fid=50" target="_blank">下载最新模块</a> | <a href="http://www.shenhoulong.com/read.php?tid=6093" target="_blank">模快制作教程</a></td>
        </tr> </form>
      </table></td>
    </tr>
</table>
<iframe id="noname" src="../inc/models/index.php" width="0" height="0" frameborder="0" scrolling="no"></iframe>
<br />