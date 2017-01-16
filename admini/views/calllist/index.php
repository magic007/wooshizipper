<script language="JavaScript">
<!--
function moveOption(e1, e2){
	try{
		for(var i=0;i<e1.options.length;i++){
			if(e1.options[i].selected){
				var e = e1.options[i];
				e2.options.add(new Option(e.text, e.value));
				e1.remove(i);
				i=i-1
			}
		}
		document.myform.calllist.value=getvalue(document.myform.list2);
	}
	catch(e){}
}
function getvalue(geto){
	var allvalue = "";
	for(var i=0;i<geto.options.length;i++){
		allvalue +=geto.options[i].value + ",";
	}
	return allvalue;
}
//-->
</script>
<form method="post" name="myform" action="./?p=<?php echo $request['p'] ?>&a=calllist&l=<?php echo $request['l']?>">
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
  <tr>
    <td>列表管理</td>
    <td align="right"><input type="submit" name="submit" value="保存列表调用" />&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	<p style="color:#FF0000">*选定一项或多项然后点击添加或移除(按住shift或ctrl可以多选)，或在选择项上双击进行添加和移除。</p>
	<table width="60%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="45%">
		<span>系统内现创建好并且已存在但还未被本栏目调用的列表模块</span>
		<select style="width:100%;" multiple name="list1" size="12" ondblclick="moveOption(document.myform.list1, document.myform.list2)">
		<?php
		if(!empty($calllist))
		{
			foreach($calllist as $o)
			{
				?>		
				<option value="<?php echo $o->id?>"><?php echo $o->title?></option>		
				<?php 
			}
		}
		?>	
		</select>
		</td>
        <td align="center">
		<input type="button" value="添加>>" onClick="moveOption(document.myform.list1, document.myform.list2)"><br /><br />
		<input type="button" value="<<移除" onClick="moveOption(document.myform.list2, document.myform.list1)">
		</td>
        <td width="45%">
		<span>您在该栏目内需要调用的列表模块</span>
		<select style="width:100%;" multiple name="list2" size="12" ondblclick="moveOption(document.myform.list2, document.myform.list1)">
		<?php
		if(!empty($selectcalllist))
		{
			foreach($selectcalllist as $o)
			{
				?>		
				<option value="<?php echo $o->id?>"><?php echo $o->title?></option>		
				<?php 
			}
		}
		?>	
		</select>
		<input name="calllist" type="hidden" />
		</td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</form>