<style type="text/css">
<!--
#webmap{ width:420px; height:auto; padding:25px; margin:0 auto;}
#webmap ul{ margin:0; padding:0; float:left;}
#webmap ul li{ list-style:none; line-height:22px; color:#999;}
#webmap ul li a{ text-decoration: none;letter-spacing: 1px;}
#webmap ul li a:hover{ color:#f90;}
<?php if(URLREWRITE){?>
.jt{ background:url(/inc/img/webmap/arrow_r.gif) 0 2px no-repeat; color:#36f; font-weight:bold;padding-left:10px;}
.yl{ background:url(/inc/img/webmap/jj.png) 5px no-repeat; color:#39f; padding: 7px 0 0 35px;}
.el{ background:url(/inc/img/webmap/tree_line1-1.gif) 20px no-repeat;color:#999; padding-left:43px;}
.ys{ color:#999;}
<?php }else{ ?>
.jt{ background:url(./inc/img/webmap/arrow_r.gif) 0 2px no-repeat; color:#36f; font-weight:bold;padding-left:10px;}
.yl{ background:url(./inc/img/webmap/jj.png) 5px no-repeat; color:#39f; padding: 7px 0 0 35px;}
.el{ background:url(./inc/img/webmap/tree_line1-1.gif) 20px no-repeat;color:#999; padding-left:43px;}
.ys{ color:#999;}
<?php }?>
-->
</style>
<div id="webmap">
	<ul>
		<?php webmap()?>
	</ul>
</div>
<?php
function webmap()
{
	global $db,$request,$webMap_list;
	if(!empty($webMap_list))
	{
			foreach($webMap_list as $o)
			{
				if(URLREWRITE)
				{
					?>
					<li><a target="_blank" class="jt" href="<?php echo get_root_path() ?>/html/<?php echo $o->menuName ?>/" ><?php echo $o->title?></a></li>	
					<?php 
					$sql = "select * from `".TB_PREFIX."menu` where deep='1' and isHidden='0' and parentId=".$o->id;
					$webMapChildren = $db->get_results($sql);
					if(!empty($webMapChildren))
					{
						foreach($webMapChildren as $o)
						{
						?>
						<li><a href="<?php echo get_root_path() ?>/html/<?php echo $o->menuName ?>/" class="yl" target="_blank"><?php echo $o->title?></a></li>
						<?php
						}
					}
				}
				else
				{
					?>
					<li><a target="_blank" class="jt" href="./?p=<?php echo $o->id?>" ><?php echo $o->title?></a></li>	
					<?php 
					$sql = "select * from `".TB_PREFIX."menu` where deep='1' and isHidden='0' and parentId=".$o->id;
					$webMapChildren = $db->get_results($sql);
					if(!empty($webMapChildren))
					{
						foreach($webMapChildren as $o)
						{
						?>
						<li><a href="./?p=<?php echo $o->id?>" class="yl" target="_blank"><?php echo $o->title?></a></li>
						<?php
						}
					}
				}
			}
	}
}
?>