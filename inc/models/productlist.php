<?php
class c_productlist extends DtDatabase
{
	public $id;
	public $name;
	public $sn;
	public $readers;
	public $communications;
	public $introduction;
	public $dtTime;
	public $price;
	public $summary;
	public $parameters;
	public $newsid;
	public $faq;
	public $newsname;
	public $newscontent;
	public $accessories;
	public $softwareid;
	public $publicity;
	public $softwarename;
	public $softwaresize;
	public $softwarepath;
	public $softwarecontent;
	public $categoryId;
	public $origialPic;
	public $middlePic;
	public $smallPic;
	public $documents;
	public $examples;
	public $channelId;
	public $categories;
	public $ordering;
	public $counts;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'productlist';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['name'])$this->name=$request['name'];
		if($request['sn'])$this->sn=$request['sn'];
		if($request['readers'])$this->readers=$request['readers'];
		if($request['communications'])$this->communications=$request['communications'];
		if($request['introduction'])$this->introduction=$request['introduction'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
		if($request['price'])$this->price=$request['price'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['parameters'])$this->parameters=$request['parameters'];
		if($request['newsid'])$this->newsid=$request['newsid'];
		if($request['faq'])$this->faq=$request['faq'];
		if($request['newsname'])$this->newsname=$request['newsname'];
		if($request['newscontent'])$this->newscontent=$request['newscontent'];
		if($request['accessories'])$this->accessories=$request['accessories'];
		if($request['softwareid'])$this->softwareid=$request['softwareid'];
		if($request['publicity'])$this->publicity=$request['publicity'];
		if($request['softwarename'])$this->softwarename=$request['softwarename'];
		if($request['softwaresize'])$this->softwaresize=$request['softwaresize'];
		if($request['softwarepath'])$this->softwarepath=$request['softwarepath'];
		if($request['softwarecontent'])$this->softwarecontent=$request['softwarecontent'];
		if($request['categoryId'])$this->categoryId=$request['categoryId'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['middlePic'])$this->middlePic=$request['middlePic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['documents'])$this->documents=$request['documents'];
		if($request['examples'])$this->examples=$request['examples'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['categories'])$this->categories=$request['categories'];
		if($request['ordering'])$this->ordering=$request['ordering'];
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
		$sql.=isset($this->name)?"name,":'';
		$sql.=isset($this->sn)?"sn,":'';
		$sql.=isset($this->readers)?"readers,":'';
		$sql.=isset($this->communications)?"communications,":'';
		$sql.=isset($this->introduction)?"introduction,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->price)?"price,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->parameters)?"parameters,":'';
		$sql.=isset($this->newsid)?"newsid,":'';
		$sql.=isset($this->faq)?"faq,":'';
		$sql.=isset($this->newsname)?"newsname,":'';
		$sql.=isset($this->newscontent)?"newscontent,":'';
		$sql.=isset($this->accessories)?"accessories,":'';
		$sql.=isset($this->softwareid)?"softwareid,":'';
		$sql.=isset($this->publicity)?"publicity,":'';
		$sql.=isset($this->softwarename)?"softwarename,":'';
		$sql.=isset($this->softwaresize)?"softwaresize,":'';
		$sql.=isset($this->softwarepath)?"softwarepath,":'';
		$sql.=isset($this->softwarecontent)?"softwarecontent,":'';
		$sql.=isset($this->categoryId)?"categoryId,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->middlePic)?"middlePic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->documents)?"documents,":'';
		$sql.=isset($this->examples)?"examples,":'';
		$sql.=isset($this->channelId)?"channelId,":'';
		$sql.=isset($this->categories)?"categories,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->counts)?"counts,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->name)?"'$this->name',":'';
		$sql.=isset($this->sn)?"'$this->sn',":'';
		$sql.=isset($this->readers)?"'$this->readers',":'';
		$sql.=isset($this->communications)?"'$this->communications',":'';
		$sql.=isset($this->introduction)?"'$this->introduction',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->price)?"'$this->price',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->parameters)?"'$this->parameters',":'';
		$sql.=isset($this->newsid)?$this->newsid.',':'';
		$sql.=isset($this->faq)?"'$this->faq',":'';
		$sql.=isset($this->newsname)?"'$this->newsname',":'';
		$sql.=isset($this->newscontent)?"'$this->newscontent',":'';
		$sql.=isset($this->accessories)?"'$this->accessories',":'';
		$sql.=isset($this->softwareid)?$this->softwareid.',':'';
		$sql.=isset($this->publicity)?"'$this->publicity',":'';
		$sql.=isset($this->softwarename)?"'$this->softwarename',":'';
		$sql.=isset($this->softwaresize)?"'$this->softwaresize',":'';
		$sql.=isset($this->softwarepath)?"'$this->softwarepath',":'';
		$sql.=isset($this->softwarecontent)?"'$this->softwarecontent',":'';
		$sql.=isset($this->categoryId)?$this->categoryId.',':'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"'$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->documents)?"'$this->documents',":'';
		$sql.=isset($this->examples)?"'$this->examples',":'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->categories)?"'$this->categories',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->counts)?$this->counts.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->name)?"`name`='$this->name',":'';
		$sql.=isset($this->sn)?"`sn`='$this->sn',":'';
		$sql.=isset($this->readers)?"`readers`='$this->readers',":'';
		$sql.=isset($this->communications)?"`communications`='$this->communications',":'';
		$sql.=isset($this->introduction)?"`introduction`='$this->introduction',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->price)?"`price`='$this->price',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->parameters)?"`parameters`='$this->parameters',":'';
		$sql.=isset($this->newsid)?"`newsid`=$this->newsid,":'';
		$sql.=isset($this->faq)?"`faq`='$this->faq',":'';
		$sql.=isset($this->newsname)?"`newsname`='$this->newsname',":'';
		$sql.=isset($this->newscontent)?"`newscontent`='$this->newscontent',":'';
		$sql.=isset($this->accessories)?"`accessories`='$this->accessories',":'';
		$sql.=isset($this->softwareid)?"`softwareid`=$this->softwareid,":'';
		$sql.=isset($this->publicity)?"`publicity`='$this->publicity',":'';
		$sql.=isset($this->softwarename)?"`softwarename`='$this->softwarename',":'';
		$sql.=isset($this->softwaresize)?"`softwaresize`='$this->softwaresize',":'';
		$sql.=isset($this->softwarepath)?"`softwarepath`='$this->softwarepath',":'';
		$sql.=isset($this->softwarecontent)?"`softwarecontent`='$this->softwarecontent',":'';
		$sql.=isset($this->categoryId)?"`categoryId`=$this->categoryId,":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->middlePic)?"`middlePic`='$this->middlePic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->documents)?"`documents`='$this->documents',":'';
		$sql.=isset($this->examples)?"`examples`='$this->examples',":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->categories)?"`categories`='$this->categories',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->counts)?"`counts`=$this->counts,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>