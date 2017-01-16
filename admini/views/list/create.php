<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">列表管理 | <a href="javascript:history.back(1)">返回</a> </td>
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
          <td width="57">作者</td>
          <td><input type="text" name="author" class="txt" id="title" style="width:96%"></td>
        </tr>
		        <tr>
          <td width="57">关键字</td>
          <td><input type="text" name="tags" class="txt" id="title" style="width:96%"></td>
        </tr>	
        <tr>
          <td colspan="2" valign="top">
		  <?php
		  ewebeditor(EDITORSTYLE,'content',$list_item->content);
		  ?>
		  </td>
        </tr>
		<tr>
          <td width="57">点击次数</td>
          <td width="175"><input type="text" name="counts" class="txt" id="counts" value="0" style="width:80%">次</td>
        </tr>
		<tr>
          <td width="57">添加日期</td>
          <td width="200"><input type="text" name="dtTime" class="txt" id="dtTime" value="<?php echo date("Y-m-d");?>" style="width:80%;font-size:9pt;width:152px;BEHAVIOR: url('../inc/js/LWDP.HTC');"></td>
        </tr>
      </table>	
	  </td>
  </tr></form>
</table>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form2" id="form2" method="POST" enctype="multipart/form-data" action="?a=addpicture&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892"><a href="javascript:showHide('field_pane_on_2')"><img src="images/expand.gif" border="0"> 添加缩略图</a> | <a href="javascript:history.back(1)">返回</a> 
	</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="861">          
		      <div id="field_pane_on_2" style="display: none; padding:0; margin:0;">
			  上传缩略图：
			  <input name="origialPic" class="txt" type="text"  style="width:50%">
			  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
			  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">
			  <input name="submit" type="submit" value=" 保存并上传 " />
			</div>
          </td>
        </tr>
      </table>	
	  </td>
  </tr>
  </form>
</table>