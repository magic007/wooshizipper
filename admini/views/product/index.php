<style type="text/css">
<!--
.wrapL{
width:19.8%; float:left;
}
.wrapR{
width:80%; float:left;
}
.menuText a{
text-decoration:none;
}
.menuText a:hover{
text-decoration:none;
}
-->
</style>
<script type="text/javascript">  
// 说明 ： 用 Javascript 实现只能输入数字的文本框 
// 整理 ： 孙阳阳 20070715 
function checkNumber(e) 
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	var el = document.getElementById('test');
	var msg = document.getElementById('msg');
	reg = /\d/;
	var result = reg.test(keychar);
	if(!result)
	{         
		el.className = "warn";
		msg.innerHTML = "只能输入数字!&nbsp;&nbsp;";
		return false;
	}
	else 
	{         
		el.className = "";
		msg.innerHTML = ""; 
		return true;     
	} 
} 
</script>
<span id="test"></span>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
<form name="orderForm" method="post" action="./?p=<?php echo $request['p'] ?>&a=ordering&l=<?php echo $request['l']?>">
  <tr>
	<?php
	if(empty($request['c']))
	{
		?>
		<td>产品管理 | <a href="?a=createcategory&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>"><strong><span style="color:#0000FF">添加主类别</span></strong></a></td>
		<?php
	}
	else
	{
		?>
		<td>产品管理 | <a href="?a=createcategory&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>"><strong><span style="color:#0000FF">添加主类别</span></strong></a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="?a=createcategory&p=<?php echo $request['p'] ?>&c=<?php echo $request['c'] ?>&d=<?php echo $request['d'] ?>&l=<?php echo $request['l']?>"><strong><span style="color:#FF0000">添加子类别</span></strong></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?a=editcategory&p=<?php echo $request['p'] ?>&c=<?php echo $request['c'] ?>&l=<?php echo $request['l']?>">修改类别</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?a=destroycategory&p=<?php echo $request['p'] ?>&c=<?php echo $request['c'] ?>&l=<?php echo $request['l']?>">删除类别</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?a=create&p=<?php echo $request['p'] ?>&c=<?php echo $request['c'] ?>&l=<?php echo $request['l']?>">添加产品</a></td>
		<?php
	}
	?>
    <td align="right"><span id="msg" style="color:#FF0000"></span><input type="submit" name="submit" value="保存排序" />&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFFF">
	  <div class="wrapL">
		<table width="100%" border="0">
		<?php
		$adminCategoryTree = new adminCategoryTree($product_category);
		?>
		</table>
		</div>	
		<div class="wrapR">
		<?php echo $product->render() ?>
		</div>
	  </td>
  </tr>
</form>
</table>