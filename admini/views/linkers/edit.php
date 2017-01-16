<script type="text/javascript" src="../inc/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  pictureLinks();
  wordsLinks();
});
function pictureLinks()
{
	if($('input[@name=links]').get(0).checked)
	{
		$('#logo_pics').show();
	}
}
function wordsLinks()
{
	if($('input[@name=links]').get(1).checked)
	{
		$('#logo_pics').hide();
	}
}
</script>
<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
<form name="form1" enctype="multipart/form-data" method="post" action="?p=<?php echo $request['p'] ?>&a=edit&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">案例展示页面 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	  	<tr>
		  <td width="57">链接类型</td>
		  <td colspan="2" valign="top">
		  <?php if($linkers_item->links==0) {?>
		  <input type="radio" checked="checked" value="0" id="links" onclick="javascript:pictureLinks();" name="links" />图片链接
		  <input type="radio" value="1" id="links" onclick="javascript:wordsLinks();" name="links" />文字链接
		  <?php }elseif($linkers_item->links==1){?>
		   <input type="radio" value="0" id="links" onclick="javascript:pictureLinks();" name="links" />图片链接
		  <input type="radio" value="1" checked="checked" id="links" onclick="javascript:wordsLinks();" name="links" />文字链接
		  <?php }?>
		  </td>
		</tr>
        <tr>
          <td width="57">案例名称</td>
          <td width="861"> <input type="text" class="txt" name="linkerName" id="linkersName" value="<?php echo $linkers_item->linkerName ?>" style="width:30%"></td>
        </tr>
		<tr>
          <td width="57">链接地址</td>
          <td><input type="text" class="txt" name="linkAddress" id="linkAddress" style="width:30%" value="<?php echo $linkers_item->linkAddress ?>">
          (例如：http://deepthroat.com.cn/ — 不要忘记输入http://)</td>
        </tr>
		<tr id="logo_pics">
          <td width="57">网站LOGO</td>
          <td><input name="origialPic" class="txt" type="text"  style="width:50%" value="<?php echo $linkers_item->origialPic ?>">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'"></td>
        </tr>	
        <tr>
          <td  width="57">案例描述</td>
          <td>
           <?php
			ewebeditor(EDITORSTYLE,'summary',$linkers_item->summary);
		  ?>
          </td>
        </tr>
      </table>	
	  </td>
  </tr>
  </form>
</table>