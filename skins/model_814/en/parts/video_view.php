<link rel="stylesheet" href="<?php echo get_skin_root() ?>css/parts.css" type="text/css" />

<h3><?php data('video.title')?></h3>
<div id="stuffbox">
<ul id="playerDIV" >
	<li>keywords：<?php data('video.tags')?></li>
	<li>Video Size：<?php data('video.fileSize')?></li>
	<li id="container"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8"
width="400" height="320" id="theMediaPlayer">
<param name=movie value="<?php echo get_root_path() ?>inc/img/video/player.swf">
<param name=quality value="high">
<param name=bgcolor value="#FFFFFF">
<param name=allowFullScreen value="false">
<param name=swLiveConnect value="true">
<param name=allowScriptAccess value="sameDomain">
<param name="FlashVars" value="file=<?php data('video.filePath')?>&width=400&height=320&displaywidth=396&displayheight=300&autostart=true&backcolor=0xFFFFFF">

<embed type="application/x-shockwave-flash" 
pluginspage="http://www.macromedia.com/go/getflashplayer" 
width="400" height="320" bgcolor="#FFFFFF" 
name="theMediaPlayer" src="<?php echo get_root_path() ?>inc/img/video/player.swf"
flashvars="file=<?php data('video.filePath')?>&width=400&height=320&displaywidth=396&displayheight=300&autostart=true&backcolor=0xFFFFFF">
</embed>
</object></li>
	<li> Video Profile：<?php data('video.description')?></li>
</ul>	

</div>