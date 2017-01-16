<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="?a=edit&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">方案管理 | <a href="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">创建方案</a> | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72">
	<div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="77">标题</td>
          <td width="861">
		 <input type="text" class="txt" name="title" id="title" style="width:96%" value="<?php echo $solutions_item->title ?>"></td>
        </tr>
		
		<tr>
          <td width="77">副标题</td>
          <td width="861">
		 <input type="text" class="txt"  name="subheading" id="subheading" style="width:96%" value="<?php echo $solutions_item->subheading ?>">
		 </td>
        </tr>
		
		<tr>
          <td width="77">应用类型</td>
          <td width="861">
		 <input type="text" class="txt"  name="application" id="application" style="width:96%" value="<?php echo $solutions_item->application ?>">
		 </td>
        </tr>
		
		<tr>
          <td width="77">项目类型</td>
          <td width="861">
		 <input type="text" class="txt"  name="types" id="types" style="width:96%" value="<?php echo $solutions_item->types ?>">
		 </td>
        </tr>
		
		 <tr>
          <td width="77">作者</td>
          <td width="861">
		 <input type="text" class="txt"  name="author" id="title" style="width:96%" value="<?php echo $solutions_item->author ?>">
		 </td>
        </tr>
		
		 <tr>
          <td width="77">关键字</td>
          <td width="861">
		 <input type="text" class="txt"  name="keyword" id="keyword" style="width:72%" value="<?php echo $solutions_item->keyword ?>">(请将您要输入的关键字以中文"、"号隔开)
		 </td>
        </tr>
		<input type="hidden" name="guid" value="<?php echo $solutions_item->guid ?>">
        <tr>
          <td colspan="2" valign="top">
			<?php
			ewebeditor(EDITORSTYLE,'content',$solutions_item->content);
			?></td>
          </tr>

      </table>
	  </td>
  </tr></form>
</table>