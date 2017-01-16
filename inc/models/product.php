<?php
class c_product extends DtDatabase
{
	public $id;
	public $channelId;
	public $name;
	public $sn;
	public $spec;
	public $dtTime;
	public $sellingPrice;
	public $preferPrice;
	public $summary;
	public $content;
	public $origialPic;
	public $middlePic;
	public $smallPic;
	public $indexPicture;
	public $categoryId;
	public $counts;
	public $ordering;
	public $sign;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'product';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['name'])$this->name=$request['name'];
		if($request['sn'])$this->sn=$request['sn'];
		if($request['spec'])$this->spec=$request['spec'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['sellingPrice'])$this->sellingPrice=$request['sellingPrice'];
		if($request['preferPrice'])$this->preferPrice=$request['preferPrice'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['content'])$this->content=$request['content'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['middlePic'])$this->middlePic=$request['middlePic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['indexPicture'])$this->indexPicture=$request['indexPicture'];
		if($request['categoryId'])$this->categoryId=$request['categoryId'];
		if($request['counts'])$this->counts=$request['counts'];
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
		$sql.=isset($this->name)?"name,":'';
		$sql.=isset($this->sn)?"sn,":'';
		$sql.=isset($this->spec)?"spec,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->sellingPrice)?"sellingPrice,":'';
		$sql.=isset($this->preferPrice)?"preferPrice,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->content)?"content,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->middlePic)?"middlePic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->indexPicture)?"indexPicture,":'';
		$sql.=isset($this->categoryId)?"categoryId,":'';
		$sql.=isset($this->counts)?"counts,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->sign)?"sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->name)?"'$this->name',":'';
		$sql.=isset($this->sn)?"'$this->sn',":'';
		$sql.=isset($this->spec)?"'$this->spec',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->sellingPrice)?"'$this->sellingPrice',":'';
		$sql.=isset($this->preferPrice)?"'$this->preferPrice',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->content)?"'$this->content',":'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"'$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->indexPicture)?"'$this->indexPicture',":'';
		$sql.=isset($this->categoryId)?$this->categoryId.',':'';
		$sql.=isset($this->counts)?$this->counts.',':'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->sign)?$this->sign.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->name)?"`name`='$this->name',":'';
		$sql.=isset($this->sn)?"`sn`='$this->sn',":'';
		$sql.=isset($this->spec)?"`spec`='$this->spec',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->sellingPrice)?"`sellingPrice`='$this->sellingPrice',":'';
		$sql.=isset($this->preferPrice)?"`preferPrice`='$this->preferPrice',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->content)?"`content`='$this->content',":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"`middlePic`='$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->indexPicture)?"`indexPicture`='$this->indexPicture',":'';
		$sql.=isset($this->categoryId)?"`categoryId`=$this->categoryId,":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->sign)?"`sign`=$this->sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>