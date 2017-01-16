<?php
class c_choice extends DtDatabase
{
	public $id;
	public $choice;
	public $extends;
	public $isdefault;
	public $num;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'choice';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['choice'])$this->choice=$request['choice'];
		if($request['extends'])$this->extends=$request['extends'];
		if($request['isdefault'])$this->isdefault=$request['isdefault'];
		if($request['num'])$this->num=$request['num'];
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
		$sql.=isset($this->choice)?"choice,":'';
		$sql.=isset($this->extends)?"extends,":'';
		$sql.=isset($this->isdefault)?"isdefault,":'';
		$sql.=isset($this->num)?"num,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->choice)?"'$this->choice',":'';
		$sql.=isset($this->extends)?$this->extends.',':'';
		$sql.=isset($this->isdefault)?"'$this->isdefault',":'';
		$sql.=isset($this->num)?$this->num.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->choice)?"`choice`='$this->choice',":'';
		$sql.=isset($this->extends)?"`extends`=$this->extends,":'';
		$sql.=isset($this->isdefault)?"`isdefault`='$this->isdefault',":'';
		$sql.=isset($this->num)?"`num`=$this->num,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>