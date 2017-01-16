<?php
class c_article extends DtDatabase
{
	public $id;
	public $channelId;
	public $pageId;
	public $pageName;
	public $summary;
	public $content;
	public $dtTime;
	public $cguid;
	public $origialPic;
	public $smallPic;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'article';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['pageId'])$this->pageId=$request['pageId'];
		if($request['pageName'])$this->pageName=$request['pageName'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['content'])$this->content=$request['content'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['cguid'])$this->cguid=$request['cguid'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
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
		$sql.=isset($this->pageId)?"pageId,":'';
		$sql.=isset($this->pageName)?"pageName,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->content)?"content,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->cguid)?"cguid,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->pageId)?$this->pageId.',':'';
		$sql.=isset($this->pageName)?"'$this->pageName',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->cguid)?"'$this->cguid',":'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->pageId)?"`pageId`=$this->pageId,":'';
		$sql.=isset($this->pageName)?"`pageName`='$this->pageName',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->cguid)?"`cguid`='$this->cguid',":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>