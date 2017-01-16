<?php
class c_manage extends DtDatabase
{
	public $names;
	public $pass;
	public $id;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'manage';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['names'])$this->names=$request['names'];
		if($request['pass'])$this->pass=$request['pass'];
		if($request['id'])$this->id=$request['id'];
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
		$sql.=isset($this->names)?"names,":'';
		$sql.=isset($this->pass)?"pass,":'';
		$sql.=isset($this->id)?"id,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->names)?"'$this->names',":'';
		$sql.=isset($this->pass)?"'$this->pass',":'';
		$sql.=isset($this->id)?$this->id.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->names)?"`names`='$this->names',":'';
		$sql.=isset($this->pass)?"`pass`='$this->pass',":'';
		$sql.=isset($this->id)?"`id`=$this->id,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>