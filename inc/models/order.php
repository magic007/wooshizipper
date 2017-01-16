<?php
class c_order extends DtDatabase
{
	public $id;
	public $productName;
	public $productSN;
	public $deliveryTime;
	public $transports;
	public $linkman;
	public $unit;
	public $address;
	public $phone;
	public $email;
	public $remark;
	public $handling;
	public $result;
	public $dtTime;
	public $channelId;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'order';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['productName'])$this->productName=$request['productName'];
		if($request['productSN'])$this->productSN=$request['productSN'];
		if($request['deliveryTime'])$this->deliveryTime=$request['deliveryTime'];
		if($request['transports'])$this->transports=$request['transports'];
		if($request['linkman'])$this->linkman=$request['linkman'];
		if($request['unit'])$this->unit=$request['unit'];
		if($request['address'])$this->address=$request['address'];
		if($request['phone'])$this->phone=$request['phone'];
		if($request['email'])$this->email=$request['email'];
		if($request['remark'])$this->remark=$request['remark'];
		if($request['handling'])$this->handling=$request['handling'];
		if($request['result'])$this->result=$request['result'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		}
		}

	public function addnew($request=array())
	{
		$this->im_virgin =true;		if(!empty($request)){
		$this->get_request($request);
		}
		}

	public function save()
	{
		if($this->im_virgin){
		eval("\$this->$this->primary_key=NULL;");
		$sql="INSERT INTO `$this->table_name` (";
		$sql.=isset($this->id)?"id,":'';
		$sql.=isset($this->productName)?"productName,":'';
		$sql.=isset($this->productSN)?"productSN,":'';
		$sql.=isset($this->deliveryTime)?"deliveryTime,":'';
		$sql.=isset($this->transports)?"transports,":'';
		$sql.=isset($this->linkman)?"linkman,":'';
		$sql.=isset($this->unit)?"unit,":'';
		$sql.=isset($this->address)?"address,":'';
		$sql.=isset($this->phone)?"phone,":'';
		$sql.=isset($this->email)?"email,":'';
		$sql.=isset($this->remark)?"remark,":'';
		$sql.=isset($this->handling)?"handling,":'';
		$sql.=isset($this->result)?"result,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->productName)?"'$this->productName',":'';
		$sql.=isset($this->productSN)?"'$this->productSN',":'';
		$sql.=isset($this->deliveryTime)?"'$this->deliveryTime',":'';
		$sql.=isset($this->transports)?"'$this->transports',":'';
		$sql.=isset($this->linkman)?"'$this->linkman',":'';
		$sql.=isset($this->unit)?"'$this->unit',":'';
		$sql.=isset($this->address)?"'$this->address',":'';
		$sql.=isset($this->phone)?"'$this->phone',":'';
		$sql.=isset($this->email)?"'$this->email',":'';
		$sql.=isset($this->remark)?"'$this->remark',":'';
		$sql.=isset($this->handling)?$this->handling.',':'';
		$sql.=isset($this->result)?"'$this->result',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->productName)?"`productName`='$this->productName',":'';
		$sql.=isset($this->productSN)?"`productSN`='$this->productSN',":'';
		$sql.=isset($this->deliveryTime)?"`deliveryTime`='$this->deliveryTime',":'';
		$sql.=isset($this->transports)?"`transports`='$this->transports',":'';
		$sql.=isset($this->linkman)?"`linkman`='$this->linkman',":'';
		$sql.=isset($this->unit)?"`unit`='$this->unit',":'';
		$sql.=isset($this->address)?"`address`='$this->address',":'';
		$sql.=isset($this->phone)?"`phone`='$this->phone',":'';
		$sql.=isset($this->email)?"`email`='$this->email',":'';
		$sql.=isset($this->remark)?"`remark`='$this->remark',":'';
		$sql.=isset($this->handling)?"`handling`=$this->handling,":'';
		$sql.=isset($this->result)?"`result`='$this->result',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>