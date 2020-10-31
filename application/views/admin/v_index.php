<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CLEAN POS POINT OF SALE WEB BASED</title>

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

</head>

<body class="bg-white text-secondary">
<!--<img src="<?php echo base_url().'assets/img/win2.jpg'?>" alt="gambar" class="img-fluid" width="100%" />-->

<div class="masthead-followup row m-0 border border-white">
<div class="col-12 col-md-12 p-3 p-md-3 bg-white border border-white">
<h1 class="text-center"><a href="#">POINT OF SALE</a></h1>
<!--<a href="welcome" class="text-secondary"><i class="lni-home"></i><small>Home</small></a>--> 
</div>
	   <?php $h=$this->session->userdata('akses'); ?>
                    <?php $u=$this->session->userdata('user'); ?>
                    <?php if($h=='1'){ ?> 
		<div class="col-12 col-md-3 p-3 p-md-5 bg-white border border-dashed border-thick">
<h3><i class="lni-database"></i> DATABASED</h3><hr/><ul>
     <li><a class="text-danger" href="<?php echo base_url().'admin/pengguna'?>"><i class="lni-user"></i>User Staff</a> </li>
     <li><a class="text-danger" href="<?php echo base_url().'admin/suplier'?>"><i class="lni-users"></i> Supplier</a></li>
	<li><a class="text-danger" href="<?php echo base_url().'admin/kategori'?>"><i class="lni-ticket"></i> Categories</a></li>
    <li><a class="text-danger" href="<?php echo base_url().'admin/barang'?>"><i class="lni-package"></i> Product</a></li>
	<ul>
</div>
		<div class="col-12 col-md-3 p-3 p-md-5 bg-white border border-dashed border-thick">
<h3><i class="lni-calculator"></i> TRANSACTION</h3><hr/>
<ul>
<li><a class="text-info" href="<?php echo base_url().'admin/pembelian'?>"><i class="lni-enter"></i> Purchase Order</a> </li>
<li><a class="text-info" href="<?php echo base_url().'admin/penjualan_grosir'?>"><i class="lni-cart-full"></i> Wholesale Sales</a></li>
<li><a class="text-info" href="<?php echo base_url().'admin/penjualan'?>"><i class="lni-cart"></i> Point Of Sale Retail</a></li>
<li><a class="text-info" href="<?php echo base_url().'admin/retur'?>"><i class="lni-exit"></i> Wholesale Return</a></li>
<ul>
        </div>
		<div class="col-12 col-md-3 p-3 p-md-5 bg-white border border-dashed border-thick">
		   <?php 
        $this->load->view('admin/menu');
   ?>
<h3><i class="lni-clipboard"></i> INVENTORI</h3><hr/><ul>
	  <li><a class="text-success" href="<?php echo base_url().'admin/laporan/lap_stok_barang'?>"><i class="lni-dropbox"></i> Stok Inventori</a></li>
      <li><a class="text-success" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>"><i class="lni-folder"></i> Item Product</a></li>
	  <li><a class="text-success" href="<?php echo base_url().'admin/grafik/graf_stok_barang'?>"><i class="lni-archive"></i> Product Chart</a></li>
	  <ul>
</div>
		<div class="col-12 col-md-3 p-3 p-md-5 bg-white border border-dashed border-thick">
<h3><i class="lni-clipboard"></i> REPORT</h3><hr/><ul>
      <li><a class="text-primary" href="<?php echo base_url().'admin/laporan/lap_data_penjualan'?>"><i class="lni-shopping-basket"></i> Sales Report</a></li>
      <li><a class="text-primary" href="<?php echo base_url().'admin/laporan'?>"><i class="lni-credit-cards"></i> Profit Income</a></li>
	  <li><a class="text-primary" href="<?php echo base_url().'admin/grafik'?>"><i class="lni-bar-chart"></i> Sale Chart</a></li>
	  <ul>
</div>
		<div class="col-12 col-md-12 p-3 p-md-3 bg-white border border-white text-center">
		<a href="<?php echo base_url().'administrator/logout'?>" class="button btn-danger text-white">Shut Down</a>
		</div>
		</div>
		  <?php }?>
        <!-- /.row -->
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
