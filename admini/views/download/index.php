<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 
  <tr>
    <td>软件管理 | <a href="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">新建一个软件下载</a></td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php echo $download->render() ?>
	  </td>
  </tr>
</table>