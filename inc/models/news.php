<?php
class c_news extends DtDatabase
{
	public $id;
	public $isTopic;
	public $isImportant;
	public $channelId;
	public $title;
	public $author;
	public $source;
	public $counts;
	public $dtTime;
	public $editTime;
	public $tags;
	public $check;
	public $uname;
	public $summary;
	public $pic;
	public $recommend;
	public $mark;
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
		$this->table_name = TB_PREFIX.'news';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['isTopic'])$this->isTopic=$request['isTopic'];
		if($request['isImportant'])$this->isImportant=$request['isImportant'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['title'])$this->title=$request['title'];
		if($request['author'])$this->author=$request['author'];
		if($request['source'])$this->source=$request['source'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['editTime'])$this->editTime=$request['editTime'];
		if($request['tags'])$this->tags=$request['tags'];
		if($request['check'])$this->check=$request['check'];
		if($request['uname'])$this->uname=$request['uname'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['pic'])$this->pic=$request['pic'];
		if($request['recommend'])$this->recommend=$request['recommend'];
		if($request['mark'])$this->mark=$request['mark'];
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
		$sql.=isset($this->isTopic)?"isTopic,":'';
		$sql.=isset($this->isImportant)?"isImportant,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->author)?"author,":'';
		$sql.=isset($this->source)?"source,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->editTime)?"editTime,":'';
		$sql.=isset($this->tags)?"tags,":'';
		$sql.=isset($this->check)?"check,":'';
		$sql.=isset($this->uname)?"uname,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->pic)?"pic,":'';
		$sql.=isset($this->recommend)?"recommend,":'';
		$sql.=isset($this->mark)?"mark,":'';
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
		$sql.=isset($this->isTopic)?$this->isTopic.',':'';
		$sql.=isset($this->isImportant)?$this->isImportant.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->author)?"'$this->author',":'';
		$sql.=isset($this->source)?"'$this->source',":'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->editTime)?"'$this->editTime',":'';
		$sql.=isset($this->tags)?"'$this->tags',":'';
		$sql.=isset($this->check)?$this->check.',':'';
		$sql.=isset($this->uname)?"'$this->uname',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->pic)?"'$this->pic',":'';
		$sql.=isset($this->recommend)?$this->recommend.',':'';
		$sql.=isset($this->mark)?$this->mark.',':'';
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
		$sql.=isset($this->isTopic)?"`isTopic`=$this->isTopic,":'';
		$sql.=isset($this->isImportant)?"`isImportant`=$this->isImportant,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->author)?"`author`='$this->author',":'';
		$sql.=isset($this->source)?"`source`='$this->source',":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->editTime)?"`editTime`='$this->editTime',":'';
		$sql.=isset($this->tags)?"`tags`='$this->tags',":'';
		$sql.=isset($this->check)?"`check`=$this->check,":'';
		$sql.=isset($this->uname)?"`uname`='$this->uname',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->pic)?"`pic`='$this->pic',":'';
		$sql.=isset($this->recommend)?"`recommend`=$this->recommend,":'';
		$sql.=isset($this->mark)?"`mark`=$this->mark,":'';
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