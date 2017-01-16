<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<?php product_list() ?>
<div class="clear"></div>
<div  id="articeBottom"><?php global $sb; if($sb->results)
echo $sb->get_en_pager_show()?></div>
<?php
function product_list()
{
	global $db,$params,$request,$pfileName,$sb;
	if(URLREWRITE)
	{
    if (empty($request['c']))
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'/');
	else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering end desc) as `product` where channelId=$params[id] and categoryId=".$request['c']."",'ordering desc',$db,productCount,true,'/');
	}
	else
	{
	if (empty($request['c']))
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering end desc) as `product` where channelId=$params[id]",'ordering desc',$db,productCount,true,'./');
	else
		$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."product` order by case ordering when 0 then id else ordering end desc) as `product` where channelId=$params[id] and categoryId=".$request['c']."",'ordering desc',$db,productCount,true,'./');
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
					<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>Name：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>Id：<?php echo $rst['sn'] ?></dd>
					<dd>Specifications：<?php echo $rst['spec'] ?></dd>
					<dd>Original：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>Price：<?php echo $rst['preferPrice'] ?></dd>
					<dd>Hits：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html">More</a></span>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>Name：<a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>Id：<?php echo $rst['sn'] ?></dd>
					<dd>Specifications：<?php echo $rst['spec'] ?></dd>
					<dd>Original：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>Price：<?php echo $rst['preferPrice'] ?></dd>
					<dd>Hits：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html">More</a></span>
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
					<a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>Name：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>Id：<?php echo $rst['sn'] ?></dd>
					<dd>Specifications：<?php echo $rst['spec'] ?></dd>
					<dd>Original：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>Price：<?php echo $rst['preferPrice'] ?></dd>
					<dd>Hits：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>">More</a></span>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>Name：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>Id：<?php echo $rst['sn'] ?></dd>
					<dd>Specifications：<?php echo $rst['spec'] ?></dd>
					<dd>Original：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>Price：<?php echo $rst['preferPrice'] ?></dd>
					<dd>Hits：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>">More</a></span>
					</div>
					<?php
				}
			}
		}
	}
	else
	{
		echo 'No product。';
	}
}
?>