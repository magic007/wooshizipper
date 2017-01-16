<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5"> 
  <tr>
    <td>招聘职位管理 | 
    <?php 
	if(!empty($jobs))
	{
		foreach ($jobs as $o)
		{
			?>
			<a href="?p=<?php echo $request['p'] ?>&j=<?php echo $o->id ?>&a=viewresumes&l=<?php echo $request['l']?>"><?php echo $o->jobName ?></a>&nbsp;|&nbsp;
			<?php
		}
	}
	else 
	{
		echo '<span style="color:Red">暂无应聘者应聘任何职位!</span>';
	}
	?>
	<a href="javascript:history.back(1)"><span style="color:Green;">返回</span></a>
    </td>
    <td width="91">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <?php echo $resumes->render() ?>
	</td>
  </tr>
</table>