<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
  <tr>
    <td>回复留言 | <a href="javascript:history.back(1)">返回</a></td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <form name="form1" method="post" action="?a=edit&p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&l=<?php echo $request['l']?>">
		<table width="100%" style="border: 1px solid #ccc;" border="0" bgcolor="f2f2f2">
		<tr>
		<td>第<b><?php echo $request['i'] ?></b>条留言</td>
		<td><b>公司：</b><?php echo $guestbook->company ?></td>
		<td><b>留言时间:</b><?php echo $guestbook->dtTime ?></td>
		<td><a href="<?php echo $guestbook->homepage ?>">浏览主页</a>&nbsp;|&nbsp;<a href="mailto:<?php echo $guestbook->email ?>">回复邮件</a> </td>
		</tr>
		<tr>
		<td><b>留言者：</b><?php echo $guestbook->name ?></td>
		<td colspan="3" rowspan="3"><b>留言内容：</b><?php echo $guestbook->content;?></td>		
		</tr>
		<tr>
		<td><b>电话：</b><?php echo $guestbook->telephone ?></td>		
		</tr>
		<tr>
		<td><b>QQ：</b><?php echo $guestbook->qq ?></td>		
		</tr>
		<tr>
		<td><b>IP：</b><?php echo $guestbook->ip ?></td>

		<td>   	
		<?php
		if($guestbook->auditing == "1")
		{
    		?>
    		<font color="Green">已审核</font>
    		<?php
		}
		else
		{
    		?>
    		<font color="Red">未审核</font>
    		<?php
		}
		?>
		</td> 
		</tr>
		</table><br /> 
  		<label>回复内容：</label>
  		<textarea name="content1" style="width:70%;height:120px"><?php echo $guestbook->content1 ?></textarea>
  		<div class="submit">
  		<input type="button" name="Submit" value="回复并通过审核" onClick="form1.submit()"> 
  		<input type="button" name="bt2" value="返回" onclick="window.location='./?p=<?php echo $request['p'] ?>&l=<?php echo $request['l']?>'">
		</div>
	</form>
	</td>
  </tr>
</table>