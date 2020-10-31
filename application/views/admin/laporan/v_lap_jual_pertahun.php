<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PENJUALAN TAHUNAN</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>
<body onload="window.print()">
<div class="container-fluid" id="laporan">

<?php 
    $b=$jml->row_array();
?>
<center><h1><?php echo $b['tahun'];?></h1></center><br/>
 
<table class="table">
<?php 
    $urut=0;
    $nomor=0;
    $group='-';
    foreach($data->result_array()as $d){
    $nomor++;
    $urut++;
    if($group=='-' || $group!=$d['bulan']){
        $bulan=$d['bulan'];
        $query=$this->db->query("SELECT jual_nofak,DATE_FORMAT(jual_tanggal,'%M %Y') AS bulan,DATE_FORMAT(jual_tanggal,'%d %M %Y') AS jual_tanggal,d_jual_barang_id,d_jual_barang_nama,d_jual_barang_satuan,d_jual_barang_harpok,d_jual_barang_harjul,d_jual_qty,d_jual_diskon,SUM(d_jual_total) AS total FROM tbl_jual JOIN tbl_detail_jual ON jual_nofak=d_jual_nofak WHERE DATE_FORMAT(jual_tanggal,'%M %Y')='$bulan'");
        $t=$query->row_array();
        $tots=$t['total'];
        if($group!='-')
        echo "</table><br>";
        echo "<table class='table'>";
        echo "<tr><td colspan='8'><b> $bulan</b></td> <td style='text-align:right;'><b>Total:</b></td><td style='text-align:right;'><b>".'Rp '.number_format($tots)."</b></td></tr>";
echo "<tr style='background-color:#ccc;'>
    <td width='3%' align='center'>No</td>
    <td width='8%' align='center'>Invoice</td>
    <td width='10%' align='center'>Date</td>
    <td width='10%' align='center'>ID Product</td>
    <td width='30%' align='center'>Product</td>
    <td width='7%' align='center'>Unit</td>
    <td width='7%' align='center'>Price</td>
    <td width='5%' align='center'>Qty</td>
    <td width='7%' align='center'>Discount</td>
    <td width='10%' align='center'>Subtotal</td>
    
    </tr>";
$nomor=1;
    }
    $group=$d['bulan'];
        if($urut==500){
        $nomor=0;
            echo "<div class='pagebreak'> </div>";
            //echo "<center><h2>KALENDER EVENTS PER TAHUN</h2></center>";
            }
        ?>
        <tr>
                <td style="text-align:center;vertical-align:top;text-align:center;"><?php echo $nomor; ?></td>
                <td style="vertical-align:top;padding-left:5px;"><?php echo $d['jual_nofak']; ?></td>
                <td style="vertical-align:top;text-align:center;"><?php echo $d['jual_tanggal']; ?></td>
                <td style="vertical-align:top;padding-left:5px;"><?php echo $d['d_jual_barang_id']; ?></td>
                <td style="vertical-align:top;padding-left:5px;"><?php echo $d['d_jual_barang_nama']; ?></td> 
                <td style="vertical-align:top;padding-left:5px;"><?php echo $d['d_jual_barang_satuan']; ?></td>
                <td style="vertical-align:top;padding-left:5px;text-align:right;"><?php echo ' '.number_format($d['d_jual_barang_harjul']); ?></td>
                <td style="vertical-align:top;padding-left:5px;text-align:center;"><?php echo $d['d_jual_qty']; ?></td>
                <td style="vertical-align:top;padding-left:5px;text-align:right;"><?php echo ' '.number_format($d['d_jual_diskon']); ?></td>
                <td style="vertical-align:top;padding-left:5px;text-align:right;"><?php echo ' '.number_format($d['d_jual_total']); ?></td> 
        </tr>
        

        <?php
        }
        ?>
</table>


<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
</div>
</body>
</html>