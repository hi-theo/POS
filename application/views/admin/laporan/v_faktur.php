<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>HOCKEY MF-POS POINT OF SALE WEB BASED</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <!-- Bootstrap Core CSS -->
</head>
<body onload="window.print()">
<div class="container" id="laporan">
<?php 
    $b=$data->row_array();
?><br/>
<h3 class="text-center"><strong>INVOICE</strong></h3>
<table class="table">
        <tr class="bg-light">
            <th style="text-align:left;">Invoice No</th>
            <th style="text-align:left;">: <?php echo $b['jual_nofak'];?></th>
            <th style="text-align:left;">Total</th>
            <th style="text-align:left;">: <?php echo ' '.number_format($b['jual_total']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Date</th>
            <th style="text-align:left;">: <?php echo $b['jual_tanggal'];?></th>
            <th style="text-align:left;">Payment</th>
            <th style="text-align:left;">: <?php echo ' '.number_format($b['jual_jml_uang']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Transaction</th>
            <th style="text-align:left;">: Point Of Sale</th>
            <th style="text-align:left;">Change</th>
            <th style="text-align:left;">: <?php echo ' '.number_format($b['jual_kembalian']).',-';?></th>
        </tr>
</table>

<table class="table">
<thead>

    <tr class="bg-light">
        <th style="width:50px;">No</th>
        <th>Product</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Discount</th>
        <th>SubTotal</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        
        $nabar=$i['d_jual_barang_nama'];
        $satuan=$i['d_jual_barang_satuan'];
        
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $nabar;?></td>
        <td><?php echo $satuan;?></td>
        <td><?php echo ' '.number_format($harjul);?></td>
        <td><?php echo $qty;?></td>
        <td><?php echo ' '.number_format($diskon);?></td>
        <td><?php echo ' '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="5" style="text-align:right;"><b>Total</b></td>
        <td colspan="2" style="text-align:center;"><b><?php echo ' '.number_format($b['jual_total']);?></b></td>
    </tr>
</tfoot>
</table>
<p class="text-center">thank you<br/>
</div>
</body>
</html>