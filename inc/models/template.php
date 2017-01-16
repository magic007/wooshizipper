<?php
class c_template extends DtDatabase
{
	public $id;
	public $channelId;
	public $templateName;
	public $templateSize;
	public $classification;
	public $platform;
	public $picture;
	public $smallPic;
	public $dtTime;
	public $introduce;
	public $filePath;
	public $counts;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'template';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['templateName'])$this->templateName=$request['templateName'];
		if($request['templateSize'])$this->templateSize=$request['templateSize'];
		if($request['classification'])$this->classification=$request['classification'];
		if($request['platform'])$this->platform=$request['platform'];
		if($request['picture'])$this->picture=$request['picture'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['introduce'])$this->introduce=$request['introduce'];
		if($request['filePath'])$this->filePath=$request['filePath'];
		if($request['counts'])$this->counts=$request['counts'];
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
		$sql.=isset($this->templateName)?"templateName,":'';
		$sql.=isset($this->templateSize)?"templateSize,":'';
		$sql.=isset($this->classification)?"classification,":'';
		$sql.=isset($this->platform)?"platform,":'';
		$sql.=isset($this->picture)?"picture,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->introduce)?"introduce,":'';
		$sql.=isset($this->filePath)?"filePath,":'';
		$sql.=isset($this->counts)?"counts,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->templateName)?"'$this->templateName',":'';
		$sql.=isset($this->templateSize)?"'$this->templateSize',":'';
		$sql.=isset($this->classification)?"'$this->classification',":'';
		$sql.=isset($this->platform)?"'$this->platform',":'';
		$sql.=isset($this->picture)?"'$this->picture',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->introduce)?"'$this->introduce',":'';
		$sql.=isset($this->filePath)?"'$this->filePath',":'';
		$sql.=isset($this->counts)?$this->counts.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->templateName)?"`templateName`='$this->templateName',":'';
		$sql.=isset($this->templateSize)?"`templateSize`='$this->templateSize',":'';
		$sql.=isset($this->classification)?"`classification`='$this->classification',":'';
		$sql.=isset($this->platform)?"`platform`='$this->platform',":'';
		$sql.=isset($this->picture)?"`picture`='$this->picture',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->introduce)?"`introduce`='$this->introduce',":'';
		$sql.=isset($this->filePath)?"`filePath`='$this->filePath',":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>