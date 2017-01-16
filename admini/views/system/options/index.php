<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./?m=system&s=options&l=<?php echo $request['l']?>">站点设置</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
<form name="form1" method="POST" action="./?m=system&s=options&a=save&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">站点设置</td>
    <td width="72"><input name="saveme" type="button" onclick="form1.submit()" value=" 保存设置 " /></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
		<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr> 
		<td width="200">网站标题：</td> 
		<td colspan="2"><input name="sitename" type="text" class="txt" id="sitename" value="<?php echo SITENAME ?>" size="40" /></td> 
		</tr> 
		<tr> 
		<td>站点摘要：</td> 
		<td colspan="2"><input name="sitesummary" type="text" class="txt" id="sitesummary" value="<?php echo SITESUMMARY ?>" size="40" /></td> 
		</tr> 
		<tr> 
		<td>上传路径：</td> 
		<td colspan="2"><input name="uploadpath" type="text" class="txt" id="uploadpath" value="<?php echo UPLOADPATH ?>" size="40" />
		<br />
		设置上传文件的路径(一般不用更改)</td> 
		</tr> 
		<tr> 
		<td>根路径：</td> 
		<td colspan="2"><input name="rootpath" type="text" class="txt" id="rootpath" value="<?php echo ROOTPATH ?>" size="40" />
		<br />
		如果您的网站未安装在站点根目录下,请设置,如果在根目录下请留空.例如 /xmlol (注意后面不带 /)</td> 
		</tr>
		<tr> 
		<td>服务器时区设置：</td> 
		<td colspan="2"><input name="timeZoneName" type="text" class="txt" id="timeZoneName" value="<?php echo TIMEZONENAME ?>" size="40" />
		</td> 
		</tr>
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr> 
		<td>站点页面永久路径[页面静态化]：</td> 
		<?php if (URLREWRITE){?>
		<td colspan="2"><input name="urlrewrite" checked="true" type="checkbox" id="urlrewrite" />
		用来对搜索引擎优化<span style="color:#FF0000">（*此功能需要把程序放在站点根目录并且需要服务器环境支持URL重写功能,否则此功能将无法使用）</span></td>
		<?php }else{ ?>
		<td colspan="2"><input name="urlrewrite" type="checkbox" id="urlrewrite" />
		用来对搜索引擎优化<span style="color:#FF0000">（*此功能需要把程序放在站点根目录并且需要服务器环境支持URL重写功能,否则此功能将无法使用）</span></td>
		<?php }?>
		</tr>
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr>
		  <td rowspan="4"><p><br />首页调用图片大小设置：</p></td>
		  <td width="70" align="left" valign="middle"><strong>图文：</strong></td>
		  <td width="602" align="left" valign="middle">
			宽：
			  <input name="articleWidth" type="text" size="4" maxlength="4" id="articleWidth"   value="<?php echo articleWidth ?>"/>
			  &nbsp;像素&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				高：
				<input name="articleHight" type="text" size="4" maxlength="4" id="articleHight" value="<?php echo articleHight ?>" />
				像素
		</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>新闻</strong>：</td>
		  <td align="left" valign="middle">宽：
			<input name="listWidth" type="text" size="4" maxlength="4" id="listWidth" value="<?php echo listWidth ?>"/>
			&nbsp;像素&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			高：
			<input name="listHight" type="text" size="4" maxlength="4" id="listHight" value="<?php echo listHight ?>"/>
			像素</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>产品：</strong></td>
		  <td align="left" valign="middle">宽：
			<input name="productWidth" type="text" size="4" maxlength="4" id="productWidth" value="<?php echo productWidth ?>"/>
			&nbsp;像素&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 高：
			<input name="productHight" type="text" size="4" maxlength="4" id="productHight" value="<?php echo productHight ?>"/>
			像素</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>图片：</strong></td>
		  <td align="left" valign="middle">宽：
			<input name="pictureWidth" type="text" size="4" maxlength="4" id="pictureWidth" value="<?php echo pictureWidth ?>"/>
			&nbsp;像素&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 高：
			<input name="pictureHight" type="text" size="4" maxlength="4" id="pictureHight" value="<?php echo pictureHight ?>"/>
			像素</td>
		</tr>
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr>
		  <td rowspan="9"><p><br /><br />
		    内容页列表模块单页显示默认条数：</p></td>
		  <td width="70" align="left" valign="middle"><strong>文章列表：</strong></td>
		  <td width="602" align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="listCount" type="text" size="4" maxlength="4" id="listCount" value="<?php echo listCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><p><strong>图片列表</strong>：</p>
			</td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="pictureCount" type="text" size="4" maxlength="4" id="pictureCount" value="<?php echo pictureCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>产品列表：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="productCount" type="text" size="4" maxlength="4" id="productCount" value="<?php echo productCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>视频列表：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="videoCount" type="text" size="4" maxlength="4" id="videoCount" value="<?php echo videoCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>留言列表：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="guestbookCount" type="text" size="4" maxlength="4" id="guestbookCount" value="<?php echo guestbookCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>招聘列表：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="jobsCount" type="text" size="4" maxlength="4" id="jobsCount" value="<?php echo jobsCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>列表调用：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="calllistCount" type="text" size="4" maxlength="4" id="calllistCount" value="<?php echo calllistCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>下载列表：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="downloadCount" type="text" size="4" maxlength="4" id="downloadCount" value="<?php echo downloadCount ?>" />&nbsp;&nbsp;条</td>
		</tr>
		<tr>
		  <td align="left" valign="middle"><strong>解决方案：</strong></td>
		  <td align="left" valign="middle">单页显示&nbsp;&nbsp;
		    <input name="solutionsCount" type="text" size="4" maxlength="4" id="solutionsCount" value="<?php echo solutionsCount ?>" />&nbsp;&nbsp;条</td>
		</tr>		
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr> 
		<td>内容审核发布：</td> 
		<?php if (COMMENTAUDITING){?>
		<td colspan="2"><input name="commentauditing" checked="true" type="checkbox" id="commentauditing" />
		用户评论模块审核<span style="color:#FF0000">（*当为选中状态时表示用户在前台评论的内容需经管理员审核后才能出现，否则为及时评论及时出现）</span></td>
		<?php }else{ ?>
		<td colspan="2"><input name="commentauditing" type="checkbox" id="commentauditing" />
		用户评论模块审核<span style="color:#FF0000">（*当为选中状态时表示用户在前台评论的内容需经管理员审核后才能出现，否则为及时评论及时出现）</span></td>
		<?php }?>
		</tr>
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr> 
		<td>编辑器类型：</td> 
		<td colspan="2">
		<?php
		$editor_arr = array('ewebeditor'=>'eWebEditor','fckeditor'=>'FCKeditor');
		select($editor_arr,'editorstyle',EDITORSTYLE);
		?>
		</td> 
		</tr>
		<tr>
		<td colspan="3"><hr></td>
		</tr>
		<tr> 
		<td>选择网站前台默认语言：</td> 
		<td colspan="2">
		<?php
			$language_arr=array('cn'=>'中文版本','en'=>'英文版本');
			select($language_arr,'SITELANGUAGE',SITELANGUAGE);
		?>
		</td> 
		</tr>
		</table>
	</td>
  </tr>
</form>
</table>