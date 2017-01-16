<?php
class c_download extends DtDatabase
{
	public $id;
	public $channelId;
	public $softwareName;
	public $softwareSize;
	public $language;
	public $classification;
	public $platform;
	public $dtTime;
	public $introduce;
	public $filePath;
	public $counts;
	public $cguid;
	public $ordering;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'download';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['softwareName'])$this->softwareName=$request['softwareName'];
		if($request['softwareSize'])$this->softwareSize=$request['softwareSize'];
		if($request['language'])$this->language=$request['language'];
		if($request['classification'])$this->classification=$request['classification'];
		if($request['platform'])$this->platform=$request['platform'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['introduce'])$this->introduce=$request['introduce'];
		if($request['filePath'])$this->filePath=$request['filePath'];
		if($request['counts'])$this->counts=$request['counts'];
		if($request['cguid'])$this->cguid=$request['cguid'];
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
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->softwareName)?"softwareName,":'';
		$sql.=isset($this->softwareSize)?"softwareSize,":'';
		$sql.=isset($this->language)?"language,":'';
		$sql.=isset($this->classification)?"classification,":'';
		$sql.=isset($this->platform)?"platform,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->introduce)?"introduce,":'';
		$sql.=isset($this->filePath)?"filePath,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->cguid)?"cguid,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->softwareName)?"'$this->softwareName',":'';
		$sql.=isset($this->softwareSize)?"'$this->softwareSize',":'';
		$sql.=isset($this->language)?"'$this->language',":'';
		$sql.=isset($this->classification)?"'$this->classification',":'';
		$sql.=isset($this->platform)?"'$this->platform',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->introduce)?"'$this->introduce',":'';
		$sql.=isset($this->filePath)?"'$this->filePath',":'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->cguid)?"'$this->cguid',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->softwareName)?"`softwareName`='$this->softwareName',":'';
		$sql.=isset($this->softwareSize)?"`softwareSize`='$this->softwareSize',":'';
		$sql.=isset($this->language)?"`language`='$this->language',":'';
		$sql.=isset($this->classification)?"`classification`='$this->classification',":'';
		$sql.=isset($this->platform)?"`platform`='$this->platform',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->introduce)?"`introduce`='$this->introduce',":'';
		$sql.=isset($this->filePath)?"`filePath`='$this->filePath',":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->cguid)?"`cguid`='$this->cguid',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>