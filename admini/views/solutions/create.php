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
          <td width="57">副标题</td>
          <td width="861"><input type="text" class="txt" name="subheading" id="subheading" style="width:96%"></td>
        </tr>
		<tr>
          <td width="57">应用类型</td>
          <td width="861"><input type="text" class="txt" name="application" id="application" style="width:96%"></td>
        </tr>
		<tr>
          <td width="57">项目类型</td>
          <td width="861"><input type="text" class="txt" name="types" id="types" style="width:96%"></td>
        </tr>
		 <tr>
          <td width="57">作者</td>
          <td width="861"><input type="text" name="author" class="txt" id="author" style="width:96%"></td>
        </tr>
		        <tr>
          <td width="57">关键字</td>
          <td width="861"><input type="text" name="keyword" class="txt" id="keyword" style="width:72%">(请将您要输入的关键字以中文"、"号隔开)</td>
        </tr>
	
        <tr>
          <td colspan="2" valign="top">
		  <?php
		  ewebeditor(EDITORSTYLE,'content',$solutions_item->content);
		  ?>
		  </td>
          </tr>

      </table>	
	  </td>
  </tr></form>
</table>