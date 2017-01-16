<script language="javascript">
<!-- 
function validator()
{
 	if(document.jobs.name.value=="")
	{alert("Please fill in your name!"); document.jobs.name.focus(); return false;}
	if(document.jobs.educational.value=="")
	{alert("Please enter your highest qualifications!");document.jobs.educational.focus();return false;}
	if(document.jobs.finishSchool.value=="")
	{alert("Please enter your graduation institutions!");document.jobs.finishSchool.focus();return false;}
	if(document.jobs.speciality.value=="")
	{alert("Please fill in your professional majors!");document.jobs.speciality.focus();return false;}
	if(document.jobs.experience.value=="")
	{alert("Please complete your work experience!");document.jobs.experience.focus();return false;}
	if(document.jobs.email.value=="")
	{alert("Please enter your E-mail!");document.jobs.email.focus();return false;}
	if(!(/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/).test(document.jobs.email.value))
	{alert("Please enter the correct Email!");document.jobs.email.focus();return false;}
	if(document.jobs.mobile.value=="")
	{alert("Please enter your mobile phone!");document.jobs.mobile.focus();return false;}
	if(document.jobs.resume.value=="")
	{alert("Please fill in your personal resume!");document.jobs.resume.focus();return false;}
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
<form name="jobs" method="post" onsubmit="return validator()" action="/?p=<?php echo $_REQUEST['p'] ?>&r=<?php echo $_REQUEST['r'] ?>&a=send">
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
  	<td>Name</td>
	<td><input name="name" type="text"></td>
  </tr>
   <tr>
  	<td></td>
  	<td>Sex</td>
	<td colspan="6"><input name="sex" type="radio" value="Men" checked="checked" />Men
	  <input type="radio" name="sex" value="women" />women
	  <input type="radio" name="sex" value="No restrictions" />No restrictions</td>
   </tr>  
   <tr>
    <td></td>
  	<td>ate of birth</td>
	<td><input name="birthday" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('/inc/js/LWDP.HTC')" /></td>
	</tr>
    <tr>
    <td></td>
	<td>National</td>
	<td><select name="nation">
  <option selected="selected" value="Han ">Han </option>
	<option value="Zhuang">Zhuang  </option>
	<option value="Manchu">Manchu </option>
	<option value="Hui">Hui </option>
	<option value="Miao">Miao </option>
	<option value="Uyghur">Uyghur</option>
	<option value="Yi">Yi</option>
	<option value="Tujia">Tujia </option>
	<option value="Mongol">Mongol </option>
	<option value="Tibetan">Tibetan </option>
	<option value="Buyei">Buyei </option>
	<option value="Dong">Dong </option>
	<option value="Yao">Yao </option>
	<option value="Korean">Korean </option>
	<option value="Bai">Bai </option>
	<option value="Hani">Hani </option>
	<option value="Li">Li </option>
	<option value="Kazak">Kazak </option>
	<option value="Dai">Dai </option>
	<option value="She">She </option>
	<option value="Lisu">Lisu </option>
	<option value="Gelao">Gelao </option>
	<option value="Lahu">Lahu </option>
	<option value="Dongxiang">Dongxiang </option>
	<option value="Va">Va </option>
	<option value="Sui">Sui </option>
	<option value="Naxi">Naxi </option>
	<option value="Qiang">Qiang </option>
	<option value="Tu">Tu </option>
	<option value="Xibe">Xibe </option>
	<option value="Mulao">Mulao </option>
	<option value="Kirgiz">Kirgiz </option>
	<option value="Daur">Daur </option>
	<option value="Jingpo">Jingpo </option>
	<option value="Salar">Salar </option>
	<option value="Blang">Blang </option>
	<option value="Maonan">Maonan </option>
	<option value="Tajik">Tajik </option>
	<option value="Pumi">Pumi </option>
	<option value="Achang">Achang </option>
	<option value="Nu">Nu </option>
	<option value="Ewenki">Ewenki </option>
	<option value="Gin">Gin</option>
	<option value="Jino">Jino </option>
	<option value="Deang">Deang </option>
	<option value="Uzbek">Uzbek </option>
	<option value="Russians">Russians </option>
	<option value="Yugur">Yugur </option>
	<option value="Bonan">Bonan </option>
	<option value="Monba">Monba </option>
	<option value="Oroqen">Oroqen </option>
	<option value="Derung">Derung </option>
	<option value="Tatar">Tatar </option>
	<option value="Hezhen">Hezhen </option>
	<option value="Lhoba">Lhoba  </option>
	<option value="other">other</option>
  </select>
	</td>
	</tr>  
    <tr>
    <td></td>
	<td>Marital status</td>
	<td colspan="6"><input name="isMarried" type="radio" value="Married" />Married
  <input name="isMarried" type="radio" value="Unmarried" checked="checked" /> Unmarried
  <input name="isMarried" type="radio" value="No restrictions" />No restrictions</td> 
  </tr>
  <tr>
  <td></td>
  <td>Title</td>
  <td><select name="nowJob">
	<option selected="selected" value="No">No</option>
	<option value="Primary">Primary</option>
	<option value="Intermediate">Intermediate</option>
	<option value="Advanced">Advanced</option>
	<option value="Other">Other</option>
  </select></td></tr>  
    <tr>
    <td></td>
  <td>Now residence</td>
  <td><input name="nowAddress" type="text"> </td>
  </tr>
  <tr>
  <td></td>
  <td>Accounts location</td>
  <td><input name="residence" type="text"></td>
  </tr>  
    <tr>
    <td></td>
  <td>The highest qualifications</td>
  <td><select name="educational">
	<option value="Junior ">Junior </option>
	<option value="Senior">Senior high School </option>
	<option selected="selected" value="college or university">college or university </option>
	<option value="college diploma">college diploma</option>
	<option value="postgraduate">postgraduate </option>
	<option value="doctoral">doctoral </option>
	<option value="post-doctoral">post-doctoral</option>
  </select></td></tr>  
   <tr>
    <td></td>
  <td>Height</td><td><input name="height" type="text"> 
  CM</td> </tr>
  <tr>
  <td class="org14">*</td>
  <td>Graduation institutions</td>
  <td><input name="finishSchool" type="text"></td>
  </tr> 
    <tr>
    <td></td>
  <td>Graduation time</td>
  <td><input name="finishTime" type="text" maxlength="50" size="25" id="lasttime" style="font-size:9pt;width:152px;BEHAVIOR: url('/inc/js/LWDP.HTC')" /></td>
  </tr>
    <tr>
    <td></td>
  <td>Majoring in professional</td><td><select name="speciality">
	<option value="-Please select-">-Please select-</option>
	<Option value="Electric Information"> Electric Information </option>
	<Option value="craft category"> craft categories </option>
	<Option selected="selected" value ="electronic information science category"> electronic information science class </option>
	<Option value="Business Class"> Business Management </option>
	<Option value="public administration category"> Public Management </option>
	<Option value="Management Science and Engineering"> Management Science and Engineering </option>
	<Option value="civil engineering"> civil engineering </option>
	<Option value="water category"> water category </option>
	<Option value="mapping category"> mapping category </option>
	<Option value="chemical and pharmaceutical"> chemical and pharmaceutical </option>
	<Option value="Instrumentation category"> instrumentation category </option>
	<Option value="Mechanical"> Mechanical </option>
	<Option value="materials"> materials </option>
	<Option value="light industrial textile and food"> light textile food </option>
	<Option value="transport category"> transport category </option>
	<Option value="Economics category"> Economics category </option>
	<Option value="Chinese Language and Literature category"> Chinese language and literature category </option>
	<Option value="foreign language and literature category"> foreign language and literature category </option>
	<Option value="Art of category"> arts school categories </option>
	<Option value="category of news dissemination"> news Communication category </option>
	<Option value="Law category"> Law category </option>
	<Option value="philosophy category"> philosophy category </option>
	<Option value="history category"> History Class </option>
	<Option value="Pedagogy category"> Pedagogy category </option>
	<Option value="Psychology category"> Psychology category </option>
	<Option value="statistical category"> statistical category </option>
	<Option value="math class"> Mathematical category </option>
	<Option value="physics category"> physics class </option>
	<Option value="chemical category"> chemical categories </option>
	<Option value="category of Geology and Mineral Resources"> category of Geology and Mineral Resources </option>
	<Option value="basic medical category"> basic medical category </option>
	<Option value="preventive medicine category"> category of preventive medicine </option>
	<Option value="clinical medicine and medical technology"> clinical medicine and medical technology </option>
	<Option value="oral medicine category"> Oral Medicine category </option>
	<Option value="Chinese medicine"> Chinese medical category </option>
	<Option value="forensic type"> forensic science class </option>
	<Option value="Nursing category"> nursing category </option>
	<Option value="Pharmaceutical"> Pharmaceutical </option>
	<Option value="bio-engineering"> Biological Engineering </option>
	<Option value="biological sciences category"> biological sciences category </option>
	<Option value="physical education class"> physical education class </option>
	<Option value="new category of professional education"> emerging category of professional education </option>
	<Option value="materials science category"> Materials Science category </option>
	<Option value="sociological category"> sociology class </option>
	<Option value="Marxist theory category"> Marxist theory class </option>
	<Option value="political science class"> political science class </option>
	<Option value="public security of category"> category of the Public Order </option>
	<Option value="animal medicine category"> Animal Medical </option>
	<Option value="Animal Production category"> Animal Production category </option>
	<Option value="agriculture, forestry, economics and management"> agriculture, forestry, economics and management </option>
	<Option value="Plant Production category"> Plant Production category </option>
	<Option value="grassland science category"> grassland science category </option>
	<Option value="forest resources category"> forest resources category </option>
	<Option value="forest engineering"> forest engineering </option>
	<Option value="ecological environment"> environmental ecology </option>
	<Option value="agricultural engineering category"> agricultural engineering </option>
	<Option value="public security technology"> public security technology </option>
	<Option value="Engineering Mechanics category"> Engineering Mechanics category </option>
	<Option value="weapons category"> weapons category </option>
	<Option value="aerospace category"> aerospace category </option>
	<Option value="marine engineering"> marine engineering </option>
	<Option value="aquatic category"> Aquatic category </option>
	<Option value="Energy and power"> energy and power </option>
	<Option value="environmental sciences category"> environmental sciences category </option>
	<Option value="mechanical category"> mechanics class </option>
	<Option value="marine science category"> marine science class </option>
	<Option value="atmospheric sciences category"> atmospheric sciences category </option>
	<Option value="Geology category"> geology class </option>
	<Option value="Astronomy category"> astronomy class </option>
	<Option value="geographical science category"> geographical science category </option>
	<Option value="geophysics category"> geophysics category </option>
	<Option value="Environment and Security category"> Environment and Security category </option>
	<Option value="Book files of type"> Archives of books category </option>
  </select></td>
  </tr>
    <tr>
    <td></td>
  <td>Work experience</td><td><select name="experience">
	<option value="Fresh Health">Fresh Health</option>
	<option selected="selected" value="1 year">1 year</option>
	<option value="2 years">2 years</option>
	<option value="3 years">3 years</option>
	<option value="3--5 years">3--5 years</option>
	<option value="5--10 years">5--10 years</option>
	<option value="More than 10 years">More than 10 years</option>
  </select>
  </td></tr>
  
    <tr>
    <td></td>
  <td>Self-evaluation</td><td><textarea name="selfAppreciation" style="height:80px;width:300px;"></textarea></td></tr>
  
   <tr>
    <td></td>
  <td>Foreign Language</td><td><select name="languageSkill">
	<Option value="Chinese"> Chinese </option>
	<Option selected="selected" value ="English"> English </option>
	<Option value="Japanese"> Japanese </option>
	<Option value="Russian"> Russian </option>
	<Option value="French"> French </option>
	<Option value="German"> German </option>
	<Option value="Italian"> Italian </option>
	<Option value="Spanish"> Spanish </option>
	<Option value="Korean"> Korean </option>
	<Option value="Mongolian"> Mongolian </option>
	<Option value="Portuguese"> Portuguese </option>
	<Option value="Vietnamese"> Vietnamese </option>
	<Option value="Esperanto"> Esperanto </option>
	<Option value="Arabic"> Arabic </option>
	<Option value="Thai"> Thai </option>
	<Option value="Latin"> Latin </option>
	<Option value="other"> other </option>
   </Select></td></tr>
    <tr>
    <td class="org14">*</td>
  <td>E-mail</td><td><input name="email" type="text"></td>
  </tr>
    <tr>
    <td></td>
 <td>Telphone</td><td><input name="telphone" type="text"></td></tr>
    <tr>
    <td class="org14">*</td>
  <td>Mobile</td><td><input name="mobile" type="text"></td>
  </tr>
    <tr>
    <td></td>
  <td>Address</td><td><input name="address" type="text"> </td></tr>
    <tr>
    <td class="org14">*</td>
  <td>Resume</td>
  <td><textarea name="resume" style="height:80px;width:300px;"></textarea></td></tr>
    <tr>
    <td></td>
<td></td><td><input type="submit" name="Submit" value="Submit"></td></tr></table>
</div>
</form>