<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>LAPORAN STOK</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
	
</head>
<body onload="window.print()">
<div class="container-fluid text-center" id="laporan">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->



<h1>STOK REPORT</h1><br/>
 


<table border="1" class="text-center table">
<?php 
    $urut=0;
    $nomor=0;
    $group='-';
    foreach($data->result_array()as $d){
    $nomor++;
    $urut++;
    if($group=='-' || $group!=$d['kategori_nama']){
        $kat=$d['kategori_nama'];
        $query=$this->db->query("SELECT kategori_id,kategori_nama,barang_nama,SUM(barang_stok) AS tot_stok FROM tbl_kategori JOIN tbl_barang ON kategori_id=barang_kategori_id WHERE kategori_nama='$kat'");
        $t=$query->row_array();
        $tots=$t['tot_stok'];
        if($group!='-')
        echo "</table><br>";
        echo "<table class='table text-center' border='1'>";
        echo "<tr><td colspan='2' class='text-center'><b>$kat</b></td> <td style='text-align:center;'><b>Total Stok: $tots </b></td></tr>";
echo "<tr style='background-color:#ccc;'>
    <td width='4%' align='center'>No</td>
    <td width='60%' align='center'>Product</td>
    <td width='30%' align='center'>Update Stok</td>
    
    </tr>";
$nomor=1;
    }
    $group=$d['kategori_nama'];
        if($urut==500){
        $nomor=0;
            echo "<div class='pagebreak'> </div>";
            //echo "<center><h2>KALENDER EVENTS PER TAHUN</h2></center>";
            }
        ?>
        <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $d['barang_nama']; ?></td>
                <td><?php echo $d['barang_stok']; ?></td>  
        </tr>
        

        <?php
        }
        ?>
</table>


</div>

<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
</body>
</html>