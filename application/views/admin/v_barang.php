<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PRODUK BASED</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
</head>

<body>



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header"><i class="lni-package"></i><br/>PRODUCT ITEM</h1>
<p>For add new product item click icon + </p>
<a href="#" class="btn btn-lg rounded-circle btn-success" data-toggle="modal" data-target="#largeModal">+</a>
               
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table border" id="mydata">
                <thead>
                    <tr class="bg-info text-white">
                        <th style="text-align:center;width:40px;">No</th>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Categori</th>
                        <th>Unit</th>
                        <th>Buy</th>
                        <th>Retail</th>
                        <th>Wholesale</th>
                        <th>Stok</th>
                        <!--<th>Min Stok</th>-->
                        <th style="width:100px;text-align:center;">Set</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $satuan=$a['barang_satuan'];
                        $harpok=$a['barang_harpok'];
                        $harjul=$a['barang_harjul'];
                        $harjul_grosir=$a['barang_harjul_grosir'];
                        $stok=$a['barang_stok'];
                        $min_stok=$a['barang_min_stok'];
                        $kat_id=$a['barang_kategori_id'];
                        $kat_nama=$a['kategori_nama'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nm;?></td>
						<td><?php echo $kat_nama;?></td>
                        <td style="text-align:center;"><?php echo $satuan;?></td>
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($harpok);?></td>
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                        <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul_grosir);?></td>
                        <td style="text-align:center;"><?php echo $stok;?></td>
                        <!--<td style="text-align:center;"><?php echo $min_stok;?></td>-->
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="myModalLabel">Add New Produk</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/tambah_barang'?>">
                <div class="modal-body">

                    <!--<div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barcode</label>
                        <div class="col-xs-9">
                            <input name="kobar" class="form-control" type="text" placeholder="Barcode" required>
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Product</label>
                        <div class="col-xs-9">
                            <input name="nabar" class="form-control" type="text" placeholder="Nama Produk" required>
                        </div>
                    </div>

                     <div class="form-group">
                            <label class="control-label col-xs-3" >Categori</label>
                            <div class="col-xs-9">
                                <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" placeholder="Pilih Kategori" required>
                                <?php foreach ($kat2->result_array() as $k2) {
                                    $id_kat=$k2['kategori_id'];
                                    $nm_kat=$k2['kategori_nama'];
                                    ?>
                                        <option value="<?php echo $id_kat;?>"><?php echo $nm_kat;?></option>
                                <?php }?>
                                    
                                </select>
                            </div>
                        </div>

                 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Unit</label>
                        <div class="col-xs-9">
                             <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Select Unit" placeholder="Pilih Satuan" required>
                                <option>Unit</option>
                                <option>Box</option>
                                <option>bottle</option>
                                <option>Portion</option>
                                <option>Sachet</option>
                                <option>Pack</option>
                                <option>Roll</option>
                                <option>PCS</option>
                                <option>Meter</option>
                                <option>Centimeter</option>
                                <option>Liter</option>
                                <option>Mililiter</option>
                                <option>Dozen</option>
                                <option>Container</option>
                                <option>Sheet</option>
								<option>Gram</option>
                                <option>Kilogram</option>
                                <option>Option</option>
								<option>x</option>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Buy Price</label>
                        <div class="col-xs-9">
                            <input name="harpok" class="harpok form-control" type="text" placeholder="Harga Pembelian">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Retail Price</label>
                        <div class="col-xs-9">
                            <input name="harjul" class="harjul form-control" type="text" placeholder="Harga Jual Retail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Wholesale Price</label>
                        <div class="col-xs-9">
                            <input name="harjul_grosir" class="harjul form-control" type="text" placeholder="Harga Jual Grosir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input name="stok" class="form-control" type="number" placeholder="Stok Saat ini">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Minim Stok</label>
                        <div class="col-xs-9">
                            <input name="min_stok" class="form-control" type="number" placeholder="">
                        </div>
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="button">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL EDIT =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $satuan=$a['barang_satuan'];
                        $harpok=$a['barang_harpok'];
                        $harjul=$a['barang_harjul'];
                        $harjul_grosir=$a['barang_harjul_grosir'];
                        $stok=$a['barang_stok'];
                        $min_stok=$a['barang_min_stok'];
                        $kat_id=$a['barang_kategori_id'];
                        $kat_nama=$a['kategori_nama'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Product</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/edit_barang'?>">
                        <div class="modal-body">

                        <!--<div class="form-group">
                            <label class="control-label col-xs-3" >Kode Barang</label>
                            <div class="col-xs-9">
                                <input name="kobar" class="form-control" type="text" value="<?php echo $id;?>" placeholder="Kode Barcode">
                            </div>
                        </div>-->

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Product</label>
                            <div class="col-xs-9">
                                <input name="nabar" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="produk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Categori</label>
                            <div class="col-xs-9">
                                <select name="kategori" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Kategori" placeholder="Pilih Kategori" required>
                                <?php foreach ($kat2->result_array() as $k2) {
                                    $id_kat=$k2['kategori_id'];
                                    $nm_kat=$k2['kategori_nama'];
                                    if($id_kat==$kat_id)
                                        echo "<option value='$id_kat' selected>$nm_kat</option>";
                                    else
                                        echo "<option value='$id_kat'>$nm_kat</option>";
                                }
                                ?>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Satuan</label>
                            <div class="col-xs-9">
                                 <select name="satuan" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Satuan" placeholder="Pilih Satuan" required>
                                    <?php if($satuan=='Unit'):?>
                                        <option selected>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Kotak'):?>
                                        <option>Unit</option>
                                        <option selected>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Botol'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option selected>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Butir'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option selected>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Buah'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option selected>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Biji'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option selected>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Sachet'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option selected>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Bks'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option selected>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Roll'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option selected>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='PCS'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option selected>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Box'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option selected>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Meter'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option selected>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Centimeter'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option selected>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Liter'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option selected>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='CC'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option selected>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Mililiter'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option selected>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Lusin'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option selected>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Gross'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option selected>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Kodi'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option selected>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Rim'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option selected>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Dozen'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option selected>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Kaleng'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option selected>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Lembar'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option selected>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Helai'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option selected>Helai</option>
                                        <option>Gram</option>
                                        <option>Kilogram</option>
                                    <?php elseif($satuan=='Gram'):?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option selected>Gram</option>
                                        <option>Kilogram</option>
                                    <?php else:?>
                                        <option>Unit</option>
                                        <option>Kotak</option>
                                        <option>Botol</option>
                                        <option>Butir</option>
                                        <option>Buah</option>
                                        <option>Biji</option>
                                        <option>Sachet</option>
                                        <option>Bks</option>
                                        <option>Roll</option>
                                        <option>PCS</option>
                                        <option>Box</option>
                                        <option>Meter</option>
                                        <option>Centimeter</option>
                                        <option>Liter</option>
                                        <option>CC</option>
                                        <option>Mililiter</option>
                                        <option>Lusin</option>
                                        <option>Gross</option>
                                        <option>Kodi</option>
                                        <option>Rim</option>
                                        <option>Dozen</option>
                                        <option>Kaleng</option>
                                        <option>Lembar</option>
                                        <option>Helai</option>
                                        <option>Gram</option>
                                        <option selected>Kilogram</option>
                                    <?php endif;?>
                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Buy Price</label>
                            <div class="col-xs-9">
                                <input name="harpok" class="harpok form-control" type="text" value="<?php echo $harpok;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Retail Price</label>
                            <div class="col-xs-9">
                                <input name="harjul" class="harjul form-control" type="text" value="<?php echo $harjul;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Wholesale Price</label>
                            <div class="col-xs-9">
                                <input name="harjul_grosir" class="harjul form-control" type="text" value="<?php echo $harjul_grosir;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Stok</label>
                            <div class="col-xs-9">
                                <input name="stok" class="form-control" type="number" value="<?php echo $stok;?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Minim Stok</label>
                            <div class="col-xs-9">
                                <input name="min_stok" class="form-control" type="number" value="<?php echo $min_stok;?>" required>
                            </div>
                        </div>

                    </div>
                        <div class="modal-footer">
                            <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                            <button type="submit" class="button">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!-- ============ MODAL HAPUS =============== -->
        <?php
                    foreach ($data->result_array() as $a) {
                        $id=$a['barang_id'];
                        $nm=$a['barang_nama'];
                        $harpok=$a['barang_harpok'];
                        $harjul=$a['barang_harjul'];
                        $stok=$a['barang_stok'];
                        $min_stok=$a['barang_min_stok'];
                        $kat_id=$a['barang_kategori_id'];
                        $kat_nama=$a['kategori_nama'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/barang/hapus_barang'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data barang ini..?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="button" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="button button-outline">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <footer>

<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
	   <?php 
        $this->load->view('admin/menu');
   ?>
    <script type="text/javascript">
        $(function(){
            $('.harpok').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>
    
</body>

</html>
