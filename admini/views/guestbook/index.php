<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
  <tr>
    <td>留言管理 | </td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php
		if(isset($sb->results))
		{
			foreach ($sb->results as $o)
			{			
				?>
				<table style="border: 2px solid #ccc;<?php if ($count%2 ==0) {?> background-color:#C5EAF5;<?php }?>"  width="100%" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFCC">
				<tr>
				<td style="width:130px;">第<strong><font color="#0000FF"><?php echo $count ?></font></strong>条留言</td>
				<td style="width:130px;"><strong>留言者：</strong><?php echo $o['name'] ?></td>
				<td style="width:180px;"><strong>电话：</strong><?php echo $o['telephone'] ?></td>
				<td style="width:230px;"><strong>留言时间:</strong><?php echo $o['dtTime'] ?></td>
				<td style="width:200px;"><strong>IP：</strong><?php echo $o['ip'] ?></td>
				<td><input type="button" name="bt22" value="回复留言" onclick="window.location='./?a=edit&amp;p=<?php echo $request['p'] ?>&amp;n=<?php echo $o['id'] ?>&amp;i=<?php echo $count ?>&l=<?php echo $request['l']?>'" /></td>
				<td><input type="button" name="bt32" value="删除" onclick="window.location='./?a=destroy&amp;p=<?php echo $request['p'] ?>&amp;n=<?php echo $o['id'] ?>&l=<?php echo $request['l']?>'" /></td>
				</tr>
				<tr>
				<td><strong>QQ：</strong><?php echo $o['qq'] ?></td>
				<td colspan="4"><span style="text-align:center;"><strong>公司：</strong><?php echo $o['company'] ?></span></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				</tr>
				<tr>
				  <td style="text-align:center;height:25px;<?php if ($count%2 ==0) {?> background-color:#D0FDF4;<?php } else {?> background-color:#E3E3E3;<?php }?>"><strong>留言内容</strong></td>
				  <td style="width:820px;<?php if ($count%2 ==0) {?> background-color:#D0FDF4;<?php } else {?> background-color:#E3E3E3;<?php }?>" colspan="4"><?php echo $o['content'];?></td>
				  <td style="height:25px;<?php if ($count%2 ==0) {?> background-color:#D0FDF4;<?php } else {?> background-color:#E3E3E3;<?php }?>" colspan="2"><a href="<?php echo $o['homepage'] ?>">浏览主页</a>&nbsp;|&nbsp;<a href="mailto:<?php echo $o['email'] ?>">回复邮件</a></td>
				</tr>
				<tr>
				  <td style="text-align:center; background-color:#D9D5B3; height:40px;"><strong>回复内容</strong></td>
				  <td colspan="4" style="width:820px;"><?php
    			if($o['content'] != "")
    			{
    				?>
                    <div style="color: #4976A7;"><?php echo $o['content1'] ?></div>
                    <?php
    			}
    			?></td>
				<td colspan="2"><?php
    			if($o['auditing'] == "1")
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
    			?></td>
				</tr>
	  </table>					
				<?php
				$count--;
			}
		}
		else
		{
			?>
			<table><td>暂时还没有留言!</td></table>		
			<?php
		}
		?>
		<table><tr><td><?php echo $sb->get_pager_show() ?></td></tr></table>
    </td>
  </tr>
</table>