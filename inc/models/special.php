<?php
class c_special extends DtDatabase
{
	public $id;
	public $name;
	public $explanation;
	public $songList;
	public $summary;
	public $content;
	public $dtTime;
	public $publishTime;
	public $origialPic;
	public $middlePic;
	public $smallPic;
	public $categoryId;
	public $counts;
	public $ordering;
	public $isCommend;
	public $channelId;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'special';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['name'])$this->name=$request['name'];
		if($request['explanation'])$this->explanation=$request['explanation'];
		if($request['songList'])$this->songList=$request['songList'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['content'])$this->content=$request['content'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['publishTime'])$this->publishTime=$request['publishTime'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['middlePic'])$this->middlePic=$request['middlePic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['categoryId'])$this->categoryId=$request['categoryId'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['ordering'])$this->ordering=$request['ordering'];
		if($request['isCommend'])$this->isCommend=$request['isCommend'];
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
		$sql.=isset($this->name)?"name,":'';
		$sql.=isset($this->explanation)?"explanation,":'';
		$sql.=isset($this->songList)?"songList,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->content)?"content,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->publishTime)?"publishTime,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->middlePic)?"middlePic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->categoryId)?"categoryId,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->isCommend)?"isCommend,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->name)?"'$this->name',":'';
		$sql.=isset($this->explanation)?"'$this->explanation',":'';
		$sql.=isset($this->songList)?"'$this->songList',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->publishTime)?"'$this->publishTime',":'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"'$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->categoryId)?$this->categoryId.',':'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->isCommend)?$this->isCommend.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->name)?"`name`='$this->name',":'';
		$sql.=isset($this->explanation)?"`explanation`='$this->explanation',":'';
		$sql.=isset($this->songList)?"`songList`='$this->songList',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->publishTime)?"`publishTime`='$this->publishTime',":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"`middlePic`='$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->categoryId)?"`categoryId`=$this->categoryId,":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->isCommend)?"`isCommend`=$this->isCommend,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>