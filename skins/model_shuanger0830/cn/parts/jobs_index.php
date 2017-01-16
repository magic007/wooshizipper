<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<div id="stuffbox">
<ul>
<?php jobs_list() ?>
</ul>
</div>
<?php
function jobs_list()
{
	global $db,$params,$request,$pfileName;
	if(URLREWRITE)
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."jobs` order by case ordering when 0 then id else ordering end desc) as `jobs` where lastTime>='".date("Y-m-d")."' and channelId=$params[id]",'ordering desc',$db,jobsCount,true,'/');
	else
	$sb = new sqlbuilder('mdt',"select * from (SELECT * FROM `".TB_PREFIX."jobs` order by case ordering when 0 then id else ordering end desc) as `jobs` where lastTime>='".date("Y-m-d")."' and channelId=$params[id]",'ordering desc',$db,jobsCount,true,'./');
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			?>
			<table class="jobInfo">
			<caption><strong><?php echo $rst['jobName'] ?></strong></caption>
  			<tr>
    		<td><strong>职位名称</strong>：<?php echo $rst['jobName'] ?></td>
    		<td><strong>工作性质</strong>：<?php echo $rst['jobKind'] ?></td>
  			</tr>
  			<tr>
   			<td><strong>招聘人数</strong>：<?php echo $rst['requireNum'] ?></td>
    		<td><strong>工作经验</strong>：<?php echo $rst['experience'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>工作地点</strong>：<?php echo $rst['address'] ?></td>
    		<td><strong>年龄</strong>：<?php echo $rst['age'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>身高</strong>：<?php echo $rst['height'] ?></td>
    		<td><strong>语言及水平要求</strong>：<?php echo $rst['languageSkill'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>截止日期</strong>：<?php echo $rst['lastTime'] ?></td>
    		<td><strong>待遇</strong>：<?php echo $rst['salary'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>学历</strong>：<?php echo $rst['educational'] ?></td>
    		<td><strong>是否提供住房</strong>：<?php echo $rst['isHouse'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>性别</strong>：<?php echo $rst['sex'] ?></td>
    		<td><strong>计算机水平</strong>：<?php echo $rst['computerLevel'] ?></td>
  			</tr>
  			<tr>
    		<td colspan="2"><strong>职位描述及具体要求</strong>：<?php echo $rst['summary'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>联系电话</strong>：<?php echo $rst['telphone'] ?></td>
    		<td><strong>EMail</strong>：<?php echo $rst['email'] ?></td>
  			</tr>
  			<tr>
    		<td colspan="2"><strong>发布日期</strong>：<?php echo $rst['dtTime'] ?></td>
  			</tr>
  			<tr>
			<?php 
			if(URLREWRITE)
			{
				?>
    			<td colspan="2" align="right"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/send_<?php echo $rst['id'] ?>.html"><strong style="color:Green;">应聘此职位</strong></a></td>
				<?php 
			}
			else
			{
				?>
    			<td colspan="2" align="right"><a href="./?a=send&p=<?php echo $rst['channelId'] ?>&r=<?php echo $rst['id'] ?>"><strong style="color:Green;">应聘此职位</strong></a></td>
				<?php 
			}
			?>
  			</tr>
			</table>
			<?php
		}
		?>
		<div id="articeBottom">
			<div id="apartPage"><?php echo $sb->get_pager_show()?></div>
		</div>
		<?php
	}
	else
	{
		echo '暂无招聘。';
	}
}
?>
