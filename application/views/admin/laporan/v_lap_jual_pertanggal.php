<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LAPORAN PENJUALAN PER TANGGAL</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<body onload="window.print()">
<div class="container-fluid" id="laporan">

<center><h1>POS REPORT BY DATE</h1></center><br/>

<?php 
    $b=$jml->row_array();
?>
<table class="table">
<thead>
<tr>
<th colspan="11" style="text-align:left;">Date : <?php echo $b['jual_tanggal'];?></th>
</tr>
    <tr class="bg-light">
        <th style="width:50px;">No</th>
        <th>Invoice</th>
        <th>Date</th>
        <th>ID Product</th>
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
        $nofak=$i['jual_nofak'];
        $tgl=$i['jual_tanggal'];
        $kobar=$i['d_jual_barang_id'];
        
        $nabar=$i['d_jual_barang_nama'];
        $satuan=$i['d_jual_barang_satuan'];
        
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $nofak;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:center;"><?php echo $kobar;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:left;"><?php echo $satuan;?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($harjul);?></td>
        <td style="text-align:center;"><?php echo $qty;?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($diskon);?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="8" style="text-align:right;"><h4><b>Total</b></h4></td>
        <td colspan="2" style="text-align:right;"><h4><b><?php echo ' '.number_format($b['total']);?></b></h4></td>
    </tr>
</tfoot>
</table>

<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
<br/>
</div>
</body>
</html>