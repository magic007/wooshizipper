<?php
class c_mylog extends DtDatabase
{
	public $id;
	public $title;
	public $content;
	public $channelId;
	public $dtTime;
	public $ordering;
	public $isPublic;
	public $overTime;
	public $state;
	public $userId;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'mylog';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['title'])$this->title=$request['title'];
		if($request['content'])$this->content=$request['content'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['ordering'])$this->ordering=$request['ordering'];
		if($request['isPublic'])$this->isPublic=$request['isPublic'];
		if($request['overTime'])$this->overTime=$request['overTime'];
		if($request['state'])$this->state=$request['state'];
		if($request['userId'])$this->userId=$request['userId'];
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
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->content)?"content,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->isPublic)?"isPublic,":'';
		$sql.=isset($this->overTime)?"overTime,":'';
		$sql.=isset($this->state)?"state,":'';
		$sql.=isset($this->userId)?"userId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->isPublic)?$this->isPublic.',':'';
		$sql.=isset($this->overTime)?"'$this->overTime',":'';
		$sql.=isset($this->state)?$this->state.',':'';
		$sql.=isset($this->userId)?$this->userId.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->isPublic)?"`isPublic`=$this->isPublic,":'';
		$sql.=isset($this->overTime)?"`overTime`='$this->overTime',":'';
		$sql.=isset($this->state)?"`state`=$this->state,":'';
		$sql.=isset($this->userId)?"`userId`=$this->userId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>