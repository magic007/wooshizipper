<?php
class c_tour extends DtDatabase
{
	public $id;
	public $title;
	public $deep;
	public $channelId;
	public $stars;
	public $tourTime;
	public $nowTime;
	public $things;
	public $summary;
	public $category_id;
	public $location;
	public $dtTime;
	public $counts;
	public $ordering;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'tour';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['title'])$this->title=$request['title'];
		if($request['deep'])$this->deep=$request['deep'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['stars'])$this->stars=$request['stars'];
		if($request['tourTime'])$this->tourTime=$request['tourTime'];
		if($request['nowTime'])$this->nowTime=$request['nowTime'];
		if($request['things'])$this->things=$request['things'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['category_id'])$this->category_id=$request['category_id'];
		if($request['location'])$this->location=$request['location'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['ordering'])$this->ordering=$request['ordering'];
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
		$sql.=isset($this->deep)?"deep,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->stars)?"stars,":'';
		$sql.=isset($this->tourTime)?"tourTime,":'';
		$sql.=isset($this->nowTime)?"nowTime,":'';
		$sql.=isset($this->things)?"things,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->category_id)?"category_id,":'';
		$sql.=isset($this->location)?"location,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->deep)?$this->deep.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->stars)?"'$this->stars',":'';
		$sql.=isset($this->tourTime)?"'$this->tourTime',":'';
		$sql.=isset($this->nowTime)?"'$this->nowTime',":'';
		$sql.=isset($this->things)?"'$this->things',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->category_id)?$this->category_id.',':'';
		$sql.=isset($this->location)?"'$this->location',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->deep)?"`deep`=$this->deep,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->stars)?"`stars`='$this->stars',":'';
		$sql.=isset($this->tourTime)?"`tourTime`='$this->tourTime',":'';
		$sql.=isset($this->nowTime)?"`nowTime`='$this->nowTime',":'';
		$sql.=isset($this->things)?"`things`='$this->things',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->category_id)?"`category_id`=$this->category_id,":'';
		$sql.=isset($this->location)?"`location`='$this->location',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>