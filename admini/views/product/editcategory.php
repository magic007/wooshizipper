<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="./?a=editcategory&p=<?php echo $request['p'] ?>&c=<?php echo $request['c'] ?>&d=<?php echo $request['d'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改产品类别 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="100">产品大类名称</td>
          <td width="818"><input name="title" class="txt" value="<?php echo $product_category->title ?>" type="text" size="60"></td>
        </tr>
        <tr>
          <td width="100">产品大类描述</td>
          <td width="818"><textarea rows="5" class="txt" cols="60" name="summary"><?php echo $product_category->summary ?></textarea></td>
        </tr>
      </table>	
	  </td>
  </tr>
  </form>
</table>