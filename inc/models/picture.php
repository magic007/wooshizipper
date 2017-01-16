<?php
class c_picture extends DtDatabase
{
	public $id;
	public $channelId;
	public $title;
	public $middlePic;
	public $dtTime;
	public $smallPic;
	public $tags;
	public $description;
	public $isTopic;
	public $isImportant;
	public $counts;
	public $origialPic;
	public $uid;
	public $cguid;
	public $summary;
	public $indexPicture;
	public $ordering;
	public $sign;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'picture';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['title'])$this->title=$request['title'];
		if($request['middlePic'])$this->middlePic=$request['middlePic'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['tags'])$this->tags=$request['tags'];
		if($request['description'])$this->description=$request['description'];
		if($request['isTopic'])$this->isTopic=$request['isTopic'];
		if($request['isImportant'])$this->isImportant=$request['isImportant'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['uid'])$this->uid=$request['uid'];
		if($request['cguid'])$this->cguid=$request['cguid'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['indexPicture'])$this->indexPicture=$request['indexPicture'];
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
		$sql.=isset($this->middlePic)?"middlePic,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->tags)?"tags,":'';
		$sql.=isset($this->description)?"description,":'';
		$sql.=isset($this->isTopic)?"isTopic,":'';
		$sql.=isset($this->isImportant)?"isImportant,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->uid)?"uid,":'';
		$sql.=isset($this->cguid)?"cguid,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->indexPicture)?"indexPicture,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->sign)?"sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->middlePic)?"'$this->middlePic',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->tags)?"'$this->tags',":'';
		$sql.=isset($this->description)?"'$this->description',":'';
		$sql.=isset($this->isTopic)?$this->isTopic.',':'';
		$sql.=isset($this->isImportant)?$this->isImportant.',':'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->uid)?$this->uid.',':'';
		$sql.=isset($this->cguid)?"'$this->cguid',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->indexPicture)?"'$this->indexPicture',":'';
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
		$sql.=isset($this->middlePic)?"`middlePic`='$this->middlePic',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->tags)?"`tags`='$this->tags',":'';
		$sql.=isset($this->description)?"`description`='$this->description',":'';
		$sql.=isset($this->isTopic)?"`isTopic`=$this->isTopic,":'';
		$sql.=isset($this->isImportant)?"`isImportant`=$this->isImportant,":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->uid)?"`uid`=$this->uid,":'';
		$sql.=isset($this->cguid)?"`cguid`='$this->cguid',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->indexPicture)?"`indexPicture`='$this->indexPicture',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->sign)?"`sign`=$this->sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>