<link rel="STYLESHEET" type="text/css" href="<?php echo get_root_path()?>/inc/css/colorPicker/dhtmlxcolorpicker.css">
<script type="text/javascript">
<!--
	window.dhx_globalImgPath="<?php echo get_root_path()?>/inc/img/colorPicker/";
-->
</script>
<script type="text/javascript" src="<?php echo get_root_path()?>/inc/js/colorPicker/dhtmlxcolorpicker.js"></script>
<script type="text/javascript">  
// 说明 ： 用 Javascript 实现只能输入数字的文本框 
// 整理 ： 孙阳阳 20070715 
function checkNumber(e) 
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	var el = document.getElementById('test');
	var msg = document.getElementById('msg');
	reg = /\d/;
	var result = reg.test(keychar);
	if(!result)
	{         
		el.className = "warn";
		msg.innerHTML = "只能输入数字!&nbsp;&nbsp;";
		return false;
	}
	else 
	{         
		el.className = "";
		msg.innerHTML = ""; 
		return true;     
	} 
} 
</script>
<span id="test"></span>
<div class="location">当前位置: <a href="./">首 页</a> → <a href="./index.php?l=<?php echo $request['l']?>">操作员后台</a> → <a href="./index.php?m=system&s=flashoptions&l=<?php echo $request['l']?>">Flash调用管理</a>  → <a href="./index.php?m=system&s=flashoptions&a=edit_group&group_id=<?php echo $request['group_id'] ?>&l=<?php echo $request['l']?>">修改Flash信息</a></div>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
<form name="form1" method="post" action="?m=system&s=flashoptions&a=edit_group&group_id=<?php echo $request['group_id'] ?>&l=<?php echo $request['l']?>">
  <tr>
    <td width="892">修改flash说明 | <a href="javascript:history.back(1)">返回</a> <a href="?m=system&amp;s=flashoptions&amp;a=create&group_id=<?php echo $request['group_id']; ?>&l=<?php echo $request['l']?>">添加一张图片</a></td>
    <td align="right"><span id="msg" style="color:#FF0000"></span><input name="submit" type="submit" value=" 保存 " /></td>
  </tr>
  <tr>
	<td colspan="2" bgcolor="#FFFFFF">
	 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="108">flash名称</td><td>
            <input type="text" class="txt" name="title" id="title" value="<?php echo $edit_group_item->title ?>" style="width:300px"></td>
          </tr>
		 <tr>
          <td width="108">flash注释</td>
          <td><textarea name="summary" rows="3" class="txt" id="summary" style="width:96%"><?php echo $edit_group_item->summary ?></textarea></td>
        </tr>
		<tr>
          <td width="108">flash文字颜色</td>
          <td><input type="text" name="title_text_color" id="title_text_color" onclick="init1('title_text_color',280,240);" value="<?php echo $edit_group_item->title_text_color ?>">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('title_text_color',280,240);" align="absmiddle" height="22" width="16" />[仅对使用模板下<span style="color:#0000FF">\indexflash\main.swf</span>有效]</td>
        </tr>
		<tr>
          <td width="108">文字背景颜色</td>
          <td><input type="text" name="title_bg_color" id="title_bg_color" onclick="init1('title_bg_color',280,240);" value="<?php echo $edit_group_item->title_bg_color ?>">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('title_bg_color',280,240);" align="absmiddle" height="22" width="16" />[仅对使用模板下<span style="color:#0000FF">\indexflash\main.swf</span>有效]</td>
        </tr>
		<tr>
          <td width="108">文字背景透明度</td>
          <td><input type="text" name="title_bg_alpha" id="title_bg_alpha" value="<?php echo $edit_group_item->title_bg_alpha ?>">(0到100之间)</td>
        </tr>
		<tr>
          <td width="108">Flash轮换时间</td>
          <td><input type="text" name="autoPlayTime" id="autoPlayTime" value="<?php echo $edit_group_item->autoPlayTime ?>">(单位:秒)</td>
        </tr>
		<tr>
          <td width="108">图片过渡效果</td>
          <td><input type="text" name="transformFlag" id="transformFlag" value="<?php echo $edit_group_item->transformFlag ?>">(过滤效果有alpha过滤(值为0)、bright过滤(值为1)、blur过滤(值为2)、blurM过滤(值为3))</td>
        </tr>
		<tr>
          <td width="108">按键文字颜色</td>
          <td><input type="text" name="btn_text_color" id="btn_text_color" onclick="init1('btn_text_color',280,340);" value="<?php echo $edit_group_item->btn_text_color ?>">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_text_color',280,340);" align="absmiddle" height="22" width="16" />[仅对使用模板下<span style="color:#0000FF">\indexflash\main.swf</span>有效]</td>
        </tr>
		<tr>
          <td width="108">按键默认颜色</td>
          <td><input type="text" name="btn_over_color" id="btn_over_color" onclick="init1('btn_over_color',280,360);" value="<?php echo $edit_group_item->btn_over_color ?>">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_over_color',280,360);" align="absmiddle" height="22" width="16" />[仅对使用模板下<span style="color:#0000FF">\indexflash\main.swf</span>有效]</td>
        </tr>
		<tr>
          <td width="108">按键当前颜色</td>
          <td><input type="text" name="btn_out_color" id="btn_out_color" onclick="init1('btn_out_color',280,390);" value="<?php echo $edit_group_item->btn_out_color ?>">&nbsp;<img src="<?php echo get_root_path()?>/inc/img/colorPicker//datePicker.gif" onclick="init1('btn_out_color',280,390);" align="absmiddle" height="22" width="16" />[仅对使用模板下<span style="color:#0000FF">\indexflash\main.swf</span>有效]</td>
        </tr>
		
		<tr>
          <td colspan="2"><?php echo $flashs->render(); ?></td>
          </tr>
      </table>
	</td>
  </tr>
</form>
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