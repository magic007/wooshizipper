<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="./index.php?p=<?php echo $request['p'] ?>&c=<?php echo $request['c'];?>&a=create_choice&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">当前主题：<span style="color:#FF0000"><?php echo $poll_category->title?></span> | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">	
        <tr>
          <td width="100">选项内容</td>
          <td width="818"><input name="choice" type="text" class="txt" value="" size="60"></td>
        </tr>
		<tr>
          <td width="100">选项票数</td>
          <td width="818"><input name="num" type="text" class="txt" value="" size="60"></td>
        </tr>	
        <tr>
          <td width="100">是否默认选中</td>
          <td width="818"><input type="radio" name="isdefault" value="a">是<input name="isdefault" type="radio" value="b" checked>否</td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>