<?php 
header('Content-Type: text/xml; charset=utf-8');
require(dirname(__FILE__).'/../config/dt-config.php');
require(ABSPATH.'/inc/class.database.php');
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<bcaster>
<?php
	$group_id=$db->get_var("select id from ".TB_PREFIX."flash_group where sign=1");
	$group_id=empty($group_id)?1:intval($group_id);
	$sql="select * from ".TB_PREFIX."flash where group_id=$group_id order by ordering";
	$flashs=$db->get_results($sql);
	foreach($flashs as $flash)
	echo '<item item_url="'.$flash->picpath.'" link="'.$flash->url.'" itemtitle="'.$flash->summary.'" />';
?>
</bcaster>