<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="?a=edit&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改视频 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">标题</td>
          <td width="861"> <input type="text" class="txt" name="title" value="<?php echo $video_item->title ?>" id="title" style="width:30%">给您上传的视频起个名字 </td>
        </tr>
		<tr>
          <td width="57">视频文件</td>
          <td>
          <input name="filePath" class="txt" value="<?php echo $video_item->filePath ?>" type="text" id="filePath" style="width:30%">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:30%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onClick="filePath.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';filePath.style.display='none';this.style.display='none'">
          </td>
        </tr>
		<tr>
          <td width="57">视频缩略图</td>
          <td>
            <input name="picture" class="txt" type="text" id="picture" style="width:30%" value="<?php echo $video_item->picture ?>">
  			<input disabled name="uploadfile2" type="file" style="display: none;width:30%">
 			<input type="button" name="bt2" value="本地上传" class="bluebutton" onClick="picture.disabled=true;uploadfile2.disabled=false;uploadfile2.style.display='';picture.style.display='none';this.style.display='none'">
			<span style="color:#FF0000">[*建议图片格式为jpg或jpeg]</span>
  			<br />
  			<span class="picture">当您重新从本地上传图片时，原来的图片将被删除。</span>
          </td>
        </tr>	
        <tr>
          <td  width="57">关键词 </td>
          <td><input type="text" class="txt" name="tags" id="tags" style="width:30%" value="<?php echo $video_item->tags ?>"></td>
        </tr>
        <tr>
          <td colspan="2">视频描述</td>
        </tr>
        <tr>
          <td colspan="2">
            <?php ewebeditor(EDITORSTYLE,'description',$video_item->description)?>
          </td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>
