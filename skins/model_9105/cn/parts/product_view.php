<script language="javascript">
function printing(tb)
{
 var nw = window.open('','','width=800,height=600')
 nw.document.open("text/html","utf-8")
 <!--nw.document.write("<link rel='stylesheet' type='text/css' href='css/XXX.css'>")-->
 nw.document.write("<object classid='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2' id='wb' height='0' width='0'></object>")
 nw.document.write(document.getElementById(tb).outerHTML)
 nw.document.write("<scrip"+"t>document.all.wb.ExecWB(7,1)</sc"+"ript>")
}
</script>
<div id="commontxtbox">
<a href = "<?php data('product.origialPic')?>"><img src="<?php data('product.middlePic')?>" border="0" /></a>
<dd>产品名称：<?php data('product.name')?></dd>
<dd>型号：<?php data('product.sn') ?></dd>
<dd>规格：<?php data('product.spec') ?></dd>
<dd>市场价：<?php data('product.sellingPrice') ?></dd>
<dd>优惠价：<?php data('product.preferPrice') ?></dd>
<dd>点击数：<?php data('product.counts') ?></dd>
<dd>录入时间：<?php data('product.dtTime') ?></dd>
<dd>产品简介：<?php data('product.summary') ?></dd>
<dd>详细介绍：<?php data('product.content') ?></dd>
<dd>点击数：<?php data('product.counts') ?> 录入时间：<?php data('product.dtTime') ?>【<a href="javascript:printing('commontxtbox')">打印此页</a>】【<a href="javascript:history.back(1)">返回</a>】</dd>
</div>