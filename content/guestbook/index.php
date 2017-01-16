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
	require(ABSPATH.'/admini/models/guestbook.php');

	$guestbook = new guestbook();
	$guestbook->addnew();
	//必填字段
	$guestbook->name=$request['name'];
	$guestbook->email=$request['email'];
	$guestbook->telephone=$request['telephone'];
	$guestbook->content=$request['content'];
	$guestbook->dtTime=date('Y-m-d H:i:s');
	$guestbook->channelId=$params['id'];
	$guestbook->ip=$_SERVER['REMOTE_ADDR'];
	//可选字段

	$guestbook->qq=$request['qq'];
	$guestbook->homepage=$request['homepage'];
	$guestbook->address=$request['address'];
	$guestbook->company=$request['company'];

	if($guestbook->save())
	{
		echo '<script>alert("恭喜，您的留言已提交成功，工作人员会及时回复！");location.href="javascript:history.go(-1)";</script>';
		exit;
	}
	else
	{
		echo '<script>alert("对不起，系统错误，您的留言未能及时提交，请电话与我们联系。");location.href="javascript:history.go(-1)";</script>';
		exit;
	}
	
}
?>