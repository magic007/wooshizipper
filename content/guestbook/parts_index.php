<style type="text/css">
<!--
@import"<?php echo get_skin_root() ?>css/parts.css";
-->
</style>
<script language="javascript">
function validator()
{
 	if(form1.name.value=="")
	{alert("请输入您的姓名!"); form1.name.focus(); return false;}
	if(form1.telephone.value=="")
	{alert("请输入您的联系电话!");form1.telephone.focus();return false;}
	if(form1.email.value=="")
	{alert("请输入您的Email!");form1.email.focus();return false;}
	if(form1.content.value=="")
	{alert("请输入您的留言内容!");form1.content.focus();return false;}

}
</script>
<div id="stuffbox">
<table border="0" id="tbguest">
 <form id="form1" name="form1" method="post" action="<?php echo get_root_path() ?>/?p=<?php data('page.id')?>&a=create" onsubmit="return validator()">
  <tr>
    <td>姓名：</td>
    <td><input name="name" type="text" id="name" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" />*</td>
    <td><label>联系电话：</label></td>
    <td><input name="telephone" type="text" id="telephone" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" />*</td>
  </tr>
  <tr>
    <td>Email：</td>
    <td><input name="email" type="text" id="email" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" />*</td>
    <td>QQ：</td>
    <td><input name="qq" type="text" id="qq" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td>公司：</td>
    <td><input name="company" type="text" id="company" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
    <td>主页：</td>
    <td><input name="homepage" type="text" id="homepage" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
  <tr>
    <td>留言内容：</td>
    <td colspan="3"><textarea name="content" style="width:80%;height:60px" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'"></textarea>*
<input type="submit" name="Submit" value="提交" onMouseOver="this.style.borderColor='#9ecc00'"           
            onMouseOut="this.style.borderColor='#D2D9D8'" /></td>
  </tr>
 </form>
</table>
</div>
<?php guestbook_list() ?>
<?php
function guestbook_list()
{

	global $db,$params,$request;

	$sb = new sqlbuilder('mdt',"select * from ".TB_PREFIX."guestbook where channelId=$params[id] and isPublic=1",'id desc',$db,guestbookCount);
	if($sb->results)
	{
		foreach($sb->results as $rst)
		{
			?>
			<table width="95%" border="0" align="center" cellpadding="4" cellspacing="2">
    		<tr>
      		<td width="51%"><strong>留言人</strong>：<?php echo $rst['name']?></td>
      		<td width="49%">留言时间：<?php echo $rst['dtTime']?></td>
    		</tr>
   			<tr>
      		<td colspan="2">内容：<?php echo $rst['content']?></td>
    		</tr>
    		<tr>
      		<td colspan="2" bgcolor="#E1F0FF">回复：<?php echo $rst['content1']?></td>
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
}
?>