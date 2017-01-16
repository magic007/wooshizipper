<style>
@import"<?php echo get_skin_root() ?>css/parts.css";
</style>

<h3><?php data('video.title')?></h3>
<div id="stuffbox">
<ul id="playerDIV" >
	<li>关键字：<?php data('video.tags')?></li>
	<li>视频简介：<?php data('video.description')?></li>
	<li>视频大小：<?php data('video.fileSize')?></li>
	<li id="videoBorder"></li>
</ul>	

</div>
<script type="text/jscript">
var rmID="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA";
var wmID="clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95";
var swfID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000";
var thePlayer;

function doPlay(fPath){
  if(!fPath)fPath=document.getElementById("txtURL").value;
  if(fPath==""||fPath==null)return(false);
  fType=fPath.substring(fPath.lastIndexOf(".")+1).toLowerCase();
  if(thePlayer){
  	document.getElementById("theTurePlayerID").outerHTML="";
  }
  thePlayer=document.createElement("object");
  thePlayer.width="100%";
  thePlayer.height="100%";
  thePlayer.style.display="none";
  thePlayer.id="theTurePlayerID";
  document.getElementById("videoBorder").appendChild(thePlayer);
  switch(fType){
    case "rm":case "rmvb":
    	thePlayer.classid=rmID;
    	with(thePlayer){
    		_ExtentX=12118;_ExtentY=8573;
    		AUTOSTART=-1;SHUFFLE=0;PREFETCH=0;
    		NOLABELS=0;CONTROLS="Imagewindow";
    		LOOP=0;NUMLOOP=0;CENTER=0;
    		MAINTAINASPECT=0;BACKGROUNDCOLOR="#000000";
    	}
    	thePlayer.Source=fPath;
    	thePlayer.DoPlay();
    break;
    case "swf":
    	thePlayer.classid=swfID;
    	thePlayer.movie=fPath;
    break;
    default:
    	thePlayer.classid=wmID;
    	thePlayer.fileName=fPath;
    	thePlayer.Play();
  }
  
  setTimeout("thePlayer.style.display='';",100);
  //doPlay('<!--{$video_content->filePath}-->');
}
doPlay('<?php data('video.filePath')?>');
</script>