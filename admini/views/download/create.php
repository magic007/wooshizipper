<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加下载 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">软件名称</td>
          <td width="861"><input type="text" class="txt" name="softwareName" id="softwareName" style="width:30%"></td>
        </tr>
		<tr>
          <td width="57">软件语言</td>
          <td><input type="text" class="txt" name="language" id="language" style="width:30%"></td>
        </tr>
		<tr>
          <td width="57">软件类别</td>
          <td><input type="text" class="txt" name="classification" id="classification" style="width:30%"></td>
        </tr>		
        <tr>
          <td width="57">应用平台</td>
          <td><input type="text" class="txt" name="platform" id="platform" style="width:30%"></td>
        </tr>	
        <tr>
          <td width="57">上传 软件</td>
          <td>
 			<input name="filePath" class="txt" type="text" id="filePath" style="width:30%">
  			<input disabled name="uploadfile" type="file" style="display: none;width:30%">
  			<input type="button" name="bt2" value="本地上传" class="bluebutton" onClick="filePath.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';filePath.style.display='none';this.style.display='none'">
          </td>
        </tr>	
        <tr>
          <td width="57">软件描述</td>
          <td>
            <?php
			$oFCKeditor = new FCKeditor('introduce') ;
			$oFCKeditor->Create() ;
			?>
          </td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>