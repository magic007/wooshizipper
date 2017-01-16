<?php
class c_solutions_content extends DtDatabase
{
	public $guid;
	public $pageId;
	public $pageName;
	public $content;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'solutions_content';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['guid'])$this->guid=$request['guid'];
		if($request['pageId'])$this->pageId=$request['pageId'];
		if($request['pageName'])$this->pageName=$request['pageName'];
		if($request['content'])$this->content=$request['content'];
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
		$sql.=isset($this->guid)?"guid,":'';
		$sql.=isset($this->pageId)?"pageId,":'';
		$sql.=isset($this->pageName)?"pageName,":'';
		$sql.=isset($this->content)?"content,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->guid)?"'$this->guid',":'';
		$sql.=isset($this->pageId)?$this->pageId.',':'';
		$sql.=isset($this->pageName)?"'$this->pageName',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->guid)?"`guid`='$this->guid',":'';
		$sql.=isset($this->pageId)?"`pageId`=$this->pageId,":'';
		$sql.=isset($this->pageName)?"`pageName`='$this->pageName',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>