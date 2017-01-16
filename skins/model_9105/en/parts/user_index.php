<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />
<div id="stuffbox">
<ul>
<?php user_info() ?>
</ul>
</div>
<?php
function user_info()
{
	global $db,$params,$request;
	if(!empty($_SESSION[TB_PREFIX.'user_ID']))
	{
		$sql = "select * from ".TB_PREFIX."user where id=".$_SESSION[TB_PREFIX.'user_ID'];
		$user = $db->get_row($sql);
		?>
		<table border="0" id="tbguest">
		<form name="form1" method="post" action="<?php echo get_root_path() ?>/?m=user&a=edit">
  		<tr>
  		<td>用户名：</td>
    	<td><input name="username" id="username" size="20" value="<?php echo $user->username ?>" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /> <font color="Red">*</font><span id="username_info"></span></td>
  		</tr>
  		<tr>
  		<td>email：</td>
   		<td><input name="username" id="username" size="20" value="<?php echo $user->email ?>" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /> <font color="Red">*</font><span id="username_info"></span></td>
  		</tr>
  		<tr>
  		<td>昵称：</td>
    	<td><input name="username" id="username" size="20" value="<?php echo $user->nickname ?>" type="text" onMouseOver="this.style.borderColor='#9ecc00'" onMouseOut="this.style.borderColor='#D2D9D8'" /> <font color="Red">*</font><span id="username_info"></span></td>
  		</tr>
  		<tr>
  		<td>ip：</td>
    	<td><?php echo $user->ip ?></td>
  		</tr>
  		</form>
		</table>
		<?php
	}
}
?>
