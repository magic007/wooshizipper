<?php
class c_sidebar extends DtDatabase
{
	public $id;
	public $unitName;
	public $params;
	public $code;
	public $pos;
	public $type;
	public $owner;
	public $style;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'sidebar';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['unitName'])$this->unitName=$request['unitName'];
		if($request['params'])$this->params=$request['params'];
		if($request['code'])$this->code=$request['code'];
		if($request['pos'])$this->pos=$request['pos'];
		if($request['type'])$this->type=$request['type'];
		if($request['owner'])$this->owner=$request['owner'];
		if($request['style'])$this->style=$request['style'];
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
		$sql.=isset($this->unitName)?"unitName,":'';
		$sql.=isset($this->params)?"params,":'';
		$sql.=isset($this->code)?"code,":'';
		$sql.=isset($this->pos)?"pos,":'';
		$sql.=isset($this->type)?"type,":'';
		$sql.=isset($this->owner)?"owner,":'';
		$sql.=isset($this->style)?"style,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->unitName)?"'$this->unitName',":'';
		$sql.=isset($this->params)?"'$this->params',":'';
		$sql.=isset($this->code)?"'$this->code',":'';
		$sql.=isset($this->pos)?$this->pos.',':'';
		$sql.=isset($this->type)?"'$this->type',":'';
		$sql.=isset($this->owner)?"'$this->owner',":'';
		$sql.=isset($this->style)?$this->style.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->unitName)?"`unitName`='$this->unitName',":'';
		$sql.=isset($this->params)?"`params`='$this->params',":'';
		$sql.=isset($this->code)?"`code`='$this->code',":'';
		$sql.=isset($this->pos)?"`pos`=$this->pos,":'';
		$sql.=isset($this->type)?"`type`='$this->type',":'';
		$sql.=isset($this->owner)?"`owner`='$this->owner',":'';
		$sql.=isset($this->style)?"`style`=$this->style,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>