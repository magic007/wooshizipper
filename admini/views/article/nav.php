<table border='0'  cellspacing='0' cellpadding='0' style='width:100%;'  class='tableBorder' >
<tr>
<td  class='tableHeading' >
操作菜单 
</td>
</tr>
<tr><td class='tableCellTwo' >
<span class='defaultBold'><a href="?a=addarticle&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>">添加新页面</a></span>
</td>
</tr>
</table>
<table border='0'  cellspacing='0' cellpadding='0' style='width:100%;'  class='tableBorder' >
<tr class='tableHeading'>
<td>
页面导航</td>
<td></td>
</tr>
<?php get_article_page($request['p']) ?>
</table>
