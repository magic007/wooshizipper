<?php
	if(!checkSqlStr($request['keyword']))
	$request['keyword'] = $request['keyword'];
	else
	echo 'Illegal character';
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
		echo "No related information！";
	}
?>

