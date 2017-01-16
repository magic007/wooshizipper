<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<br /><br />
<?php product_list() ?>
<div class="clear"></div>
<div  id="articeBottom"><?php global $sb; if($sb->results)
echo $sb->get_pager_show()?></div>
<?php
function product_list()
{
    global $db,$params,$request,$pfileName,$sb;

    if(intval($request['c'])>0)
    {
        $totalc=1;  //包含的子分类数目，初始化为1
        $tempCategoryIds = $request['c'];   //子分类id连接串
        $addnewflag=false;  //标记是否新增了子分类
        do
		{
			$pid = $db->get_results("select * from ".TB_PREFIX."product_category where parentId in(".$tempCategoryIds.")"); 
			if(count($pid)>($totalc-1))
			{ 
				//新增了子分类，重新生成id连接串
				$totalc=count($pid)+1;
				$tempCategoryIds = $request['c']; 
				if($pid)
				{
					foreach($pid as $o) 
					{ 
						$tempCategoryIds .= ','.$o->id; 
					} 
				}
				$addnewflag=true;  //标记是否新增了子分类
            }
			else
			{
				$addnewflag=false;  //标记没有新增子分类
			}
        }
		while($addnewflag);


        if(!empty($tempCategoryIds))
        {
            if(URLREWRITE)
            {
            if (empty($request['c']))
                $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else 

ordering end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'/');
            else
                $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else 

ordering end desc) as `product` where channelId=$params[id] and categoryId in(".$tempCategoryIds.")",'ordering desc',$db,productCount,true,'/');
            }
            else
            {
            if (empty($request['c']))
                $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else 

ordering end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'./');
            else
                $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else 

ordering end desc) as `product` where channelId=$params[id] and categoryId in(".$tempCategoryIds.")",'ordering desc',$db,productCount,true,'./');
            }
        }
    }
    else
    {
        if(URLREWRITE)
        {
            $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering 

end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'/');
        }
        else
        {
            $sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering 

end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'./');
        }
    }
    if($sb->results)
    {
        foreach($sb->results as $rst)
        {
            if(URLREWRITE)
            {
                if(!$request['c'])
                {
                    ?>
                    <div class="product_index">
                    <a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><img 

src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
        
                    <dl class="pro_summarytxt">
                    <dt>产品名称：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
                    <dd>型号：<?php echo $rst['sn'] ?></dd>
                    <dd>规格：<?php echo $rst['spec'] ?></dd>
                    <dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
                    <dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
                    <dd>点击数：<?php echo $rst['counts'] ?></dd>
                    </dl>
                    <span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst

['id'] ?>.html">获得详情</a></span>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="product_index">
                    <a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo 

$rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
        
                    <dl class="pro_summarytxt">
                    <dt>产品名称：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
                    <dd>型号：<?php echo $rst['sn'] ?></dd>
                    <dd>规格：<?php echo $rst['spec'] ?></dd>
                    <dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
                    <dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
                    <dd>点击数：<?php echo $rst['counts'] ?></dd>
                    </dl>
                    <span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request

['c'] ?>_<?php echo $rst['id'] ?>.html">获得详情</a></span>
                    </div>
                    <?php
                }
            }
            else
            {
                if(!$request['c'])
                {
                    ?>
                    <div class="product_index">
                    <a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><img 

src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
        
                    <dl class="pro_summarytxt">
                    <dt>产品名称：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><?php 

echo $rst['name'] ?></a></dt>
                    <dd>型号：<?php echo $rst['sn'] ?></dd>
                    <dd>规格：<?php echo $rst['spec'] ?></dd>
                    <dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
                    <dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
                    <dd>点击数：<?php echo $rst['counts'] ?></dd>
                    </dl>
                    <span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo 

$rst['id'] ?>">获得详情</a></span>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="product_index">
                    <a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php 

echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
        
                    <dl class="pro_summarytxt">
                    <dt>产品名称：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
                    <dd>型号：<?php echo $rst['sn'] ?></dd>
                    <dd>规格：<?php echo $rst['spec'] ?></dd>
                    <dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
                    <dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
                    <dd>点击数：<?php echo $rst['counts'] ?></dd>
                    </dl>
                    <span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo 

$request['c'] ?>&r=<?php echo $rst['id'] ?>">获得详情</a></span>
                    </div>
                    <?php
                }
            }
        }
    }
    else
    {
        echo '<br />暂无产品列表。';
    }
}
?>