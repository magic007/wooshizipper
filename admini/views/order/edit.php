<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form id="form1" name="form1" method="post" action="./?p=<?php echo $request['p'] ?>&n=<?php echo $request['n'] ?>&a=edit&l=<?php echo $request['l']?>">
  <tr>
    <td>订单处理 | <a href="javascript:history.back(1)">返回</a></td>
    <td width="91">
	<div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">		
        <tr>
      	<td width="57">产品名称</td>
        <td><?php echo $order_item->productName ?></td>
    	</tr>
    	<tr>
      	<td width="57">产品型号</td>
      	<td><label>
       	<?php echo $order_item->productSN ?>
      	</label></td>
    	</tr>
    	<tr>
      	<td width="57">交货日期</td>
      	<td><?php echo $order_item->deliveryTime ?></td>
    	</tr>
    	<tr>
      	<td width="57">交货方式</td>
      	<td><?php echo $order_item->transports ?></td>
   		</tr>
    	<tr>
      	<td width="57">联系人</td>
      	<td><?php echo $order_item->linkman ?></td>
    	</tr>
    	<tr>
      	<td width="57">单位</td>
      	<td><?php echo $order_item->unit ?></td>
    	</tr>
    	<tr>
      	<td width="57">地址</td>
      	<td><?php echo $order_item->address ?></td>
    	</tr>
    	<tr>
      	<td width="57">电话</td>
      	<td><?php echo $order_item->phone ?></td>
    	</tr>
    	<tr>
      	<td width="57">Email</td>
      	<td><?php echo $order_item->email ?></td>
    	</tr>
    	<tr>
      	<td width="57">备注</td>
      	<td><?php echo $order_item->remark ?></td>
    	</tr>
    	<tr width="57">
      	<td><strong>处理结果</strong></td>
      	<td><label><textarea name="result" id="result"><?php echo $order_item->result ?></textarea></label></td>
    </tr>
  </table>
</td>
</tr>
</form>
</table>