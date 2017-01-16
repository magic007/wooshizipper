<SCRIPT language=JavaScript> 
function CheckForm() 
{ 
	if(document.form1.jobName.value==""){ 
		alert("请输入职位名称!"); 
		document.form1.jobName.focus(); 
		return false; 
	} 
	if(document.form1.requireNum.value==""){ 
		alert("请输入招聘人数!"); 
		document.form1.requireNum.focus(); 
		return false; 
	} 
	if(document.form1.requireNum.value.match(/^[1-9]\d*$/)==null){ 
		alert("招聘人数不是数字"); 
		document.form1.requireNum.focus(); 
		return false; 
	} 
	if(document.form1.requireNum.value==""){ 
		alert("请输入招聘人数!"); 
		document.form1.requireNum.focus(); 
		return false; 
	} 
	if(document.form1.address.value==""){ 
		alert("请输入工作地点!"); 
		document.form1.address.focus(); 
		return false; 
	} 
		if(document.form1.lastTime.value==""){ 
		alert("请输入截止日期!"); 
		document.form1.lastTime.focus(); 
		return false; 
	} 
} 
</SCRIPT>
<h2 class="title"><?php echo $pageInfo['submenuName'] ?></h2>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="./?p=<?php echo $request['p']?>&n=<?php echo $request['n'] ?>&a=edit&l=<?php echo $request['l']?>" onsubmit="return CheckForm()">
  <tr>
    <td width="892">修改职位 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="57">职位名称</td>
          <td width="861"> <input name="jobName" type="text" value="<?php echo $jobs_item->jobName ?>" class="txt" style="width:30%"></td>
        </tr>		
        <tr>
          <td width="57">工作性质</td>
          <td width="861"> <input name="jobKind" type="text" class="txt" value="<?php echo $jobs_item->jobKind ?>" style="width:30%"></td>
        </tr>	
        <tr>
          <td width="57">招聘人数</td>
          <td width="861"> <input name="requireNum" type="text" class="txt" value="<?php echo $jobs_item->requireNum ?>" style="width:30%"></td>
        </tr>	
        <tr>
          <td width="57">工作经验</td>
          <td width="861"> </label><input name="experience" type="text" value="<?php echo $jobs_item->experience ?>" class="txt" style="width:30%"></td>
        </tr>	
        <tr>
          <td width="57">工作地点</td>
          <td width="861"> <input name="address" type="text" value="<?php echo $jobs_item->address ?>" class="txt" style="width:30%"> </td>
        </tr>	
        <tr>
          <td width="57">年龄</td>
          <td width="861"> <input name="age" value="<?php echo $jobs_item->age ?>" type="text" class="txt" style="width:30%" onclick="javascript:document.form1.age.value=''">(岁)</td>
        </tr>	
        <tr>
          <td width="57">身高</td>
          <td width="861"> <input name="height" type="text" value="<?php echo $jobs_item->height ?>" class="txt" style="width:30%">CM（厘米） </td>
        </tr>	
        <tr>
          <td width="57">语言及水平要求</td>
          <td width="861"> <input name="languageSkill" value="<?php echo $jobs_item->languageSkill ?>" type="text" class="txt" style="width:30%" onclick="javascript:document.form1.languageSkill.value=''"></td>
        </tr>	
        <tr>
          <td width="57">截止日期</td>
          <td width="861"> <input name="lastTime" type="text" value="<?php echo $jobs_item->lastTime ?>" class="txt" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('../inc/js/LWDP.HTC')" /></td>
        </tr>	
        <tr>
          <td width="57">待遇</td>
          <td width="861"> <input name="salary" type="text" value="<?php echo $jobs_item->salary ?>" class="txt" style="width:30%"> </td>
        </tr>	
        <tr>
          <td width="57">学历</td>
          <td width="861">
		<?php
			$educational_arr = array('初中'=>'初中','高中'=>'高中','中技'=>'中技','中专'=>'中专','大专'=>'大专','本科'=>'本科','硕士'=>'硕士','博士'=>'博士','博士后'=>'博士后');
			select($educational_arr,'educational',$jobs_item->educational);
		?>
          </td>
        </tr>	
        <tr>
          <td width="57">是否提供住房</td>
          <td width="861"> <input name="isHouse" type="text" value="<?php echo $jobs_item->isHouse ?>" class="txt" style="width:30%"> </td>
        </tr>	
        <tr>
          <td width="57">性别</td>
          <td width="861">
		  	<?php 
			switch($jobs_item->sex)
			{
				case '男':
					?>
					<input name="sex" type="radio" value="男" checked="checked" />
					男
					<input type="radio" name="sex" value="女" />
					女
					<input type="radio" name="sex" value="不限" />
					不限
					<?php 
					break;
				case '女':
					?>
					<input name="sex" type="radio" value="男" />
					男
					<input type="radio" name="sex" value="女" checked="checked" />
					女
					<input type="radio" name="sex" value="不限" />
					不限
					<?php 
					break;
				default:
					?>
					<input name="sex" type="radio" value="男" />
					男
					<input type="radio" name="sex" value="女" />
					女
					<input type="radio" name="sex" value="不限" checked="checked" />
					不限
					<?php 
			}
			?>
          </td>
        </tr>	
        <tr>
          <td width="57">计算机等级水平</td>
          <td width="861">
            <select name="computerLevel">
			<option selected="selected" value="--不限--">--不限--</option>
			<option value="初级">初级</option>
			<option value="二级">二级</option>
			<option value="三级">三级</option>
			<option value="四级">四级</option>
			<option value="高级工程师">高级工程师</option>
			<option value="熟练">熟练</option>
			<option value="精通">精通</option>
  			</select>
  			</td>
        </tr>	
        <tr>
          <td width="57">联系电话</td>
          <td width="861"> <input name="telphone" type="text" value="<?php echo $jobs_item->telphone ?>" class="txt" style="width:30%"></td>
        </tr>	
        <tr>
          <td width="57">EMail</td>
          <td width="861"> <input name="email" type="text" value="<?php echo $jobs_item->email ?>" class="txt" style="width:30%"> </td>
        </tr>	
        <tr>
          <td width="57">职位描述及具体要求</td>
          <td width="861">
            <?php
			ewebeditor(EDITORSTYLE,'summary',$jobs_item->summary);
  			?>
          </td>
        </tr>	
      </table>	
	  </td>
  </tr>
  </form>
</table>