<style type="text/css">
<!--
.downpropname{color:#555555;font-size:12px;background:#dddddd}
.downprop{color:#555555;font-size:12px;padding-left:10px;background:#f0f0f0}
-->
</style>
<table width="100%" border="0" cellspacing="1" cellpadding="2" style="margin-top:5px;">
  <tr> 
    <td width="80" align="center" class="downpropname">软件名称:</td>
    <td class="downprop"><?php data('download.softwareName')?></td>
  </tr>
  <tr> 
    <td width="80" align="center" class="downpropname">软件大小:</td>
    <td class="downprop"><?php data('download.softwareSize')?></td>
  </tr>
  <tr> 
    <td width="80" align="center" class="downpropname">软件语言:</td>
    <td class="downprop"><?php data('download.language')?></td>
  </tr>
  <tr> 
    <td width="80" align="center" class="downpropname">软件类别:</td>
    <td class="downprop"><?php data('download.classification')?></td>

  </tr>
  <tr> 
    <td width="80" align="center" class="downpropname">应用平台:</td>
    <td class="downprop"><?php data('download.platform')?></td>
  </tr>
  <tr> 
    <td width="80" align="center" class="downpropname">更新时间:</td>
    <td class="downprop"><?php data('download.dtTime')?></td>
  </tr>  
    <tr> 
    <td width="80" align="center" class="downpropname">软件下载:</td>
    <td class="downprop"><a href="<?php data('download.filePath')?>" style="color:#FF0000;">点击下载</a></td>
  </tr> 
     <tr> 
    <td width="80" align="center" class="downpropname">软件描述:</td>
    <td class="downprop"><?php data('download.introduce')?></td>
  </tr> 
</table>