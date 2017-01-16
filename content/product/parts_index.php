<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<?php product_list() ?>
<div class="clear"></div>
<div  id="articeBottom"><?php global $sb; if($sb->results)
echo $sb->get_pager_show()?></div>
<?php
function product_list()
{
	global $db,$params,$request,$pfileName,$sb;
    if (empty($request['c']))
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."product where channelId=$params[id]",'ordering desc',$db,productCount);
	else
		$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."product where channelId=$params[id] and categoryId=".$request['c']."",'ordering desc',$db,productCount);
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
					<a href="/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品名称：<a href="/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>型号：<?php echo $rst['sn'] ?></dd>
					<dd>规格：<?php echo $rst['spec'] ?></dd>
					<dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
					<dd>点击数：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="/html/<?php echo $pfileName ?>/view_<?php echo $rst['id'] ?>.html">获得详情</a></span>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="product_index">
					<a href="/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品名称：<a href="/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html"><?php echo $rst['name'] ?></a></dt>
					<dd>型号：<?php echo $rst['sn'] ?></dd>
					<dd>规格：<?php echo $rst['spec'] ?></dd>
					<dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
					<dd>点击数：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="/html/<?php echo $pfileName ?>/view_<?php echo $request['c'] ?>_<?php echo $rst['id'] ?>.html">获得详情</a></span>
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
					<dt>产品名称：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>型号：<?php echo $rst['sn'] ?></dd>
					<dd>规格：<?php echo $rst['spec'] ?></dd>
					<dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
					<dd>点击数：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&r=<?php echo $rst['id'] ?>">获得详情</a></span>
					</div>
					<?php
				}
				else
				{
					?>
					<div class="product_index">
					<a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><img src="<?php echo get_root_path().$rst['smallPic'] ?>" border=0/></a>
		
					<dl class="pro_summarytxt">
					<dt>产品名称：<a href="<?php echo ROOTPATH ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>"><?php echo $rst['name'] ?></a></dt>
					<dd>型号：<?php echo $rst['sn'] ?></dd>
					<dd>规格：<?php echo $rst['spec'] ?></dd>
					<dd>市场价：<?php echo $rst['sellingPrice'] ?></dd>
					<dd>优惠价：<?php echo $rst['preferPrice'] ?></dd>
					<dd>点击数：<?php echo $rst['counts'] ?></dd>
					</dl>
					<span class="pic_more"><a href="<?php echo get_root_path() ?>/?p=<?php echo $params['id'] ?>&a=view&c=<?php echo $request['c'] ?>&r=<?php echo $rst['id'] ?>">获得详情</a></span>
					</div>
					<?php
				}
			}
		}
	}
	else
	{
		echo '暂无产品列表。';
	}
}
?>