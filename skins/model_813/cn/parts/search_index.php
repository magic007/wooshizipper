<?php
	if(!checkSqlStr($request['keyword']))
	$request['keyword'] = $request['keyword'];
	else
	echo '非法字符';
	global $results,$request;
	if(!empty($results))
	{
?>
		<ul id="scrollbar" style="height:220px">
				    <?php 
					foreach($results as $value){
						echo '<li><a href="/?p='.$value->channelId.'&a=view&r='.$value->id.'">'.$value->title.'</a></li>';
					} 
					?>
				</ul>
		<?php
	}else{
		echo "没有相关信息！";
	}
?>

