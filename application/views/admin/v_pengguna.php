<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>USER STAFF BASED</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/little.ttf'?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
            <center><?php echo $this->session->flashdata('msg');?>
                <h1 class="page-header"><i class="lni-user"></i> <br/>User Staff Databased</h1>
<p>click icon + for add new user.</p>
<a href="#" class="btn btn-lg btn-success rounded-circle" data-toggle="modal" data-target="#largeModal">+</a>
                </center>
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
                        <th class="bg-info text-white">Name</th>
                        <th class="bg-info text-white">Username</th>
                        <th class="bg-info text-white" style="width:140px;text-align:center;">Set</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no=0;
                    foreach ($data->result_array() as $a):
                        $no++;
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no;?></td>
                        <td><?php echo $nm;?></td>
                        <td><?php echo $username;?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span> Edit</a>
                            <a class="btn btn-xs btn-danger" href="#modalHapusPelanggan<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span> Delete</a>
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
                <h3 class="modal-title" id="myModalLabel">Add User Staff</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/tambah_pengguna'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password" placeholder="" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Repeat</label>
                        <div class="col-xs-9">
                            <input name="password2" class="form-control" type="password" placeholder="" required>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" required>
                                <option value="1">Admin</option>
                                <option value="2">Cashier</option>
                            </select>
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
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                    ?>
                <div id="modalEditPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit User</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/edit_pengguna'?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id;?>">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" value="<?php echo $nm;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" value="<?php echo $username;?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Repeat</label>
                        <div class="col-xs-9">
                            <input name="password2" class="form-control" type="password">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" required>
                            <?php if ($level=='1'):?>
                                <option value="1" selected>Admin</option>
                                <option value="2">Cashier</option>
                            <?php else:?>
                                <option value="1">Admin</option>
                                <option value="2" selected>Cashier</option>
                            <?php endif;?>
                            </select>
                        </div>
                    </div>

                </div>
                        <div class="modal-footer">
                            <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="button" class="button">Update</button>
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
                        $id=$a['user_id'];
                        $nm=$a['user_nama'];
                        $username=$a['user_username'];
                        $password=$a['user_password'];
                        $level=$a['user_level'];
                        $status=$a['user_status'];
                    ?>
                <div id="modalHapusPelanggan<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">NonAktifkan Pengguna</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/pengguna/nonaktifkan'?>">
                        <div class="modal-body">
                            <p>Yakin mau menonaktifkan hapus pengguna <b><?php echo $nm;?></b>..?</p>
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
   <?php 
        $this->load->view('admin/menu');
   ?>
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
