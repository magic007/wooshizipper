<?php
require_once(ABSPATH.'/inc/models/menu.php');
require_once(ABSPATH.'/inc/class.paint.php');
require_once(ABSPATH.'/inc/class.upload.php');
class menu extends c_menu{
	function menu_power_list_select($name,$select=null)
	{
		$part_common_path=ABSPATH.'/skins/'.STYLENAME.'/'.$_SESSION[TB_PREFIX.'dtLanguage'].'/common/';
		$temp_arr=rec_listFiles($part_common_path);
		echo '<select name="'.$name.'">';
		echo '<option value="common.php">默认样式</option>';
		foreach ($temp_arr as $v)
		{
			$selected=($select==$v)?'selected ':'';
		?>
		<option value="<?php echo $v ?>" <?php echo $selected ?>><?php echo $v ?></option>
		<?php
		}
		echo '</select>';
	}
}
?>