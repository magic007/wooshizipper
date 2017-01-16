<style>
@import"<?php echo get_skin_root() ?>css/parts.css";
</style>
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
    		<td><strong>Job Title</strong>:<?php echo $rst['jobName'] ?></td>
    		<td><strong>Nature of the work</strong>:<?php echo $rst['jobKind'] ?></td>
  			</tr>
  			<tr>
   			<td><strong>The number of recruits</strong>:<?php echo $rst['requireNum'] ?></td>
    		<td><strong>Work experience</strong>:<?php echo $rst['experience'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>work location</strong>:<?php echo $rst['address'] ?></td>
    		<td><strong>Age</strong>:<?php echo $rst['age'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>Height</strong>:<?php echo $rst['height'] ?></td>
    		<td><strong>Language requirements and the level of</strong>:<?php echo $rst['languageSkill'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>Deadline</strong>:<?php echo $rst['lastTime'] ?></td>
    		<td><strong>Treatment</strong>:<?php echo $rst['salary'] ?></td>
  			</tr>
  			<tr>
    		<td colspan="2"><strong>Whether or not to provide housing</strong></strong>:<?php echo $rst['isHouse'] ?></td>
    		</tr>
  			<tr>
    		<td colspan="2"><strong>job description and specific requirements</strong>:<?php echo $rst['summary'] ?></td>
  			</tr>
  			<tr>
    		<td><strong>Phone</strong>:<?php echo $rst['telphone'] ?></td>
    		<td><strong>EMail</strong>:<?php echo $rst['email'] ?></td>
  			</tr>
  			<tr>
    		<td colspan="2"><strong>Release Date</strong>:<?php echo $rst['dtTime'] ?></td>
  			</tr>
  			<tr>
			<?php 
			if(URLREWRITE)
			{
				?>
    			<td colspan="2" align="right"><a href="<?php echo get_root_path() ?>/html/<?php echo $pfileName ?>/send_<?php echo $rst['id'] ?>.html"><strong style="color:Green;">Candidates</strong></a></td>
				<?php 
			}
			else
			{
				?>
    			<td colspan="2" align="right"><a href="./?a=send&p=<?php echo $rst['channelId'] ?>&r=<?php echo $rst['id'] ?>"><strong style="color:Green;">Candidates</strong></a></td>
				<?php 
			}
			?>
  			</tr>
			</table>
			<?php
		}
		?>
		<div id="articeBottom">
			<div id="apartPage"><?php echo $sb->get_en_pager_show()?></div>
		</div>
		<?php
	}
	else
	{
		echo 'No recruitment。';
	}
}
?>
