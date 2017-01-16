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
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → 频道及栏目设置</div>
<table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#C5EAF5">
<form name="orderForm" method="post" action="./?m=system&s=managechannel&cid=<?php if(empty($request['cid'])) echo '0';else echo $request['cid'];?>&a=ordering&l=<?php echo $request['l']?>">
  <tr>
    <td width="60%">频道及栏目管理</td>
    <td width="30%">
	<a href="?m=system&s=managechannel&cid=0&a=createchannel&l=<?php echo $request['l']?>"><strong><span style="color:#FF0000">添加频道</span></strong></a>
	<a href="?m=system&s=managechannel&cid=<?php echo $request['cid'] ?>&a=create&l=<?php echo $request['l']?>"><strong><span style="color:#0000FF">添加栏目</span></strong></a>
	<a href="?m=system&s=managechannel&cid=<?php echo $request['cid'] ?>&a=editchannel&l=<?php echo $request['l']?>"><strong>修改频道属性</strong></a>
	<a href="?m=system&s=managechannel&cid=<?php echo $request['cid'] ?>&a=destroychannel&l=<?php echo $request['l']?>" onclick="return confirm('您确认要删除本频道?一旦删除，此栏目将不可恢复。')"><strong>删除本频道</strong></a>
	</td>
	<td align="right"><input type="submit" name="submit" value="保存排序" />&nbsp;</td>
  </tr>
    <tr>
    <td colspan="2" bgcolor="#FFFFCC"><?php main_menu() ?></td>
	<td bgcolor="#FFFFCC" align="right"><span id="msg" style="color:#FF0000"></span></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFFF">
	<?php 
	global $menus,$db,$request,$sb;
	$request['cid']=empty($request['cid'])?getFristChannelId():$request['cid'];
	if($request['cid']!=null) echo $menus->render();
	?>
	</td>
  </tr>
</form>
</table>