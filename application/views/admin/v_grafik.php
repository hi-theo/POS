<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>GRAFIK PENJUALAN</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header">GRAFIK PENJUALAN
                    
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <table class="table" id="mydata">
                <thead>
                    <tr class="bg-info text-white">
                        <th>No</th>
                        <th>Grafik</th>
                        <th>Set</th>
                    </tr>
                </thead>
                <tbody>
                
                   <!-- <tr>
                        <td style="text-align:center;vertical-align:middle">1</td>
                        <td style="vertical-align:middle;">Grafik Stok Barang</td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/grafik/graf_stok_barang'?>" target="_blank"><span class="fa fa-eye"></span> Lihat</a>
                        </td>
                    </tr>-->

                    <tr>
                        <td style="text-align:center;vertical-align:middle">1</td>
                        <td style="vertical-align:middle;">Grafik Penjualan Bulanan</td>
                        <td style="text-align:center;">
                            <a class="button" href="#lap_jual_perbulan" data-toggle="modal">Cek</a>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align:center;vertical-align:middle">2</td>
                        <td style="vertical-align:middle;">Grafik Penjualan Tahunan</td>
                        <td style="text-align:center;">
                            <a class="button" href="#lap_jual_pertahun" data-toggle="modal">Cek</a>
                        </td>
                    </tr>
              
                </tbody>
            </table>
            </div>
        </div>
        <!-- /.row -->
        

        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_jual_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Periode Bulanan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/grafik/graf_penjualan_perbulan'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bulan</label>
                        <div class="col-xs-9">
                                <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" required/>
                                <?php foreach ($jual_bln->result_array() as $k) {
                                    $bln=$k['bulan'];
                                ?>
                                    <option><?php echo $bln;?></option>
                                <?php }?>
                                </select>
                        </div>
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="button"><span class="fa fa-eye"></span> Cek</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_jual_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Periode Tahunan</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/grafik/graf_penjualan_pertahun'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tahun</label>
                        <div class="col-xs-9">
                                <select name="thn" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Tahun" required/>
                                <?php foreach ($jual_thn->result_array() as $t) {
                                    $thn=$t['tahun'];
                                ?>
                                    <option><?php echo $thn;?></option>
                                <?php }?>
                                </select>
                        </div>
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="button"><span class="fa fa-eye"></span> Cek</button>
                </div>
            </form>
            </div>
            </div>
        </div>



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
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: 'DD MMMM YYYY HH:mm',
                });
                
                $('#datepicker').datetimepicker({
                    format: 'YYYY-MM-DD',
                });
                $('#datepicker2').datetimepicker({
                    format: 'YYYY-MM-DD',
                });

                $('#timepicker').datetimepicker({
                    format: 'HH:mm'
                });
            });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    
</body>

</html>
