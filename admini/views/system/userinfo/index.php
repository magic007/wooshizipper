<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./?m=system&s=userinfo&l=<?php echo $request['l']?>">用户管理</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
  <tr>
    <td>添加用户 | <a href="?m=system&s=userinfo&a=create&l=<?php echo $request['l'] ?>">添加用户</a></td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php echo $users->render() ?>
	  </td>
  </tr>
</table>