<?php
class c_tour_category extends DtDatabase
{
	public $id;
	public $menuName;
	public $title;
	public $pid;
	public $dtTime;
	public $summary;
	public $type;
	public $ordering;
	public $link;
	public $deep;
	public $channelId;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'tour_category';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['menuName'])$this->menuName=$request['menuName'];
		if($request['title'])$this->title=$request['title'];
		if($request['pid'])$this->pid=$request['pid'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['type'])$this->type=$request['type'];
		if($request['ordering'])$this->ordering=$request['ordering'];
		if($request['link'])$this->link=$request['link'];
		if($request['deep'])$this->deep=$request['deep'];
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
		$sql.=isset($this->menuName)?"menuName,":'';
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->pid)?"pid,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->type)?"type,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->link)?"link,":'';
		$sql.=isset($this->deep)?"deep,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->menuName)?"'$this->menuName',":'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->pid)?$this->pid.',':'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->type)?"'$this->type',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->link)?"'$this->link',":'';
		$sql.=isset($this->deep)?$this->deep.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->menuName)?"`menuName`='$this->menuName',":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->pid)?"`pid`=$this->pid,":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->type)?"`type`='$this->type',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->link)?"`link`='$this->link',":'';
		$sql.=isset($this->deep)?"`deep`=$this->deep,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>