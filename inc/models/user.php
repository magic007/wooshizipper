<?php
class c_user extends DtDatabase
{
	public $id;
	public $nickname;
	public $email;
	public $username;
	public $pwd;
	public $role;
	public $right;
	public $dtTime;
	public $auditing;
	public $ip;
	public $detail1;
	public $detail2;
	public $detail3;
	public $detail4;
	public $detail5;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'user';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['nickname'])$this->nickname=$request['nickname'];
		if($request['email'])$this->email=$request['email'];
		if($request['username'])$this->username=$request['username'];
		if($request['pwd'])$this->pwd=$request['pwd'];
		if($request['role'])$this->role=$request['role'];
		if($request['right'])$this->right=$request['right'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['auditing'])$this->auditing=$request['auditing'];
		if($request['ip'])$this->ip=$request['ip'];
		if($request['detail1'])$this->detail1=$request['detail1'];
		if($request['detail2'])$this->detail2=$request['detail2'];
		if($request['detail3'])$this->detail3=$request['detail3'];
		if($request['detail4'])$this->detail4=$request['detail4'];
		if($request['detail5'])$this->detail5=$request['detail5'];
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
		$sql.=isset($this->nickname)?"nickname,":'';
		$sql.=isset($this->email)?"email,":'';
		$sql.=isset($this->username)?"username,":'';
		$sql.=isset($this->pwd)?"pwd,":'';
		$sql.=isset($this->role)?"role,":'';
		$sql.=isset($this->right)?"right,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->auditing)?"auditing,":'';
		$sql.=isset($this->ip)?"ip,":'';
		$sql.=isset($this->detail1)?"detail1,":'';
		$sql.=isset($this->detail2)?"detail2,":'';
		$sql.=isset($this->detail3)?"detail3,":'';
		$sql.=isset($this->detail4)?"detail4,":'';
		$sql.=isset($this->detail5)?"detail5,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->nickname)?"'$this->nickname',":'';
		$sql.=isset($this->email)?"'$this->email',":'';
		$sql.=isset($this->username)?"'$this->username',":'';
		$sql.=isset($this->pwd)?"'$this->pwd',":'';
		$sql.=isset($this->role)?$this->role.',':'';
		$sql.=isset($this->right)?"'$this->right',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->auditing)?$this->auditing.',':'';
		$sql.=isset($this->ip)?"'$this->ip',":'';
		$sql.=isset($this->detail1)?"'$this->detail1',":'';
		$sql.=isset($this->detail2)?"'$this->detail2',":'';
		$sql.=isset($this->detail3)?"'$this->detail3',":'';
		$sql.=isset($this->detail4)?"'$this->detail4',":'';
		$sql.=isset($this->detail5)?"'$this->detail5',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->nickname)?"`nickname`='$this->nickname',":'';
		$sql.=isset($this->email)?"`email`='$this->email',":'';
		$sql.=isset($this->username)?"`username`='$this->username',":'';
		$sql.=isset($this->pwd)?"`pwd`='$this->pwd',":'';
		$sql.=isset($this->role)?"`role`=$this->role,":'';
		$sql.=isset($this->right)?"`right`='$this->right',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->auditing)?"`auditing`=$this->auditing,":'';
		$sql.=isset($this->ip)?"`ip`='$this->ip',":'';
		$sql.=isset($this->detail1)?"`detail1`='$this->detail1',":'';
		$sql.=isset($this->detail2)?"`detail2`='$this->detail2',":'';
		$sql.=isset($this->detail3)?"`detail3`='$this->detail3',":'';
		$sql.=isset($this->detail4)?"`detail4`='$this->detail4',":'';
		$sql.=isset($this->detail5)?"`detail5`='$this->detail5',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>