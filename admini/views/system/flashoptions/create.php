<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=flashoptions&l=<?php echo $request['l']?>">Flash调用管理</a>  → 添加图片</div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" enctype="multipart/form-data" action="?m=system&s=flashoptions&a=create&group_id=<?php echo $request['group_id']; ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加Flash内容 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">标题</td><td>
            <input type="text" class="txt" name="title" id="title" style="width:300px"> 出现顺序 <input type="text" name="ordering" class="txt" id="ordering" style="width:50px"></td>
          </tr>
		        <tr>
          <td width="57">链接URL</td>
          <td><input type="text" name="url" class="txt" id="url" style="width:96%"></td>
        </tr>
		        <tr>
          <td width="57">图片地址</td>
          <td>
          <input name="picpath" class="txt" type="text" id="picpath" style="width:60%">
  			<input disabled name="uploadfile" type="file" style="display: none;width:60%">
  			<input type="button" name="bt2" value="本地上传" class="bluebutton" onClick="picpath.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';picpath.style.display='none';this.style.display='none'">
          
          </td>
        </tr>

			        <tr>
          <td width="57">图片注释</td>
          <td>
		  <p>
            <textarea name="summary" rows="3" class="txt" id="summary" style="width:96%"></textarea><br />
			[如果您的图片上已经有了注释,这里也可以不填写]
          </p>
          </td>
        </tr>
      </table>	
	  </td>
  </tr></form>
</table>