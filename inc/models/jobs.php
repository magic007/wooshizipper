<?php
class c_jobs extends DtDatabase
{
	public $id;
	public $channelId;
	public $jobName;
	public $jobKind;
	public $requireNum;
	public $experience;
	public $address;
	public $age;
	public $height;
	public $languageSkill;
	public $lastTime;
	public $salary;
	public $educational;
	public $isHouse;
	public $sex;
	public $computerLevel;
	public $summary;
	public $telphone;
	public $email;
	public $dtTime;
	public $ordering;
	public $sign;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'jobs';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['channelId'])$this->channelId=$request['channelId'];
		if($request['jobName'])$this->jobName=$request['jobName'];
		if($request['jobKind'])$this->jobKind=$request['jobKind'];
		if($request['requireNum'])$this->requireNum=$request['requireNum'];
		if($request['experience'])$this->experience=$request['experience'];
		if($request['address'])$this->address=$request['address'];
		if($request['age'])$this->age=$request['age'];
		if($request['height'])$this->height=$request['height'];
		if($request['languageSkill'])$this->languageSkill=$request['languageSkill'];
		if($request['lastTime'])$this->lastTime=$request['lastTime'];
		if($request['salary'])$this->salary=$request['salary'];
		if($request['educational'])$this->educational=$request['educational'];
		if($request['isHouse'])$this->isHouse=$request['isHouse'];
		if($request['sex'])$this->sex=$request['sex'];
		if($request['computerLevel'])$this->computerLevel=$request['computerLevel'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['telphone'])$this->telphone=$request['telphone'];
		if($request['email'])$this->email=$request['email'];
		if($request['dtTime'])$this->dtTime=$request['dtTime'];
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
		$sql.=isset($this->jobName)?"jobName,":'';
		$sql.=isset($this->jobKind)?"jobKind,":'';
		$sql.=isset($this->requireNum)?"requireNum,":'';
		$sql.=isset($this->experience)?"experience,":'';
		$sql.=isset($this->address)?"address,":'';
		$sql.=isset($this->age)?"age,":'';
		$sql.=isset($this->height)?"height,":'';
		$sql.=isset($this->languageSkill)?"languageSkill,":'';
		$sql.=isset($this->lastTime)?"lastTime,":'';
		$sql.=isset($this->salary)?"salary,":'';
		$sql.=isset($this->educational)?"educational,":'';
		$sql.=isset($this->isHouse)?"isHouse,":'';
		$sql.=isset($this->sex)?"sex,":'';
		$sql.=isset($this->computerLevel)?"computerLevel,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->telphone)?"telphone,":'';
		$sql.=isset($this->email)?"email,":'';
		$sql.=isset($this->dtTime)?"dtTime,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->sign)?"sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->channelId)?$this->channelId.',':'';
		$sql.=isset($this->jobName)?"'$this->jobName',":'';
		$sql.=isset($this->jobKind)?"'$this->jobKind',":'';
		$sql.=isset($this->requireNum)?$this->requireNum.',':'';
		$sql.=isset($this->experience)?"'$this->experience',":'';
		$sql.=isset($this->address)?"'$this->address',":'';
		$sql.=isset($this->age)?"'$this->age',":'';
		$sql.=isset($this->height)?"'$this->height',":'';
		$sql.=isset($this->languageSkill)?"'$this->languageSkill',":'';
		$sql.=isset($this->lastTime)?"'$this->lastTime',":'';
		$sql.=isset($this->salary)?"'$this->salary',":'';
		$sql.=isset($this->educational)?"'$this->educational',":'';
		$sql.=isset($this->isHouse)?"'$this->isHouse',":'';
		$sql.=isset($this->sex)?"'$this->sex',":'';
		$sql.=isset($this->computerLevel)?"'$this->computerLevel',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->telphone)?"'$this->telphone',":'';
		$sql.=isset($this->email)?"'$this->email',":'';
		$sql.=isset($this->dtTime)?"'$this->dtTime',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->sign)?$this->sign.',':'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->channelId)?"`channelId`=$this->channelId,":'';
		$sql.=isset($this->jobName)?"`jobName`='$this->jobName',":'';
		$sql.=isset($this->jobKind)?"`jobKind`='$this->jobKind',":'';
		$sql.=isset($this->requireNum)?"`requireNum`=$this->requireNum,":'';
		$sql.=isset($this->experience)?"`experience`='$this->experience',":'';
		$sql.=isset($this->address)?"`address`='$this->address',":'';
		$sql.=isset($this->age)?"`age`='$this->age',":'';
		$sql.=isset($this->height)?"`height`='$this->height',":'';
		$sql.=isset($this->languageSkill)?"`languageSkill`='$this->languageSkill',":'';
		$sql.=isset($this->lastTime)?"`lastTime`='$this->lastTime',":'';
		$sql.=isset($this->salary)?"`salary`='$this->salary',":'';
		$sql.=isset($this->educational)?"`educational`='$this->educational',":'';
		$sql.=isset($this->isHouse)?"`isHouse`='$this->isHouse',":'';
		$sql.=isset($this->sex)?"`sex`='$this->sex',":'';
		$sql.=isset($this->computerLevel)?"`computerLevel`='$this->computerLevel',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->telphone)?"`telphone`='$this->telphone',":'';
		$sql.=isset($this->email)?"`email`='$this->email',":'';
		$sql.=isset($this->dtTime)?"`dtTime`='$this->dtTime',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->sign)?"`sign`=$this->sign,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>