<?php
class c_solutions extends DtDatabase
{
	public $id;
	public $channelId;
	public $title;
	public $subheading;
	public $application;
	public $types;
	public $keyword;
	public $author;
	public $counts;
	public $dtTime;
	public $editTime;
	public $tags;
	public $check;
	public $pic;
	public $guid;
	public $isPic;
	public $spic;
	public $cguid;
	public $origialPic;
	public $smallPic;
	public $ordering;
	public $sign;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'solutions';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['title'])$this->title=$request['title'];
		if($request['subheading'])$this->subheading=$request['subheading'];
		if($request['application'])$this->application=$request['application'];
		if($request['types'])$this->types=$request['types'];
		if($request['keyword'])$this->keyword=$request['keyword'];
		if($request['author'])$this->author=$request['author'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['editTime'])$this->editTime=$request['editTime'];
		if($request['tags'])$this->tags=$request['tags'];
		if($request['check'])$this->check=$request['check'];
		if($request['pic'])$this->pic=$request['pic'];
		if($request['guid'])$this->guid=$request['guid'];
		if($request['isPic'])$this->isPic=$request['isPic'];
		if($request['spic'])$this->spic=$request['spic'];
		if($request['cguid'])$this->cguid=$request['cguid'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['ordering'])$this->ordering=$request['ordering'];
		if($request['sign'])$this->sign=$request['sign'];
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
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->subheading)?"subheading,":'';
		$sql.=isset($this->application)?"application,":'';
		$sql.=isset($this->types)?"types,":'';
		$sql.=isset($this->keyword)?"keyword,":'';
		$sql.=isset($this->author)?"author,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->editTime)?"editTime,":'';
		$sql.=isset($this->tags)?"tags,":'';
		$sql.=isset($this->check)?"check,":'';
		$sql.=isset($this->pic)?"pic,":'';
		$sql.=isset($this->guid)?"guid,":'';
		$sql.=isset($this->isPic)?"isPic,":'';
		$sql.=isset($this->spic)?"spic,":'';
		$sql.=isset($this->cguid)?"cguid,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->sign)?"sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->subheading)?"'$this->subheading',":'';
		$sql.=isset($this->application)?"'$this->application',":'';
		$sql.=isset($this->types)?"'$this->types',":'';
		$sql.=isset($this->keyword)?"'$this->keyword',":'';
		$sql.=isset($this->author)?"'$this->author',":'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->editTime)?"'$this->editTime',":'';
		$sql.=isset($this->tags)?"'$this->tags',":'';
		$sql.=isset($this->check)?$this->check.',':'';
		$sql.=isset($this->pic)?"'$this->pic',":'';
		$sql.=isset($this->guid)?"'$this->guid',":'';
		$sql.=isset($this->isPic)?$this->isPic.',':'';
		$sql.=isset($this->spic)?"'$this->spic',":'';
		$sql.=isset($this->cguid)?"'$this->cguid',":'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->sign)?$this->sign.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->subheading)?"`subheading`='$this->subheading',":'';
		$sql.=isset($this->application)?"`application`='$this->application',":'';
		$sql.=isset($this->types)?"`types`='$this->types',":'';
		$sql.=isset($this->keyword)?"`keyword`='$this->keyword',":'';
		$sql.=isset($this->author)?"`author`='$this->author',":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->editTime)?"`editTime`='$this->editTime',":'';
		$sql.=isset($this->tags)?"`tags`='$this->tags',":'';
		$sql.=isset($this->check)?"`check`=$this->check,":'';
		$sql.=isset($this->pic)?"`pic`='$this->pic',":'';
		$sql.=isset($this->guid)?"`guid`='$this->guid',":'';
		$sql.=isset($this->isPic)?"`isPic`=$this->isPic,":'';
		$sql.=isset($this->spic)?"`spic`='$this->spic',":'';
		$sql.=isset($this->cguid)?"`cguid`='$this->cguid',":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->sign)?"`sign`=$this->sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>