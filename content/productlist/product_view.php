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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><dl>
      <dd>Product name：
        <?php data('product.name')?>
      </dd>
      <dd>Reading Mode：
        <?php data('product.sn') ?>
      </dd>
      <dd>Means of communication：
        <?php data('product.spec') ?>
      </dd>
      <dd>Hits：
        <?php data('product.counts') ?>
      </dd>
      <dd>Input Time：
        <?php data('product.dtTime') ?>
      </dd>
      <dd>Product description：
        <?php data('product.summary') ?>
      </dd>
    </dl></td>
    <td width="250"><a href = "<?php data('product.origialPic')?>"><img src="<?php data('product.middlePic')?>" width="250" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2"><?php data('product.content') ?></td>
  </tr>
  <tr>
    <td colspan="2">Hits：
      <?php data('product.counts') ?>
Input Time：
<?php data('product.dtTime') ?>
</td>
  </tr>
</table>
