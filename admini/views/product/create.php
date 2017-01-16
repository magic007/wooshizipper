<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" enctype="multipart/form-data" method="post" action="./?p=<?php echo $request['p'] ?>&c=<?php echo $request['c'];?>&a=create&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加产品 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="100">产品图片</td>
          <td width="818"> 
          <input name="origialPic" type="text" class="txt" style="width:50%"><input name="uploadfile" type="file" size="100" style="display: none;width:50%"><input type="button" name="bt1" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">(上传图片不能超过1M)
          </td>
        </tr>		
        <tr>
          <td width="100">产品名称</td>
          <td width="818"><input name="name" type="text" class="txt" value="" size="60"></td>
        </tr>	
        <tr>
          <td width="100">型号</td>
          <td width="818"><input name="sn" type="text" class="txt" value="" style="ime-mode:disabled" size="24" /></td>
        </tr>	
        <tr>
          <td width="100">规格</td>
          <td width="818"><input name="spec" type="text" class="txt" value="" size="24" /></td>
        </tr>	
        <tr>
          <td width="100">市场价格</td>
          <td width="818"><input name="sellingPrice" type="text" class="txt" value="0" size="60">元</td>
        </tr>	
        <tr>
          <td width="100">优惠价格</td>
          <td width="818"><input name="preferPrice" type="text" class="txt" value="0" size="60">元</td>
        </tr>	
        <tr>
          <td width="100">初始化点击数</td>
          <td width="818"><input name="counts" value="0" type="text" class="txt" size="8" />次 </td>
        </tr>	
        <tr>
          <td width="100">产品简介</td>
          <td width="818"><textarea rows="3" class="txt" cols="60" name="summary"></textarea></td>
        </tr>	
        <tr>
          <td width="100">详细介绍</td>
          <td width="818">
          <?php
			ewebeditor(EDITORSTYLE,'content',$product->content);
  		  ?>
          </td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>