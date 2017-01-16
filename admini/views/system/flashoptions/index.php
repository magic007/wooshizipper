<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=flashoptions&l=<?php echo $request['l']?>">Flash调用管理</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" enctype="multipart/form-data" action="?m=system&s=flashoptions&a=create&group_id=<?php echo $request['group_id']; ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加Flash内容 | <a href="javascript:history.back(1)">返回</a> <a href="?m=system&s=flashoptions&a=create_group&l=<?php echo $request['l']?>">添加一个flash</a> </td>
    <td width="72">&nbsp;</td>
  </tr>
  		<tr>
          <td bgcolor="#ffffff" colspan="2"><div class="tiptext">提示：本模块可以控制首页flash中的轮换图片。</div></td>
        </tr>
		<tr>
          <td bgcolor="#ffffff" colspan="2"><?php echo $flash_group->render(); ?></td>
        </tr>
</form>
</table>