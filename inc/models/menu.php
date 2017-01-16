<?php
class c_menu extends DtDatabase
{
	public $id;
	public $menuName;
	public $title;
	public $summary;
	public $keys;
	public $type;
	public $ordering;
	public $link;
	public $deep;
	public $parentId;
	public $params;
	public $published;
	public $isClaw;
	public $template;
	public $isfun;
	public $isComment;
	public $level;
	public $isHidden;
	public $origialPic;
	public $smallPic;
	public $width;
	public $hight;
	public $isExternalLinks;
	public $dtLanguage;
	public $redirectUrl;
	public $related_common;

	public $primary_key='id';

	protected $table_name;
	private $im_virgin=false;

	public function __construct()
	{
		$this->table_name = TB_PREFIX.'menu';
		$this->DtDatabase();		
}
	public function get_request($request=array())
	{
		if(!empty($request)){
		if($request['id'])$this->id=$request['id'];
		if($request['menuName'])$this->menuName=$request['menuName'];
		if($request['title'])$this->title=$request['title'];
		if($request['summary'])$this->summary=$request['summary'];
		if($request['keys'])$this->keys=$request['keys'];
		if($request['type'])$this->type=$request['type'];
		if($request['ordering'])$this->ordering=$request['ordering'];
		if($request['link'])$this->link=$request['link'];
		if($request['deep'])$this->deep=$request['deep'];
		if($request['parentId'])$this->parentId=$request['parentId'];
		if($request['params'])$this->params=$request['params'];
		if($request['published'])$this->published=$request['published'];
		if($request['isClaw'])$this->isClaw=$request['isClaw'];
		if($request['template'])$this->template=$request['template'];
		if($request['isfun'])$this->isfun=$request['isfun'];
		if($request['isComment'])$this->isComment=$request['isComment'];
		if($request['level'])$this->level=$request['level'];
		if($request['isHidden'])$this->isHidden=$request['isHidden'];
		if($request['origialPic'])$this->origialPic=$request['origialPic'];
		if($request['smallPic'])$this->smallPic=$request['smallPic'];
		if($request['width'])$this->width=$request['width'];
		if($request['hight'])$this->hight=$request['hight'];
		if($request['isExternalLinks'])$this->isExternalLinks=$request['isExternalLinks'];
		if($request['dtLanguage'])$this->dtLanguage=$request['dtLanguage'];
		if($request['redirectUrl'])$this->redirectUrl=$request['redirectUrl'];
		if($request['related_common'])$this->related_common=$request['related_common'];
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
		$sql.=isset($this->menuName)?"menuName,":'';
		$sql.=isset($this->title)?"title,":'';
		$sql.=isset($this->summary)?"summary,":'';
		$sql.=isset($this->keys)?"keys,":'';
		$sql.=isset($this->type)?"type,":'';
		$sql.=isset($this->ordering)?"ordering,":'';
		$sql.=isset($this->link)?"link,":'';
		$sql.=isset($this->deep)?"deep,":'';
		$sql.=isset($this->parentId)?"parentId,":'';
		$sql.=isset($this->params)?"params,":'';
		$sql.=isset($this->published)?"published,":'';
		$sql.=isset($this->isClaw)?"isClaw,":'';
		$sql.=isset($this->template)?"template,":'';
		$sql.=isset($this->isfun)?"isfun,":'';
		$sql.=isset($this->isComment)?"isComment,":'';
		$sql.=isset($this->level)?"level,":'';
		$sql.=isset($this->isHidden)?"isHidden,":'';
		$sql.=isset($this->origialPic)?"origialPic,":'';
		$sql.=isset($this->smallPic)?"smallPic,":'';
		$sql.=isset($this->width)?"width,":'';
		$sql.=isset($this->hight)?"hight,":'';
		$sql.=isset($this->isExternalLinks)?"isExternalLinks,":'';
		$sql.=isset($this->dtLanguage)?"dtLanguage,":'';
		$sql.=isset($this->redirectUrl)?"redirectUrl,":'';
		$sql.=isset($this->related_common)?"related_common,":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=")VALUES (";
		$sql.=isset($this->id)?$this->id.',':'';
		$sql.=isset($this->menuName)?"'$this->menuName',":'';
		$sql.=isset($this->title)?"'$this->title',":'';
		$sql.=isset($this->summary)?"'$this->summary',":'';
		$sql.=isset($this->keys)?"'$this->keys',":'';
		$sql.=isset($this->type)?"'$this->type',":'';
		$sql.=isset($this->ordering)?$this->ordering.',':'';
		$sql.=isset($this->link)?"'$this->link',":'';
		$sql.=isset($this->deep)?$this->deep.',':'';
		$sql.=isset($this->parentId)?$this->parentId.',':'';
		$sql.=isset($this->params)?"'$this->params',":'';
		$sql.=isset($this->published)?$this->published.',':'';
		$sql.=isset($this->isClaw)?$this->isClaw.',':'';
		$sql.=isset($this->template)?"'$this->template',":'';
		$sql.=isset($this->isfun)?$this->isfun.',':'';
		$sql.=isset($this->isComment)?$this->isComment.',':'';
		$sql.=isset($this->level)?$this->level.',':'';
		$sql.=isset($this->isHidden)?$this->isHidden.',':'';
		$sql.=isset($this->origialPic)?"'$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"'$this->smallPic',":'';
		$sql.=isset($this->width)?$this->width.',':'';
		$sql.=isset($this->hight)?$this->hight.',':'';
		$sql.=isset($this->isExternalLinks)?$this->isExternalLinks.',':'';
		$sql.=isset($this->dtLanguage)?"'$this->dtLanguage',":'';
		$sql.=isset($this->redirectUrl)?"'$this->redirectUrl',":'';
		$sql.=isset($this->related_common)?"'$this->related_common',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);		$sql.=')';

		}
		else{

		eval('$pid=$this->'.$this->primary_key.';$this->'.$this->primary_key.'=NULL;');

		$sql.="UPDATE `$this->table_name` SET ";
		$sql.=isset($this->id)?"`id`=$this->id,":'';
		$sql.=isset($this->menuName)?"`menuName`='$this->menuName',":'';
		$sql.=isset($this->title)?"`title`='$this->title',":'';
		$sql.=isset($this->summary)?"`summary`='$this->summary',":'';
		$sql.=isset($this->keys)?"`keys`='$this->keys',":'';
		$sql.=isset($this->type)?"`type`='$this->type',":'';
		$sql.=isset($this->ordering)?"`ordering`=$this->ordering,":'';
		$sql.=isset($this->link)?"`link`='$this->link',":'';
		$sql.=isset($this->deep)?"`deep`=$this->deep,":'';
		$sql.=isset($this->parentId)?"`parentId`=$this->parentId,":'';
		$sql.=isset($this->params)?"`params`='$this->params',":'';
		$sql.=isset($this->published)?"`published`=$this->published,":'';
		$sql.=isset($this->isClaw)?"`isClaw`=$this->isClaw,":'';
		$sql.=isset($this->template)?"`template`='$this->template',":'';
		$sql.=isset($this->isfun)?"`isfun`=$this->isfun,":'';
		$sql.=isset($this->isComment)?"`isComment`=$this->isComment,":'';
		$sql.=isset($this->level)?"`level`=$this->level,":'';
		$sql.=isset($this->isHidden)?"`isHidden`=$this->isHidden,":'';
		$sql.=isset($this->origialPic)?"`origialPic`='$this->origialPic',":'';
		$sql.=isset($this->smallPic)?"`smallPic`='$this->smallPic',":'';
		$sql.=isset($this->width)?"`width`=$this->width,":'';
		$sql.=isset($this->hight)?"`hight`=$this->hight,":'';
		$sql.=isset($this->isExternalLinks)?"`isExternalLinks`=$this->isExternalLinks,":'';
		$sql.=isset($this->dtLanguage)?"`dtLanguage`='$this->dtLanguage',":'';
		$sql.=isset($this->redirectUrl)?"`redirectUrl`='$this->redirectUrl',":'';
		$sql.=isset($this->related_common)?"`related_common`='$this->related_common',":'';
if(substr($sql,strlen($str)-1,1)==',')$sql=substr($sql,0,strlen($str)-1);
		$sql.=" WHERE `$this->primary_key` ='$pid' LIMIT 1";
		}
		return $this->query($sql);
	}
}
?>