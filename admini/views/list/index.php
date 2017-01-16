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
    <td>新闻管理 | <a href="?p=<?php echo $request['p'] ?>&a=create&l=<?php echo $request['l']?>">创建新闻</a></td>
    <td align="right"><span id="msg" style="color:#FF0000"></span><input type="submit" name="submit" value="保存排序" />&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php echo $list->render() ?>	
	  </td>
  </tr>
</form>
</table>