<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LAPORAN PENJUALAN</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

</head>
<body onload="window.print()">
<div class="container-fluid" id="laporan">

<center><h1>SALES REPORT</h1></center><br/></td>



<table class="table">
<thead>
    <tr class="bg-info text-white text-center">
        <th style="width:50px;">No</th>
        <th>Invoice</th>
        <th>Date</th>
        <th>ID Product</th>
        <th>Product</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Discount</th>
        <th>Total</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        $nofak=$i['jual_nofak'];
        $tgl=$i['jual_tanggal'];
        $barang_id=$i['d_jual_barang_id'];
        $barang_nama=$i['d_jual_barang_nama'];
        $barang_satuan=$i['d_jual_barang_satuan'];
        $barang_harjul=$i['d_jual_barang_harjul'];
        $barang_qty=$i['d_jual_qty'];
        $barang_diskon=$i['d_jual_diskon'];
        $barang_total=$i['d_jual_total'];
?>
   <?php 
        $this->load->view('admin/menu');
   ?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="padding-left:5px;"><?php echo $nofak;?></td>
        <td style="text-align:center;"><?php echo $tgl;?></td>
        <td style="text-align:center;"><?php echo $barang_id;?></td>
        <td style="text-align:left;"><?php echo $barang_nama;?></td>
        <td style="text-align:left;"><?php echo $barang_satuan;?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($barang_harjul);?></td>
        <td style="text-align:center;"><?php echo $barang_qty;?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($barang_diskon);?></td>
        <td style="text-align:right;"><?php echo ' '.number_format($barang_total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>
<?php 
    $b=$jml->row_array();
?>
    <tr>
        <td colspan="8" class="text-right"><h4><b>Total</b></h4></td>
        <td colspan="2" style="text-align:right;"><h4><b><?php echo ' '.number_format($b['total']);?></b></h4></td>
    </tr>
</tfoot>
</table>

<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
</div>
</body>
</html>_