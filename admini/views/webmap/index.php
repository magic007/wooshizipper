<style type="text/css" media="all">
a,a:visited {color:#333;text-decoration:none;}
a:hover {color:#f60;}
body,td {font:13px "Geneva","宋体", "Arial", "Helvetica",sans-serif;}
ul,li {margin:0;padding:0;list-style:none;}
h1,h2,h3,h4,h5,h6 {margin:0;padding:0;}
h1 {padding:5px;color:#900;font:16px bold "Geneva","宋体", "Arial", "Helvetica",sans-serif;}
h1 small {font-size:11px;font-weight:normal;color:#660;}
.TreeWrap {width:200px;}
.MenuBox .titBox a,
.MenuBox .titBox a:visited,
.MenuBox2 .titBox a,
.MenuBox2 .titBox a:visited {margin-left:10px;padding-left:40px;color:#003;font-size:12px;display:block;}
.MenuBox .titBox h3 a {background:url(/admini/images/tree/ico_folder_open.gif) no-repeat 0 40%;}
.MenuBox .titBox h3.Fst a {background:url(/admini/images/tree/ico_folder_open_fst.gif) no-repeat 0 40%;}
.MenuBox .titBox h3.Lst a {background:url(/admini/images/tree/ico_folder_open_lst.gif) no-repeat 0 40%;}
.MenuBox2 .titBox h3 a {background:url(/admini/images/tree/ico_folder.gif) no-repeat 0 40%;}
.MenuBox2 .titBox h3.Fst a {background:url(/admini/images/tree/ico_folder_fst.gif) no-repeat 0 40%;}
.MenuBox2 .titBox h3.Lst a {line-height:250%;background:url(/admini/images/tree/icon_exit.gif) no-repeat 0 0;}
.MenuBox2 .txtBox {display:none;}
.MenuBox .txtBox ul li {padding-left:65px;line-height:150%;}
.MenuBox .txtBox .num {color:#e00;}
.MenuBox .txtBox ul {background:url(/admini/images/tree/line_y.gif) repeat-y 16px 0;}
.MenuBox .txtBox ul li {background:url(/admini/images/tree/t.gif) no-repeat 28px 50%;}
.MenuBox .txtBox ul li.Lst {background:url(/admini/images/tree/t_lst.gif) no-repeat 28px 50%;}
</style>
<script type="text/javascript">
 <!--
 function ExChgClsName(Obj,NameA,NameB){
  var Obj=document.getElementById(Obj)?document.getElementById(Obj):Obj;
  Obj.className=Obj.className==NameA?NameB:NameA;
 }
 function showMenu(iNo){
 ExChgClsName("Menu_"+iNo,"MenuBox","MenuBox2");
 }
-->
</script>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#C5EAF5">
  <tr>
    <td width="50%">频道及栏目管理</td>
    <td width="50%">
	</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF">
	  <div class="TreeWrap">
<?php
	global $db,$request,$webMap;
	if(!empty($webMap))
		{
			$i=0;
			foreach($webMap as $o)
			{
				?>
				<div class="MenuBox" id="Menu_<?php echo $i?>">
				<div class="titBox"><h3><a href="javascript:showMenu('<?php echo $i?>')"><?php echo $o->title?></a></h3></div>	
				<?php 
				$sql = "select * from `".TB_PREFIX."menu` where deep='1' and isHidden='0' and parentId=".$o->id;
				$webMapChildren = $db->get_results($sql);
				if(!empty($webMapChildren))
				{
					echo '<div class="txtBox"><ul>';
					foreach($webMapChildren as $o)
					{
					?>
					<li><a href="#"><?php echo $o->title?></a></li>
					<?php
					}
					echo '</ul></div>';
				}
				echo '</div>';
				$i++;
			}
		}
?>
</div>
	  </td>
  </tr>
</table>