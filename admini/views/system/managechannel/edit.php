<script type="text/javascript" src="../inc/js/jquery.js"></script>
<script>
function externalLinksOk()
{
	if($('input[@name=isExternalLinks]').get(1).checked)
	{
		$('#styleRedirectUrl').show();
		$('#styleMenuName').hide();
		$('#styleLevel').hide();
		$('#styleLevel').hide();
		$('#styleIsHidden').hide();
		$('#styleIsComment').hide();
		$('#styleType').hide();
	}
}
function externalLinksNo()
{
	if($('input[@name=isExternalLinks]').get(0).checked)
	{
		$('#styleRedirectUrl').hide();
		$('#styleMenuName').show();
		$('#styleLevel').show();
		$('#styleLevel').show();
		$('#styleIsHidden').show();
		$('#styleIsComment').show();
		$('#styleType').show();
	}
}
</script>
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=managechannel&l=<?php echo $request['l']?>">频道及栏目设置</a> → <a href="./?m=system&s=managechannel&cid=<?php echo $request['cid']?>&a=edit&l=<?php echo $request['l']?>">修改栏目属性</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="?m=system&s=managechannel&cid=<?php echo $request['cid'] ?>&a=edit&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改栏目 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
<td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
	  	<tr>
		  <td width="57">栏目类型</td>
		  <td colspan="2" valign="top">
		  <input type="radio" checked="checked" value="0" id="isExternalLinks" onclick="javascript:externalLinksNo();" name="isExternalLinks" />系统内链
		  <input type="radio" value="1" id="isExternalLinks" onclick="javascript:externalLinksOk();" name="isExternalLinks" />系统外链
		  </td>
		</tr>
        <tr>
		  <td width="57">标题</td>
		  <td colspan="2" valign="top"><input type="text" class="txt" name="title"  value="<?php echo $menu_item->title ?>" id="title" style="width:96%"></td>
		</tr>
		<tr id="styleMenuName">
		  <td width="57">英文名</td>
		  <td colspan="2" valign="top">
		  <input type="text" class="txt" name="menuName" value="<?php echo $menu_item->menuName ?>" id="menuName" style="width:96%" onkeyup="value=value.replace(/[\W]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^a-zA-Z0-9]/g,''))"><br />
		  <span style="width:96%;color:#FF0000;">*</span>[如果您打开了支持搜索引擎优化的页面永久路径和静态化,那么<span style="width:96%;color:#FF0000;">栏目</span>英文名就一定要填写。]<br />
		  <span style="width:96%;color:#FF0000;">*</span>[而且还要注意<span style="width:96%;color:#FF0000;">不要与其它频道和栏目</span>有重复的英文名，且输入的英文名只能是<span style="width:96%;color:#FF0000;">英文字符</span>或<span style="width:96%;color:#FF0000;">数字字符</span>或<span style="width:96%;color:#FF0000;">英文和数字的字符组合</span>。]	
		  </td>
		</tr>
		<tr id="styleLevel">
		  <td width="57">栏目样式</td>
		  <td colspan="2" valign="top"><?php $temp=new menu();$temp->menu_power_list_select('related_common',$menu_item->related_common); ?></td>
		</tr>
		<tr>
		  <td width="57">摘要</td>
		  <td colspan="2" valign="top"><input type="text" class="txt" name="summary"  value="<?php echo $menu_item->summary ?>" id="summary" style="width:96%"></td>
		</tr>
		<tr id="styleRedirectUrl">
		  <td width="57">栏目外链URL地址</td>
		  <td colspan="2" valign="top">
		  <input type="text" class="txt" name="redirectUrl" id="redirectUrl" value="<?php echo $menu_item->redirectUrl ?>" style="width:96%"><br />
		  <span style="width:96%;color:#FF0000;">*</span>[这里填写您要外链到系统以外或已确定的固定URL地址，即http://地址，例如：<span style="width:96%;color:#FF0000;">http://www.deepthroat.com.cn/bbs/</span>]
		  </td>
		</tr>
		<tr id="styleLevel">
		  <td width="57">权限</td>
		  <td colspan="2" valign="top"><?php user::user_power_list_select('level',$menu_item->level); ?></td>
		</tr>
		<tr id="styleIsHidden">
		  <td width="57">栏目设置</td>
		  <td colspan="2" valign="top"><?php show_hide_radio($menu_item->isHidden) ?></td>
		</tr>
		<tr id="styleIsComment">
		  <td width="57">开启评论</td>
		  <td colspan="2" valign="top"><?php show_isComment_radio($menu_item->isComment) ?><span style="color:#0000FF">[温馨提示:如果您好创建的频道是留言、订单、招聘、网站地图模块请不要开启评论]</span></td>
		</tr>
		<tr>
		  <td width="57">排序</td>
		  <td colspan="2" valign="top"><input type="text" class="txt" name="ordering"  value="<?php echo $menu_item->ordering ?>" id="ordering" style="width:24px">(正序)</td>
		</tr>
		<tr id="styleType">
		  <td width="57">类型</td>
          <td colspan="2" valign="top">
	  	  <?php	model_radio_group('type',$menu_item->type) ?>
		  </td>
        </tr>
      </table>	
    </td>
  </tr>
</form>
</table>

<?php 
if($menu_item->isExternalLinks=='1')
{
	?>
	<script>
	$('input[@name=isExternalLinks]').get(1).checked = true;
	externalLinksOk();
	</script>
	<?php
}
else if($menu_item->isExternalLinks=='0')
{
	?>
	<script>
	$('input[@name=isExternalLinks]').get(0).checked = true;
	externalLinksNo();
	</script>
	<?php
}
else
{
	?>
	<script>
	$('input[@name=isExternalLinks]').get(0).checked = true;
	externalLinksNo();
	</script>
	<?php
}
?>

<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form2" id="form2" method="POST" enctype="multipart/form-data" action="?m=system&s=managechannel&cid=<?php echo $request['cid'] ?>&a=addpicture&l=<?php echo $request['l'] ?>">
  <tr>
    <td width="892">添加频道栏目首页图片 </td>
	<td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="60">添加缩略图</td>
          <td width="861">
          <input name="origialPic" value="<?php echo $menu_item->origialPic ?>" class="txt" type="text"  style="width:50%">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">          </td>
		  </tr>
		  <tr>
		    <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;宽：&nbsp;
              <input name="width" type="text" size="8" maxlength="4" id="width"   value="<?php echo $menu_item->width ?>"/>px&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp; &nbsp;&nbsp;高：&nbsp;<input name="hight" type="text" size="8" maxlength="4" id="hight" value="<?php echo $menu_item->hight ?>" />px</td>
        </tr>
      </table>	  </td>
    </tr>
  </form>
</table>
