<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">创建新图片 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">标题</td>
          <td width="861"><input type="text" class="txt" name="title" id="title" style="width:96%"></td>
        </tr>
		<tr>
          <td width="57">添加图片</td>
          <td>
          <input name="origialPic" class="txt" type="text"  style="width:50%">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">
          </td>
        </tr>
		<tr>
          <td width="57">图片简介</td>
          <td>
          <?php
		  ewebeditor(EDITORSTYLE,'summary',$picture->summary);
		  ?>
          </td>
        </tr>
      </table>	
	  </td>
  </tr>
 </form>
</table>