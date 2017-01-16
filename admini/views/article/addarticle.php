<style type="text/css">
.col2-lbox {width:20%;}
.col2-rbox {width:78.9%;}
</style>
<div class="c-box">
<div class="col2-lbox">
<?php require(ABSPATH.'/admini/views/article/nav.php') ?>
</div>
<div class="col2-rbox">
<div class='box' >
<form name="form1" method="post" action="?a=newarticle&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="60">页面标题</td>
          <td width="90%"><input type="text" name="title" id="title" class="txt" style="width:60%" />  <input name="submit" type="submit" value=" 保存 " /></td>
        </tr>
        <tr><td colspan="2"><a href="javascript:showHide('field_pane_on_1')"><img src="images/expand.gif" border="0"> 填写摘要</a>
        <div id="field_pane_on_1" style="display: none; padding:0; margin:0;">
        <textarea style='width:100%;' name='summary' id='summary' cols='90' rows='6'></textarea>
        </div></td></tr>
        <tr>
          <td colspan="2" valign="top"><?php ewebeditor(EDITORSTYLE,'content'); ?></td>
          </tr>

      </table>	
 </form>
</div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form2" id="form2" method="POST" enctype="multipart/form-data" action="?a=addpicture&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加缩略图 | <a href="javascript:history.back(1)">返回</a> </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="60">添加缩略图</td>
          <td width="861">
          <input name="origialPic" class="txt" type="text"  style="width:50%">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">
  		  <input name="submit" type="submit" value=" 保存并上传 " />
          </td>
        </tr>
      </table>	
	  </td>
  </tr>
  </form>
</table>
</div>
</div>