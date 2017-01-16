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
<dd>Name：<?php data('product.name')?></dd>
<dd>Id：<?php data('product.sn') ?></dd>
<dd>Specifications：<?php data('product.spec') ?></dd>
<dd>Original：<?php data('product.sellingPrice') ?></dd>
<dd>Price：<?php data('product.preferPrice') ?></dd>
<dd>Hits：<?php data('product.counts') ?></dd>
<dd>Introduction：<?php data('product.summary') ?></dd>
<dd>Details：<?php data('product.content') ?></dd>
</div>