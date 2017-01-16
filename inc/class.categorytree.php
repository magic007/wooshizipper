<?php 
class contentCategoryTree
{
	var $db;
	// error messages
	var $menuRoot = null;
	//用在显示目录HTML的时候
	var $deepSign = 0;
	
	var $strarr = null;
	var $select_strarr = null;
	var $select_id = null;
	var $span_style = null;
	
	function contentCategoryTree($pid,$strarr,$select_strarr,$select_id,$span_style='')
	{
		$this->strarr = $strarr;
		$this->select_strarr = $select_strarr;
		$this->select_id = $select_id;
		$this->span_style = $span_style;
		$db = new DtDatabase();
		$this->menuRoot = $db->get_results("select * from ".TB_PREFIX."product_category where channelId =".$pid." order by ordering desc");
		
		if(!empty($this->menuRoot))
		{
			$mRoot = $this->getDeep($this->menuRoot,0);
			if(!empty($mRoot))
			{
				foreach($mRoot as $o)
				{
					$this->findChild($o);
				}
			}
		}
	}
	function findChild($inputMenu)
	{
		global $pfileName;
		$tempArr=array();
		if(!empty($this->menuRoot))
		{
			foreach($this->menuRoot as $o)
			{
				if($o->parentId == $inputMenu->id)
				{
					$tempArr[]=$o;
				}
			}
		}
		//echo '<li>'.$this->printDeep($inputMenu->deep).$inputMenu->title.'</li>';
		if(URLREWRITE)
		{
			if(empty($this->span_style))
			{
				if($inputMenu->id == $this->select_id)
				echo $this->select_strarr[0].'<a href="/html/'.get_menuName($inputMenu->channelId).'/'.$inputMenu->id.'.html">'.$this->printDeep($inputMenu->deep).$inputMenu->title."</a>".$this->select_strarr[1];
				else
				echo $this->strarr[0].'<a href="/html/'.get_menuName($inputMenu->channelId).'/'.$inputMenu->id.'.html">'.$this->printDeep($inputMenu->deep).$inputMenu->title."</a>".$this->strarr[1];
			}
			else
			{
				if($inputMenu->id == $this->select_id)
				echo $this->select_strarr[0].'<a href="/html/'.get_menuName($inputMenu->channelId).'/'.$inputMenu->id.'.html">'.$this->span_style.$this->printDeep($inputMenu->deep).$inputMenu->title."</span></a>".$this->select_strarr[1];
				else
				echo $this->strarr[0].'<a href="/html/'.get_menuName($inputMenu->channelId).'/'.$inputMenu->id.'.html">'.$this->span_style.$this->printDeep($inputMenu->deep).$inputMenu->title."</span></a>".$this->strarr[1];
			}
		}
		else
		{
			if(empty($this->span_style))
			{
				if($inputMenu->id == $this->select_id)
				echo $this->select_strarr[0].'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'">'.$this->printDeep($inputMenu->deep).$inputMenu->title."</a>".$this->select_strarr[1];
				else
				echo $this->strarr[0].'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'">'.$this->printDeep($inputMenu->deep).$inputMenu->title."</a>".$this->strarr[1];
			}
			else
			{
				if($inputMenu->id == $this->select_id)
				echo $this->select_strarr[0].'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'">'.$this->span_style.$this->printDeep($inputMenu->deep).$inputMenu->title."</span></a>".$this->select_strarr[1];
				else
				echo $this->strarr[0].'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'">'.$this->span_style.$this->printDeep($inputMenu->deep).$inputMenu->title."</span></a>".$this->strarr[1];
			}
		}
		if(count($tempArr)>0)
		{
			foreach($tempArr as $o)
			{
				$this->findChild($o);
			}
			return true;
		}
		else
		{
			return false;
		}
	}
	function printDeep($deep)
	{
		$tempStr="";
		for($i=-1;$i<$deep;$i++)
		{
			if($i==($deep-1))
			$tempStr.='';
			else
			$tempStr.='&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		return $tempStr;
	}
	function getDeep($arr,$deep)
	{
		$tempArr = array();
		if(!empty($arr))
		{
			foreach($arr as $key=>$o)
			{
				if($o->deep == $deep)
				{
					$tempArr[] = $o;
				}
			}
			return $tempArr;
		}
	}
}


class adminCategoryTree
{
	var $menuRoot = null;
	//用在显示目录HTML的时候
	var $deepSign = 0;
	var $selectId = 0;
	
	function adminCategoryTree($product_category,$selectId=0)
	{
		if(!empty($product_category))
		{
			$this->menuRoot = $product_category;
			$this->selectId = $selectId;
			$aRoot = $this->getDeep($this->menuRoot,0);
			if(!empty($aRoot))
			{
				foreach($aRoot as $o)
				{
					$this->findChild($o);
				}
			}
		}			
	}
	function findChild($inputMenu)
	{
		$tempArr=array();
		if(!empty($this->menuRoot))
		{
			foreach($this->menuRoot as $o)
			{
				if($o->parentId == $inputMenu->id)
				{
					$tempArr[]=$o;
				}
			}
		}
		if($this->selectId==$inputMenu->id)
		echo '<tr style="background-color:#C5EAF5;height:20px;"><td><b><span>'.$this->printDeep($inputMenu->deep).'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'&d='.strval(intval($inputMenu->deep)+1).'">'.$inputMenu->title.'</a></span></b></td></tr>';
		else
		echo '<tr style="background-color:#f2f2f2;height:20px"><td><b><span>'.$this->printDeep($inputMenu->deep).'<a href="./?p='.$inputMenu->channelId.'&c='.$inputMenu->id.'&d='.strval(intval($inputMenu->deep)+1).'">'.$inputMenu->title.'</a></span></b></td></tr>';
		if(count($tempArr)>0)
		{
			foreach($tempArr as $o)
			{
				$this->findChild($o);
			}
			return true;
		}
		else
		{
			return false;
		}
	}
	function printDeep($deep)
	{
		$tempStr="";
		for($i=-1;$i<$deep;$i++)
		{
			if($i==($deep-1))
			$tempStr.='⊕';
			else
			$tempStr.='&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		return $tempStr;
	}
	function getDeep($arr,$deep)
	{
		$tempArr = array();
		foreach($arr as $key=>$o)
		{
			if($o->deep == $deep)
			{
				$tempArr[] = $o;
			}
		}
		return $tempArr;
	}
}
?>