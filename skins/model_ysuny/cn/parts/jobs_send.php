<script language="javascript">
<!-- 
function validator()
{
 	if(document.jobs.name.value=="")
	{alert("请填写您的姓名!"); document.jobs.name.focus(); return false;}
	if(document.jobs.educational.value=="")
	{alert("请填写您的最高学历!");document.jobs.educational.focus();return false;}
	if(document.jobs.finishSchool.value=="")
	{alert("请填写您的毕业院校!");document.jobs.finishSchool.focus();return false;}
	if(document.jobs.speciality.value=="")
	{alert("请填写您的主修专业!");document.jobs.speciality.focus();return false;}
	if(document.jobs.experience.value=="")
	{alert("请填写您的工作经验!");document.jobs.experience.focus();return false;}
	if(document.jobs.email.value=="")
	{alert("请填写您的E-mail!");document.jobs.email.focus();return false;}
	if(!(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/).test(document.jobs.email.value))
	{alert("请输入正确的Email!");document.jobs.email.focus();return false;}
	if(document.jobs.mobile.value=="")
	{alert("请填写您的移动电话!");document.jobs.mobile.focus();return false;}
	if(document.jobs.resume.value=="")
	{alert("请填写您的个人简历!");document.jobs.resume.focus();return false;}
}
-->
</script>
<style type="text/css">
<!--
td,p,div,span,li,select,input,textarea {font-size:12px;}
.p {text-indent:0px;}
.org14 {font-size:14px;color:#ff7200;}
-->
</style>
<?php 
if(URLREWRITE)
{
	?>
	<form name="jobs" method="post" onsubmit="return validator()" action="/?p=<?php echo $request['p'] ?>&r=<?php echo $request['r'] ?>&a=send">
	<?php
}
else
{
	?>
	<form name="jobs" method="post" onsubmit="return validator()" action="./?p=<?php echo $request['p'] ?>&r=<?php echo $request['r'] ?>&a=send">
	<?php
}
?>
<div id="stuffbox">
<table width="90%" cellpadding="2" cellspacing="2" border="0" style="margin-left:40px;">
  <colgroup>
  <col width="1">
  <col width="110">
  <col width="180">

  <col width="1">
  <col width="70">
  <col>
  </colgroup>
   <tr>
	<td class="org14">*</td>
  	<td>姓名</td>
	<td><input name="name" type="text"></td>
  </tr>
   <tr>
  	<td></td>
  	<td>性别</td>
	<td colspan="6"><input name="sex" type="radio" value="男" checked="checked" />男
	  <input type="radio" name="sex" value="女" />女
	  <input type="radio" name="sex" value="不限" />不限</td>
   </tr>  
   <tr>
    <td></td>
  	<td>出生年月</td>
	<td>	
	<?php 
	if(URLREWRITE)
	{
	?>
	<input name="birthday" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('/inc/js/LWDP.HTC')" />
	<?php
	}
	else
	{
	?>
	<input name="birthday" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('../inc/js/LWDP.HTC')" />
	<?php
	}
	?>
	</td>
	</tr>
    <tr>
    <td></td>
	<td>民族</td>
	<td><select name="nation">
  <option selected="selected" value="汉族">汉族</option>
	<option value="蒙古族">蒙古族</option>
	<option value="回族">回族</option>
	<option value="藏族">藏族</option>
	<option value="维吾尔族">维吾尔族</option>
	<option value="苗族">苗族</option>
	<option value="彝族">彝族</option>
	<option value="壮族">壮族</option>
	<option value="布依族">布依族</option>
	<option value="朝鲜族">朝鲜族</option>
	<option value="满族">满族</option>
	<option value="侗族">侗族</option>
	<option value="瑶族">瑶族</option>
	<option value="白族">白族</option>
	<option value="土家族">土家族</option>
	<option value="哈尼族">哈尼族</option>
	<option value="哈萨克族">哈萨克族</option>
	<option value="傣族">傣族</option>
	<option value="黎族">黎族</option>
	<option value="傈僳族">傈僳族</option>
	<option value="佤族">佤族</option>
	<option value="畲族">畲族</option>
	<option value="高山族">高山族</option>
	<option value="拉祜">拉祜</option>
	<option value="水族">水族</option>
	<option value="东乡族">东乡族</option>
	<option value="纳西族">纳西族</option>
	<option value="景颇族">景颇族</option>
	<option value="柯尔克孜">柯尔克孜</option>
	<option value="土族">土族</option>
	<option value="达斡尔族">达斡尔族</option>
	<option value="仫佬族">仫佬族</option>
	<option value="羌族">羌族</option>
	<option value="布朗族">布朗族</option>
	<option value="撒拉族">撒拉族</option>
	<option value="毛难族">毛难族</option>
	<option value="仡佬族">仡佬族</option>
	<option value="锡伯族">锡伯族</option>
	<option value="阿昌族">阿昌族</option>
	<option value="普米族">普米族</option>
	<option value="塔吉克族">塔吉克族</option>
	<option value="怒族">怒族</option>
	<option value="乌孜别克">乌孜别克</option>
	<option value="俄罗斯族">俄罗斯族</option>
	<option value="鄂温克族">鄂温克族</option>
	<option value="崩龙族">崩龙族</option>
	<option value="保安族">保安族</option>
	<option value="裕固族">裕固族</option>
	<option value="京族">京族</option>
	<option value="塔塔尔族">塔塔尔族</option>
	<option value="独龙族">独龙族</option>
	<option value="鄂伦春族">鄂伦春族</option>
	<option value="赫哲族">赫哲族</option>
	<option value="门巴族">门巴族</option>
	<option value="珞巴族">珞巴族</option>
	<option value="基诺族">基诺族</option>
	<option value="外国血统">外国血统</option>
	<option value="其他">其他</option>
  </select>
	</td>
	</tr>  
    <tr>
    <td></td>
	<td>婚姻状况</td>
	<td colspan="6"><input name="isMarried" type="radio" value="已婚" />已婚
  <input name="isMarried" type="radio" value="未婚" checked="checked" /> 未婚
  <input name="isMarried" type="radio" value="不限" />不限</td> 
  </tr>
  <tr>
  <td></td>
  <td>现有职称</td>
  <td><select name="nowJob">
	<option selected="selected" value="暂无">暂无</option>
	<option value="初级">初级</option>
	<option value="中级">中级</option>
	<option value="高级">高级</option>
	<option value="其他">其他</option>
  </select></td></tr>  
    <tr>
    <td></td>
  <td>现在居住地</td>
  <td><input name="nowAddress" type="text"> </td>
  </tr>
  <tr>
  <td></td>
  <td>户口所在地</td>
  <td><input name="residence" type="text"></td>
  </tr>  
    <tr>
    <td></td>
  <td>最高学历</td>
  <td><select name="educational">
	<option value="初中">初中</option>
	<option value="高中">高中</option>
	<option value="中技">中技</option>
	<option value="中专">中专</option>
	<option selected="selected" value="大专">大专</option>
	<option value="本科">本科</option>
	<option value="硕士">硕士</option>
	<option value="博士">博士</option>
	<option value="博士后">博士后</option>
  </select></td></tr>  
   <tr>
    <td></td>
  <td>身高</td><td><input name="height" type="text"> 
  CM（厘米）</td> </tr>
  <tr>
  <td class="org14">*</td>
  <td>毕业院校</td>
  <td><input name="finishSchool" type="text"></td>
  </tr> 
    <tr>
    <td></td>
  <td>毕业时间</td>
  <td>  
	<?php 
	if(URLREWRITE)
	{
	?>
	<input name="finishTime" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('/inc/js/LWDP.HTC')" />
	<?php
	}
	else
	{
	?>
	<input name="finishTime" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('../inc/js/LWDP.HTC')" />
	<?php
	}
	?>
  </td>
  </tr>
    <tr>
    <td></td>
  <td>主修专业</td><td><select name="speciality">
	<option value="-请选择-">-请选择-</option>
	<option value="电气信息类">电气信息类</option>
	<option value="技工类">技工类</option>
	<option selected="selected" value="电子信息科学类">电子信息科学类</option>
	<option value="工商管理类">工商管理类</option>
	<option value="公共管理类">公共管理类</option>
	<option value="管理科学与工程类">管理科学与工程类</option>
	<option value="土建类">土建类</option>
	<option value="水利类">水利类</option>
	<option value="测绘类">测绘类</option>
	<option value="化学与制药类">化学与制药类</option>
	<option value="仪器仪表类">仪器仪表类</option>
	<option value="机械类">机械类</option>
	<option value="材料类">材料类</option>
	<option value="轻工纺织食品类">轻工纺织食品类</option>
	<option value="交通运输类">交通运输类</option>
	<option value="经济学类">经济学类</option>
	<option value="中国语言文学类">中国语言文学类</option>
	<option value="外国语言文学类">外国语言文学类</option>
	<option value="艺术学类">艺术学类</option>
	<option value="新闻传播学类">新闻传播学类</option>
	<option value="法学类">法学类</option>
	<option value="哲学类">哲学类</option>
	<option value="历史学类">历史学类</option>
	<option value="教育学类">教育学类</option>
	<option value="心理学类">心理学类</option>
	<option value="统计学类">统计学类</option>
	<option value="数学类">数学类</option>
	<option value="物理学类">物理学类</option>
	<option value="化学类">化学类</option>
	<option value="地矿类">地矿类</option>
	<option value="基础医学类">基础医学类</option>
	<option value="预防医学类">预防医学类</option>
	<option value="临床医学与医学技术类">临床医学与医学技术类</option>
	<option value="口腔医学类">口腔医学类</option>
	<option value="中医医学类">中医医学类</option>
	<option value="法医学类">法医学类</option>
	<option value="护理学类">护理学类</option>
	<option value="药学类">药学类</option>
	<option value="生物工程类">生物工程类</option>
	<option value="生物科学类">生物科学类</option>
	<option value="体育教育类">体育教育类</option>
	<option value="教育类新兴专业">教育类新兴专业</option>
	<option value="材料科学类">材料科学类</option>
	<option value="社会学类">社会学类</option>
	<option value="马克思主义理论类">马克思主义理论类</option>
	<option value="政治学类">政治学类</option>
	<option value="公安学类">公安学类</option>
	<option value="动物医学类">动物医学类</option>
	<option value="动物生产类">动物生产类</option>
	<option value="农林经济管理类">农林经济管理类</option>
	<option value="植物生产类">植物生产类</option>
	<option value="草业科学类">草业科学类</option>
	<option value="森林资源类">森林资源类</option>
	<option value="森林工程类">森林工程类</option>
	<option value="环境生态学">环境生态学</option>
	<option value="农业工程类">农业工程类</option>
	<option value="公安技术类">公安技术类</option>
	<option value="工程力学类">工程力学类</option>
	<option value="武器类">武器类</option>
	<option value="航空航天类">航空航天类</option>
	<option value="海洋工程类">海洋工程类</option>
	<option value="水产类">水产类</option>
	<option value="能源动力类">能源动力类</option>
	<option value="环境科学类">环境科学类</option>
	<option value="力学类">力学类</option>
	<option value="海洋科学类">海洋科学类</option>
	<option value="大气科学类">大气科学类</option>
	<option value="地质学类">地质学类</option>
	<option value="天文学类">天文学类</option>
	<option value="地理科学类">地理科学类</option>
	<option value="地球物理学类">地球物理学类</option>
	<option value="环境与安全类">环境与安全类</option>
	<option value="图书档案学类">图书档案学类</option>
  </select></td>
  </tr>
    <tr>
    <td></td>
  <td>工作经验</td><td><select name="experience">
	<option value="应届生">应届生</option>
	<option selected="selected" value="一年">一年</option>
	<option value="两年">两年</option>
	<option value="三年">三年</option>
	<option value="三--五年">三--五年</option>
	<option value="五--十年">五--十年</option>
	<option value="十年以上">十年以上</option>
  </select>
  </td></tr>
  
    <tr>
    <td></td>
  <td>自我评价</td><td><textarea name="selfAppreciation" style="height:80px;width:300px;"></textarea></td></tr>
  
   <tr>
    <td></td>
  <td>所会外语</td><td><select name="languageSkill">
	<option value="中文">中文</option>
	<option selected="selected" value="英语">英语</option>
	<option value="日语">日语</option>
	<option value="俄语">俄语</option>
	<option value="法语">法语</option>
	<option value="德语">德语</option>
	<option value="意大利语">意大利语</option>
	<option value="西班牙语">西班牙语</option>
	<option value="朝鲜语">朝鲜语</option>
	<option value="蒙古语">蒙古语</option>
	<option value="葡萄牙语">葡萄牙语</option>
	<option value="越南语">越南语</option>
	<option value="世界语">世界语</option>
	<option value="阿拉伯语">阿拉伯语</option>
	<option value="泰国语">泰国语</option>
	<option value="拉丁语">拉丁语</option>
	<option value="其他">其他</option>
  </select></td></tr>
    <tr>
    <td class="org14">*</td>
  <td>E-mail</td><td><input name="email" type="text"></td>
  </tr>
    <tr>
    <td></td>
 <td>住宅电话</td><td><input name="telphone" type="text"></td></tr>
    <tr>
    <td class="org14">*</td>
  <td>移动电话</td><td><input name="mobile" type="text"></td>
  </tr>
    <tr>
    <td></td>
  <td>通讯地址</td><td><input name="address" type="text"> </td></tr>
    <tr>
    <td class="org14">*</td>
  <td>个人简历</td>
  <td><textarea name="resume" style="height:80px;width:300px;"></textarea></td></tr>
    <tr>
    <td></td>
<td></td><td><input type="submit" name="Submit" value="提交"></td></tr></table>
</div>
</form>