<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
  <form name="form1" method="post" action="?a=update&p=<?php echo $request['p'] ?>&i=<?php echo $i ?>&l=<?php echo $request['l']?>">
  <tr>
    <td>图文管理 | 
	<?php if($i!=0) { ?>
<a href="?p=<?php echo $request['p'] ?>&i=<?php echo $i-1?>&l=<?php echo $request['l']?>">上一页</a>　
<?php }
if($i!=$count-1 && $count!=1 && $count!=0) {
?>
<a href="?p=<?php echo $request['p'] ?>&i=<?php echo $i+1?>&l=<?php echo $request['l']?>">下一页</a>　
<?php } ?>

<a href="?a=addarticle&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>">新建一页</a>
<?php if(!empty($request['i'])){?>
<a href="?a=destroy&p=<?php echo $request['p'] ?>&i=<?php echo $request['i'] ?>&l=<?php echo $request['l']?>">删除当前页</a>
<?php } else {?>
<a href="?a=destroy&p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>">删除当前页</a>
<?php } ?></td>
    <td width="91"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  
	  </td>
  </tr></form>
</table>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form2" id="form2" method="POST" enctype="multipart/form-data" action="?a=addpicture&p=<?php echo $request['p'] ?>&i=<?php echo $i ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加缩略图 | <a href="javascript:history.back(1)">返回</a> </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="60">缩略图</td>
          <td width="861">
          <input name="origialPic" value="<?php echo $article->origialPic ?>" class="txt" type="text"  style="width:50%">
  		  <input disabled name="uploadfile" type="file" style="display: none;width:50%">
  		  <input type="button" name="bt2" value="本地上传" class="bluebutton" onclick="origialPic.disabled=true;uploadfile.disabled=false;uploadfile.style.display='';origialPic.style.display='none';this.style.display='none'">
  		  <input name="submit" type="submit" value=" 保存并上传 " />
          </td>
        </tr>
      </table>	
	  </td>
  </tr>
  </form>
</table>