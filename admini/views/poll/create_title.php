<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="./index.php?a=create_title&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加投票主题 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="100">标题内容</td>
          <td width="818"><input name="title" class="txt" type="text" value="" size="60"></td>
        </tr>	
        <tr>
          <td width="100">单选/多选</td>
          <td width="818"><input name="choice" type="radio" value="a" checked>
        单选
          <input type="radio" name="choice" value="b">
      多选</td>
        </tr>
      </table>	
    </td>
  </tr>
 </form>
</table>