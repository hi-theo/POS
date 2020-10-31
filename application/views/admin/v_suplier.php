<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SUPPLIER BASED</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/4-col-portfolio.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header text-center"><i class="lni-users"></i> <br/>Supplier based
                                    </h1>
									<p class="text-center">For add new supplier click icon + </p>
			<div class="text-center"><a href="#" class="btn btn-lg btn-success rounded-circle" data-toggle="modal" data-target="#largeModal">+</a></div>
            </div>
			        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table border" id="mydata">
                <thead>
                    <tr>
                        <th class="bg-info text-white" style="text-align:center;width:40px;">No</th>
                        <th class="bg-info text-white">Suplier</th>
                        <th class="bg-info text-white">Address</th>
                        <th class="bg-info text-white">Phone</th>
                        <th class="bg-info text-white" style="width:140px;text-align:center;">Set</th>
                    </tr>
                </thead>
				   <?php 
        $this->load->view('admin/menu');
   ?>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['suplier_id'];
                        $nm=$a['suplier_nama'];
                        $alamat=$a['suplier_alamat'];
                        $notelp=$a['suplier_notelp'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?></td>
                        <td><?php echo $alamat;?></td>
                        <td><?php echo $notelp;?></td>
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
                <h3 class="modal-title" class="text-center" id="myModalLabel">Add Suplier</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/tambah_suplier'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Suplier</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" placeholder="supplier" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Address</label>
                        <div class="col-xs-9">
                            <input name="alamat" class="form-control" type="text" placeholder="Address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Phone</label>
                        <div class="col-xs-9">
                            <input name="notelp" class="form-control" type="text" placeholder="Phone" required>
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
                        $id=$a['suplier_id'];
                        $nm=$a['suplier_nama'];
                        $alamat=$a['suplier_alamat'];
                        $notelp=$a['suplier_notelp'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Edit Suplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/edit_suplier'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Suplier</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" placeholder="" value="<?php echo $nm;?>" style="width:280px;" required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Address</label>
                        <div class="col-xs-9">
                            <input name="alamat" class="form-control" type="text" placeholder="" value="<?php echo $alamat;?>" style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Phone</label>
                        <div class="col-xs-9">
                            <input name="notelp" class="form-control" type="text" placeholder="" value="<?php echo $notelp;?>" style="width:280px;" required>
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
                        $id=$a['suplier_id'];
                        $nm=$a['suplier_nama'];
                        $alamat=$a['suplier_alamat'];
                        $notelp=$a['suplier_notelp'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="modal-title" id="myModalLabel">Hapus Suplier</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/suplier/hapus_suplier'?>">
                        <div class="modal-body">
                            <p>Ana akan menghapus supplier..?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="button">Hapus</button>
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
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    
</body>

</html>
