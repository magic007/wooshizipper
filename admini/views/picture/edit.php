<h2 class="title"><?php echo $picture->title ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="?a=edit&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改图片 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td colspan="2">图片预览(<a href="<?php echo get_root_path().$picture->origialPic ?>">查看原图</a>)<img src="<?php echo get_root_path().$picture->smallPic ?>" /></td>
        </tr>
		<tr>
          <td width="57">标题</td>
          <td><input name="title" type="text" id="title" style="width:96%" value="<?php echo $picture->title ?>"></td>
        </tr>
        <tr>
          <td width="57">图片路径</td>
          <td>
            <input name="origialPic" type="text" value="<?php echo $picture->origialPic ?>" style="width:50%">
  			<input disabled name="uploadfile" type="file" style="display: none;width:50%">
  			<input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">
  			<br /><span class="disc">当您重新从本地上传图片时，原来的图片将被删除。</span>
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