<?php 
/**
 * The DataTable UI Components
 * @author Maxazure<maxazure@163.com>
 * @version 1.070130
 * @copyright deepthroat
 * 
 */
class DataTable
{
	public $columns=array();
	public $sb; //sqlbuilder
	public $edit_label;
	public $select_able=true;
	public $name;
	public $tooltip;

	private $out_text;
	private $order_text;
	private $results;


	function __construct($sb,$edit_label='',$select_able=false)
	{
		$this->sb		=$sb;
		$this->edit_label =$edit_label;
		$this->select_able=$select_able;
		$this->name=$sb->name;

		$this->build_pager_code();
		$this->add_pager_code();
		$this->build_header();
	}
	/**
	 * Building a Table header.
	 *
	 */
	private function build_header()
	{
		$this->out_text.='<table id="'.$this->name.'" class="dt-table" cellspacing="0" cellpadding="0" width="100%" border="0"><form id="'.$this->name.'_form" name="'.$this->name.'_form" method="post" action=""><tbody>'."\n";
		if($this->select_able)
		{
			$this->add_col('选择','lable','text',40,'"<input name=\"'.$this->name.'_cbx[]\"  onClick=\"f(\''.$this->name.'_cbx[]\');\" type=\"checkbox\" value=\"$rs[id]\">"');
		}
	}
	/**
	 * Add a </table> tag
	 *
	 */
	private function build_footer()
	{
		$this->out_text.='</tbody></form></table>';
	}
	private function build_pager_code()
	{
		$tempstr= '<table width="100%" class="dt-table-pager" cellspacing="0" cellpadding="0" border="0"><tr>';
		$tempstr.= '<td width="190">'.$this->edit_label.'</td>';
		if($this->select_able)
		$tempstr.= '<td width=""><a href="javascript:btn_check_all(\''.$this->name.'_cbx[]\',true);f(\''.$this->name.'_cbx[]\');">全部选择</a> 
		<a href="javascript:btn_check_all(\''.$this->name.'_cbx[]\',false);f(\''.$this->name.'_cbx[]\');">取消选择</a> </td>';
		else
		$tempstr.='<td width="">&nbsp;</td>';
		$tempstr.= '<td width="440"><div class="dt-table-pagebar">';
		$this->order_text= $tempstr.$this->sb->get_pager_show().'</div></td></tr></table>';
	}
	private function add_pager_code()
	{
		$this->out_text.=$this->order_text;
	}
	/**
	 * Return a td tag. For ex. <td>xxx</td>
	 *
	 * @param string $str
	 * @param int $width
	 * @param int $hight
	 * @param string $css
	 * @return string
	 */
	private function td($str,$width=0,$hight=0,$css="")
	{
		$tempstr = "<td";
		$tempstr .=$width!=0?" width=\"$width\"":'';
		$tempstr .=$hight!=0?" hight=\"$hight\"":'';
		$tempstr .=$css!=0?" css=\"$css\"":'';
		$tempstr .='>'.$str.'</td>';
		return $tempstr;
	}
	/**
	 * Return a th tag. For ex. <th>xxx</th>
	 *
	 * @param string $str
	 * @param int $width
	 * @param int $hight
	 * @param string $css
	 * @return string
	 */
	private function th($str,$width=0,$hight=0,$css="")
	{
		$tempstr = "<th";
		$tempstr .=$width!=0?" width=\"$width\"":'';
		$tempstr .=$hight!=0?" hight=\"$hight\"":'';
		$tempstr .=$css!=0?" css=\"$css\"":'';
		$tempstr .='><div align="left">'.$str.'</div></th>';
		return $tempstr;
	}

	/**
	 * Building a url for ordering
	 *
	 * @return string
	 */
	private function build_order_url()
	{
		$urlstr='?';
		foreach ($_GET as $k=>$v)
		{
			if(strtoupper($k)!=strtoupper($this->name.'o'))
			{
				$urlstr.=$k.'='.$v.'&';
			}
		}
		$urlstr.=$this->name.'o=';
		return $urlstr;
	}

	/**
	 * Add a row by TD tag.
	 *
	 */
	private function build_cols_name()
	{
		$col_str='';
		$order_url_t=$this->build_order_url();
		$tempstr = "<tr>";
		foreach($this->columns as $col)
		{
			// 根据字段类型，设置表头。
			switch($col->data_type)
			{
				case 'db':
					$col_str=$this->order_link($col->name,$col->alias,$order_url_t);
					break;
				case 'text':
					$col_str=$col->alias;
					break;
				default:
					$col_str=$col->alias;
			}

			$tempstr .=$this->th($col_str,$col->width);
		}
		$tempstr .='</tr>';
		$this->out_text.= $tempstr."\n";
	}
	private function order_link($col_name,$col_alias,$order_url)
	{

		$col_str='';
		$orderArr=array();
		if(substr(strtolower($_GET[$this->name.'o']),0,strlen($col_name))==strtolower($col_name))
		{
			if(strlen($_GET[$this->name.'o'])!=strlen($col_name))
			{
				$orderArr=explode('|',$_GET[$this->name.'o']);
				if(((int)$orderArr[1])==0)
				return $this->make_link($order_url.$col_name.'|1',$col_alias.'↑');
				else
				return $this->make_link($order_url.$col_name.'|0',$col_alias.'↓');
			}
			else
			{
				return $this->make_link($order_url.$col_name.'|1',$col_alias.'↑');
			}

		}
		else {
			return $this->make_link($order_url.$col_name.'|0',$col_alias);
		}
	}
	private function make_link($url,$text)
	{
		return '<a href="'.$url.'">'.$text.'</a>';
	}
	private function build_table_body()
	{
		$tempstr='';
		if($this->sb->results)
		{
			foreach ($this->sb->results as $rs)
			{
				if(empty($this->tooltip))
				$tempstr.="<tr onmouseover=\"cy(this);\" onmouseout=\"cw(this);\">";
				else
				$tempstr.="<tr onmouseover=\"cy(this);ddrivetip('".addslashes($this->bind_code($col->bind_code,$rs))."', '', 110)\" onmouseout=\"cw(this);hideddrivetip()\">";
				foreach($this->columns as $col)
				{

					$colstr=$this->bind_code($col->bind_code,$rs);
					$colstr	  =empty($colstr)?$rs[$col->name]:$colstr;
					$tempstr .=$this->td($colstr==''?'&nbsp;':$colstr,$col->width);
				}
				$tempstr .='</tr>';
			}
		}
		else
		{
			$this->out_text.= '<tr><td  colspan="'.count($this->columns).'">暂无记录。</td></tr>';
		}
		$this->out_text.= $tempstr."\n";
	}
	private function bind_code($code,$rs)
	{
		if($code!='')
		{
			$code='$o='.$code.';';
			eval($code);
			return $o;
		}
		else
		return false;
	}
	public function add_col($alias,$field,$data_type,$td_width,$bind_code)
	{
		$col = new stdClass();
		$col->alias=$alias;
		$col->name=$field;
		$col->data_type=$data_type;
		$col->bind_code=$bind_code;
		$col->width=$td_width;
		$this->columns[$field]=$col;
	}
	public function render()
	{

		$this->build_cols_name();
		$this->build_table_body();
		$this->build_footer();
		//$this->add_pager_code();
		return $this->out_text;
	}

}
?>