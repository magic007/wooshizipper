<?php
function index()
{
	global $db,$params;
	$sql="select * from ".TB_PREFIX."menu where id=$params[id]";
	setdata('page',$db->get_row($sql));
}
function create()
{
	global $db,$params,$request;
	require(ABSPATH.'/admini/models/order.php');
	//验证
	validates_presence_of('productName','产品名称');
	validates_presence_of('linkman','联系人');
	validates_presence_of('deliveryTime','交货时间');
	validates_presence_of('transports','交货方式');
	validates_presence_of('phone','电话');
	validates_email_of('email','Email');
	
	$order = new order();
	$order->addnew();
	//必填字段
	$order->productName=$request['productName'];
	$order->linkman=$request['linkman'];
	$order->deliveryTime=$request['deliveryTime'];
	$order->transports=$request['transports'];
	$order->phone=$request['phone'];
	$order->dtTime=date('Y-m-d H:i:s');
	$order->channelId=$params['id'];
	//可选字段
	$order->productSN=$request['productSN'];
	$order->unit=$request['unit'];
	$order->address=$request['address'];
	$order->email=$request['email'];
	$order->remark=$request['remark'];
	
	if($order->save())
	{
		//setdata('info','恭喜，您的合作提案已提交成功，工作人员会在稍后与您联系！');
		echo "<script language='javascript'>alert('恭喜，您的合作提案已提交成功，工作人员会在稍后与您联系！!');window.history.go(-1);</script>";
		exit;       
	}
	else
	{ 
		//setdata('info','对不起，系统错误，您的合作提案未能及时提交，请电话与我们联系。');
		echo "<script language='javascript'>alert('对不起，系统错误，您的合作提案未能及时提交，请电话与我们联系。!');window.history.go(-1);</script>"; 
		exit;
	}
}

?>