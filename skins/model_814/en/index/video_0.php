<ul id="playerDIV" >
	<li id="container"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8"
width="320" height="256" id="theMediaPlayer">
<param name=movie value="<?php echo get_root_path() ?>inc/img/video/player.swf">
<param name=quality value="high">
<param name=bgcolor value="#FFFFFF">
<param name=allowFullScreen value="false">
<param name=swLiveConnect value="true">
<param name=allowScriptAccess value="sameDomain">
<param name="FlashVars" value="file=<?php echo $o->filePath ?>&width=290&height=240&displaywidth=290&displayheight=230&autostart=true&backcolor=0xFFFFFF">

<embed type="application/x-shockwave-flash" 
pluginspage="http://www.macromedia.com/go/getflashplayer" 
width="320" height="256" bgcolor="#FFFFFF" 
name="theMediaPlayer" src="<?php echo get_root_path() ?>inc/img/video/player.swf"
flashvars="file=<?php echo $o->filePath ?>&width=290&height=240&displaywidth=290&displayheight=230&autostart=true&backcolor=0xFFFFFF">
</embed>
</object></li>
</ul>	