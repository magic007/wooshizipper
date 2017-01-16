<?php
class c_guestbook extends DtDatabase
{
	public $id;
	public $name;
	public $email;
	public $homepage;
	public $qq;
	public $ip;
	public $isPublic;
	public $dtTime;
	public $content;
	public $content1;
	public $channelId;
	public $telephone;
	public $company;
	public $auditing;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'guestbook';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['name'])$this->name=$request['name'];
		if($request['email'])$this->email=$request['email'];
		if($request['homepage'])$this->homepage=$request['homepage'];
		if($request['qq'])$this->qq=$request['qq'];
		if($request['ip'])$this->ip=$request['ip'];
		if($request['isPublic'])$this->isPublic=$request['isPublic'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['content'])$this->content=$request['content'];
		if($request['content1'])$this->content1=$request['content1'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['telephone'])$this->telephone=$request['telephone'];
		if($request['company'])$this->company=$request['company'];
		if($request['auditing'])$this->auditing=$request['auditing'];
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
		$sql.=isset($this->name)?"name,":'';
		$sql.=isset($this->email)?"email,":'';
		$sql.=isset($this->homepage)?"homepage,":'';
		$sql.=isset($this->qq)?"qq,":'';
		$sql.=isset($this->ip)?"ip,":'';
		$sql.=isset($this->isPublic)?"isPublic,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->content)?"content,":'';
		$sql.=isset($this->content1)?"content1,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->telephone)?"telephone,":'';
		$sql.=isset($this->company)?"company,":'';
		$sql.=isset($this->auditing)?"auditing,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->name)?"'$this->name',":'';
		$sql.=isset($this->email)?"'$this->email',":'';
		$sql.=isset($this->homepage)?"'$this->homepage',":'';
		$sql.=isset($this->qq)?"'$this->qq',":'';
		$sql.=isset($this->ip)?"'$this->ip',":'';
		$sql.=isset($this->isPublic)?$this->isPublic.',':'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
		$sql.=isset($this->content1)?"'$this->content1',":'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->telephone)?"'$this->telephone',":'';
		$sql.=isset($this->company)?"'$this->company',":'';
		$sql.=isset($this->auditing)?$this->auditing.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->name)?"`name`='$this->name',":'';
		$sql.=isset($this->email)?"`email`='$this->email',":'';
		$sql.=isset($this->homepage)?"`homepage`='$this->homepage',":'';
		$sql.=isset($this->qq)?"`qq`='$this->qq',":'';
		$sql.=isset($this->ip)?"`ip`='$this->ip',":'';
		$sql.=isset($this->isPublic)?"`isPublic`=$this->isPublic,":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
		$sql.=isset($this->content1)?"`content1`='$this->content1',":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->telephone)?"`telephone`='$this->telephone',":'';
		$sql.=isset($this->company)?"`company`='$this->company',":'';
		$sql.=isset($this->auditing)?"`auditing`=$this->auditing,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>