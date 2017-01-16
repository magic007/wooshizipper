<?php
class c_flash_group extends DtDatabase
{
	public $id;
	public $title;
	public $summary;
	public $dt_time;
	public $sign;
	public $title_text_color;
	public $title_bg_color;
	public $title_bg_alpha;
	public $autoPlayTime;
	public $transformFlag;
	public $btn_text_color;
	public $btn_over_color;
	public $btn_out_color;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'flash_group';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['title'])$this->title=$request['title'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['dt_time'])$this->dt_time=$request['dt_time'];
		if($request['sign'])$this->sign=$request['sign'];
		if($request['title_text_color'])$this->title_text_color=$request['title_text_color'];
		if($request['title_bg_color'])$this->title_bg_color=$request['title_bg_color'];
		if($request['title_bg_alpha'])$this->title_bg_alpha=$request['title_bg_alpha'];
		if($request['autoPlayTime'])$this->autoPlayTime=$request['autoPlayTime'];
		if($request['transformFlag'])$this->transformFlag=$request['transformFlag'];
		if($request['btn_text_color'])$this->btn_text_color=$request['btn_text_color'];
		if($request['btn_over_color'])$this->btn_over_color=$request['btn_over_color'];
		if($request['btn_out_color'])$this->btn_out_color=$request['btn_out_color'];
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
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->dt_time)?"dt_time,":'';
		$sql.=isset($this->sign)?"sign,":'';
		$sql.=isset($this->title_text_color)?"title_text_color,":'';
		$sql.=isset($this->title_bg_color)?"title_bg_color,":'';
		$sql.=isset($this->title_bg_alpha)?"title_bg_alpha,":'';
		$sql.=isset($this->autoPlayTime)?"autoPlayTime,":'';
		$sql.=isset($this->transformFlag)?"transformFlag,":'';
		$sql.=isset($this->btn_text_color)?"btn_text_color,":'';
		$sql.=isset($this->btn_over_color)?"btn_over_color,":'';
		$sql.=isset($this->btn_out_color)?"btn_out_color,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->dt_time)?"'$this->dt_time',":'';
		$sql.=isset($this->sign)?$this->sign.',':'';
		$sql.=isset($this->title_text_color)?"'$this->title_text_color',":'';
		$sql.=isset($this->title_bg_color)?"'$this->title_bg_color',":'';
		$sql.=isset($this->title_bg_alpha)?$this->title_bg_alpha.',':'';
		$sql.=isset($this->autoPlayTime)?$this->autoPlayTime.',':'';
		$sql.=isset($this->transformFlag)?$this->transformFlag.',':'';
		$sql.=isset($this->btn_text_color)?"'$this->btn_text_color',":'';
		$sql.=isset($this->btn_over_color)?"'$this->btn_over_color',":'';
		$sql.=isset($this->btn_out_color)?"'$this->btn_out_color',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->dt_time)?"`dt_time`='$this->dt_time',":'';
		$sql.=isset($this->sign)?"`sign`=$this->sign,":'';
		$sql.=isset($this->title_text_color)?"`title_text_color`='$this->title_text_color',":'';
		$sql.=isset($this->title_bg_color)?"`title_bg_color`='$this->title_bg_color',":'';
		$sql.=isset($this->title_bg_alpha)?"`title_bg_alpha`=$this->title_bg_alpha,":'';
		$sql.=isset($this->autoPlayTime)?"`autoPlayTime`=$this->autoPlayTime,":'';
		$sql.=isset($this->transformFlag)?"`transformFlag`=$this->transformFlag,":'';
		$sql.=isset($this->btn_text_color)?"`btn_text_color`='$this->btn_text_color',":'';
		$sql.=isset($this->btn_over_color)?"`btn_over_color`='$this->btn_over_color',":'';
		$sql.=isset($this->btn_out_color)?"`btn_out_color`='$this->btn_out_color',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>