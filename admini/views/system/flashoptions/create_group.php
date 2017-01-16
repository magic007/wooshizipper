<link rel="STYLESHEET" type="text/css" href="<?php echo get_root_path()?>/inc/css/colorPicker/dhtmlxcolorpicker.css">
<script type="text/javascript">
<!--
	window.dhx_globalImgPath="<?php echo get_root_path()?>/inc/img/colorPicker/";
-->
</script>
<script type="text/javascript" src="<?php echo get_root_path()?>/inc/js/colorPicker/dhtmlxcolorpicker.js"></script>

<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php&l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=flashoptions&l=<?php echo $request['l']?>">Flash调用管理</a>  → <a href="./index.php?m=system&s=flashoptions&a=create_group&l=<?php echo $request['l']?>">添加一个新的Flash</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
 <form name="form1" method="post" action="?m=system&s=flashoptions&a=create_group&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">添加flash图片组 | <a href="javascript:history.back(1)">返回</a> </td>
    <td width="72"><div align="right">
      <input name="submit" type="submit" value=" 保存 " />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr>
          <td width="108">flash名称</td>
          <td width="1056">
            <input type="text" class="txt" name="title" id="title" style="width:300px"></td>
          </tr>
		 <tr>
          <td width="108">flash注释</td>
          <td><textarea name="summary" rows="3" class="txt" id="summary" style="width:96%"></textarea></td>
        </tr>
		<tr>
          <td width="108">flash文字颜色</td>
          <td><input type="text" name="title_text_color" id="title_text_color" value="0xffffff">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('title_text_color',310,240);" align="absmiddle" height="22" width="16" /></td>
        </tr>
		<tr>
          <td width="108">文字背景颜色</td>
          <td><input type="text" name="title_bg_color" id="title_bg_color" value="0xff6600">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('title_bg_color',310,270);" align="absmiddle" height="22" width="16" /></td>
        </tr>
		<tr>
          <td width="108">文字背景透明度</td>
          <td><input type="text" name="title_bg_alpha" id="title_bg_alpha" value="60">(0到100之间)</td>
        </tr>
		<tr>
          <td width="108">Flash轮换时间</td>
          <td><input type="text" name="autoPlayTime" id="autoPlayTime" value="8">(单位:秒)</td>
        </tr>
		<tr>
          <td width="108">图片过渡效果</td>
          <td><input type="text" name="transformFlag" id="transformFlag" value="2">(过滤效果有alpha过滤(值为0)、bright过滤(值为1)、blur过滤(值为2)、blurM过滤(值为3))</td>
        </tr>
		<tr>
          <td width="108">按键文字颜色</td>
          <td><input type="text" name="btn_text_color" id="btn_text_color" value="0xffffff">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_text_color',310,365);" align="absmiddle" height="22" width="16" /></td>
        </tr>
		<tr>
          <td width="108">按键默认颜色</td>
          <td><input type="text" name="btn_over_color" id="btn_over_color" value="0xff6600">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_over_color',310,395);" align="absmiddle" height="22" width="16" /></td>
        </tr>
		<tr>
          <td width="108">按键当前颜色</td>
          <td><input type="text" name="btn_out_color" id="btn_out_color" value="0x000033">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_out_color',310,415);" align="absmiddle" height="22" width="16" /></td>
        </tr>
      </table>	
	  </td>
  </tr></form>
</table>
<script type="text/javascript">
	function init1(e,w,d){
	var z=new dhtmlXColorPicker();
	z.init();
	z.setPosition(w,d);
	z.setOnSelectHandler(function(color){
		document.getElementById(e).value=color;
	});	}
</script>