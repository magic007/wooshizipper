<?php 
function index()
{
	require_once(ABSPATH.'/inc/class.categorytree.php');
	global $product,$product_category,$db,$request;
	
	$product_category = $db->get_results('select * from `'.TB_PREFIX.'product_category` where channelId='.$request['p']);	
	
	if($request['c']=='0')
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'product` order by case ordering when 0 then id else ordering end desc) as `product` where channelId='.$request['p'],'ordering desc',$db,12);
	else
	$sb = new sqlbuilder('mdt','select * from (SELECT * FROM `'.TB_PREFIX.'product` order by case ordering when 0 then id else ordering end desc) as `product` where categoryId='.$request['c'],'ordering desc',$db,12);
	
	$product = new DataTable($sb,'产品列表页面');
	$product->add_col('产品型号','sn','db',200,'"$rs[sn]"');
	$product->add_col('产品名称','name','db',0,'"<a href=\"./?a=edit&p='.$request['p'].'&n=$rs[id]&l='.$request['l'].'\">$rs[name]</a>"');
	$product->add_col('市场价','sellingPrice','db',80,'"$rs[sellingPrice]"');
	$product->add_col('优惠价','preferPrice','db',80,'"$rs[preferPrice]"');
	if($request['c']!='0')
	$product->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p='.$request['p'].'&c='.$request['c'].'&n=$rs[id]&l='.$request['l'].'\"  onclick=\"return confirm(\'您确认要删除该产品?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p='.$request['p'].'&c='.$request['c'].'&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	else
	$product->add_col('操作','edit','text',140,'"<a href=\"./?a=destroy&p='.$request['p'].'&n=$rs[id]&l='.$request['l'].'\"  onclick=\"return confirm(\'您确认要删除该产品?一旦删除，将不可恢复。\');\">[删除]</a>|<a href=\"./?a=edit&p='.$request['p'].'&n=$rs[id]&l='.$request['l'].'\">[修改]</a>"');
	$product->add_col('排序[降序]','ordering','text',70,'"<input name=\"ordering[$rs[id]]\" onkeypress=\"return checkNumber(event)\" type=\"text\" value=\"$rs[ordering]\" class=\"txt\" size=\"2\" />"');
}
function create()
{
	global $request;
	if($_POST)
	{
		if(!empty($_FILES['uploadfile'])&&empty($request['lpic']))
		{
			$product = new product();
			$product->addnew();
			$product->get_request($request);
			$product->dtTime = date("Y-m-d H:i:s");
			$product->channelId = $request['p'];

			$upload = new Upload();
			if(!empty($_FILES['uploadfile']['name']))
			{
				$fileName = $upload->SaveFile('uploadfile');
				$product->origialPic = UPLOADPATH.$fileName;

				$paint = new Paint($product->origialPic);
				$product->smallPic= $paint->Resize(140,105,'s_');
				$product->middlePic = $paint->Resize(460,345,'m_');
				$product->indexPicture=$paint->Resize(productWidth,productHight,'i_');
			}
			$product->categoryId=$request['c'];
		}
		else
		{
			$product = new product();
			$product->addnew();
			$product->get_request($request);
			$product->channelId = $request['p'];
			$product->dtTime = date("Y-m-d H:i:s");
		}
		if($product->save())
		{
			if(!empty($request['c']))
				redirect("./?p=$request[p]&l=$request[l]&c=$request[c]");
			else
				redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '添加失败！';
		}
	}
}
function edit()
{
	global $db,$request,$product;
	$id = $request['n'];
	if(empty($request['name']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."product WHERE id='$id'";
		$product = $db->get_row($sql);
	}
	else
	{
		if(!empty($_FILES['uploadfile']['name'])&&empty($request['origialPic']))
		{
			$id = $request['n'];
			$sql = "SELECT * FROM ".TB_PREFIX."product WHERE id='$id' limit 1";
			$row = $db->get_row($sql);
			if($row)
			{
				if(!empty($row->origialPic) && file_exists(ABSPATH.$row->origialPic))
				{
					unlink(ABSPATH.$row->origialPic);
					unlink(ABSPATH.$row->middlePic);
					unlink(ABSPATH.$row->smallPic);
					unlink(ABSPATH.$row->indexPicture);
				}
			}

			$product = new product();
			$product->get_request($request);
			$product->id=$id;
			$product->channelId = $request['p'];
			$product->dtTime = date("Y-m-d H:i:s");

			$upload = new Upload();
			$fileName = $upload->SaveFile('uploadfile');
			$product->origialPic = UPLOADPATH.$fileName;

			$paint = new Paint($product->origialPic);
			$product->smallPic= $paint->Resize(140,105,'s_');
			$product->middlePic = $paint->Resize(460,345,'m_');
			$product->indexPicture=$paint->Resize(productWidth,productHight,'i_');
		}
		else
		{
			$product = new product();
			$product->get_request($request);
			$product->id=$id;
			$product->channelId = $request['p'];
			$product->dtTime = date("Y-m-d H:i:s");
			if(empty($request['origialPic']))
			{
				$product->origialPic = '';
				$product->middlePic = '';
				$product->smallPic = '';
				$product->indexPicture = '';
			}
			else
			{
				$tempPic = explode('/',$request['origialPic']);
				if($tempPic[0]=='http:')
				{
					$product->origialPic = $request['origialPic'];
					$product->middlePic = $request['origialPic'];
					$product->smallPic = $request['origialPic'];
					$product->indexPicture = $request['origialPic'];
				}
				else
				{
					$product->middlePic = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'m_'.$tempPic[3];
					$product->smallPic = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'s_'.$tempPic[3];
					$product->indexPicture = '/'.$tempPic[1].'/'.$tempPic[2].'/'.'i_'.$tempPic[3];
				}	
			}		
		}
		if($product->save())
		{
			if(!empty($request['c']))
				redirect("./?p=$request[p]&l=$request[l]&c=$request[c]");
			else
				redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '修改失败！';
		}
	}
}

function destroy()
{
	global $db,$request;
	if(!empty($request['n']))
	{
		//先删除图片，再删除数据库路径
		$id = $request['n'];
		$sql = "SELECT * FROM ".TB_PREFIX."product WHERE id='$id' limit 1";
		$row = $db->get_row($sql);
		if($row)
		{
			if(file_exists(ABSPATH.$row->origialPic))
			{
				unlink(ABSPATH.$row->origialPic);
				unlink(ABSPATH.$row->middlePic);
				unlink(ABSPATH.$row->smallPic);
				unlink(ABSPATH.$row->indexPicture);
			}
		}
		//在此删除路径
		$sql='delete from '.TB_PREFIX.'product where id='.$request['n'].' limit 1';
		if($db->query($sql))
		{
			if(!empty($request['c']))
				redirect("./?p=$request[p]&l=$request[l]&c=$request[c]");
			else
				redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除失败！';
		}
	}
}

function createcategory()
{
	global $request;
	if($_POST)
	{
		$product_category = new product_category();
		$product_category->addnew();
		$product_category->get_request($request);
		$product_category->dtTime = date("Y-m-d H:i:s");
		if(!empty($request['c']))
		$product_category->parentId=$request['c'];
		if(!empty($request['d']))
		$product_category->deep=$request['d'];
		$product_category->channelId=$request['p'];
		if($product_category->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '添加类别失败！';
		}
	}
}
function editcategory()
{
	global $db,$request,$product_category;
	$id = $request['c'];
	if(empty($request['title']))
	{
		$sql = "SELECT * FROM ".TB_PREFIX."product_category WHERE id='$id'";
		$product_category = $db->get_row($sql);
	}
	else
	{
		$product_category = new product_category();
		$product_category->id = $id;
		$product_category->get_request($request);
		$product_category->dtTime = date("Y-m-d H:i:s");
		if($product_category->save())
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else
		{
			echo '修改类别失败！';
		}
	}
}
function destroycategory()
{
	global $db,$request;
	if(!empty($request['c']))
	{
		$sql='delete from '.TB_PREFIX.'product_category where id='.$request['c'].' limit 1';
		if($db->query($sql))
		{
			redirect("./?p=$request[p]&l=$request[l]");
		}
		else {
			echo '删除类别失败！';
		}
	}
}
function ordering()
{
	global $db,$request;
	$ordering = $request['ordering'];
	foreach($ordering as $key=>$value)
	{
		$sql ='update '.TB_PREFIX.'product set ordering='.$value.' where id='.$key;
		$db->query($sql);
	}
	redirect("./?p=$request[p]&l=$request[l]");
}
?>