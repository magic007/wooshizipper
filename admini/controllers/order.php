<?php
function index()
{
	global $order,$db,$request;
	$sb = new sqlbuilder('zdt','select * from `'.TB_PREFIX.'order` where channelId='.$request['p'],'id',$db,20);
	$order = new DataTable($sb,'订单列表');
	$order->add_col('编号','id','db',40,'"$rs[id]"');
	$order->add_col('联系人','linkman','db',100,'"<a href=\"./?a=edit&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">$rs[linkman]</a>"');
	$order->add_col('电话','phone','db',100,'"$rs[phone]"');
	$order->add_col('产品名称','productName','db',0,'"$rs[productName]"');
	$order->add_col('型号','productSN','db',140,'"$rs[productSN]"');
	$order->add_col('交货时间','deliveryTime','db',140,'"$rs[deliveryTime]"');
	$order->add_col('提交时间','dtTime','db',140,'"$rs[dtTime]"');
	$order->add_col('处理','handling','text',140,'"<a href=\"./?a=destroy&p=$rs[channelId]&n=$rs[id]&l='.$request['l'].'\">[删除]</a> ".pross($rs["handling"])." "');
}
function edit()
{
	global $order_item,$db,$request;
	$sql='select * from '.TB_PREFIX.'order where id='.$request['n'];
	$order_item = $db->get_row($sql);
	if($_POST)
	{
		$order_form = new order();
		$order_form->id=$request['n'];
		$order_form->result=$request['result'];
		$order_form->handling = 1;
		if($order_form->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
	}
	
}
function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		$sql='delete from '.TB_PREFIX.'order where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
	
}
function pross($handling)
{
	if($handling)
		return "[已处理]";
	else 
		return "[未处理]";
}
?>