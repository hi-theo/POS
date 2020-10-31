<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Laporan detail</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <!-- Bootstrap Core CSS -->

</head>

<body class="bg-white text-secondary text-center">
<div class="masthead-followup row m-3 border border-white">
<div class="col-12 col-md-12 p-3 p-md-5 bg-white text-secondary border border-white">
<h1><i class="lni-credit-cards"></i><br/>PROFIT REPORT</h1>
</div>
<div class="col-12 col-md-3 p-3 p-md-5 bg-info border border-white">
<!--<a href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank">Print</a>
<a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/laporan/lap_stok_barang'?>" target="_blank">Print</a>-->

                            <h3><a class="text-white" href="#lap_jual_pertanggal" data-toggle="modal"><i class="lni-money-protection"></i><br/>By date</a></h3></div>
<div class="col-12 col-md-3 p-3 p-md-5 bg-info border border-white">
                            <h3><a class="text-white" href="#lap_jual_perbulan" data-toggle="modal"><i class="lni-money-protection"></i><br/>By Month</a></h3></div>
                   <div class="col-12 col-md-3 p-3 p-md-5 bg-info border border-white">
                            <h3><a class="text-white" href="#lap_jual_pertahun" data-toggle="modal"><i class="lni-money-protection"></i><br/>By Years</a></h3></div>
<div class="col-12 col-md-3 p-3 p-md-5 bg-info border border-white">
                            <h3><a class="text-white" href="#lap_laba_rugi" data-toggle="modal"><i class="lni-money-protection"></i><br/>Income Profit</a></h3>

            </div>
        </div>
		
        <!-- /.row -->
		
		
		
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade text-center" id="lap_jual_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title text-center" id="myModalLabel">BY DATE</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_pertanggal'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Transaction Date</label>
                        <div class="col-xs-9">
                            <div class='input-group date' id='datepicker'>
                                <input type='text' name="tgl" class="form-control" value="" placeholder="Insert Date" required/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="button"><span class="fa fa-print"></span> View</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_jual_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title text-center" id="myModalLabel">By Month</h3>
            </div>
            <form class="form-horizontal text-center" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_perbulan'?>" target="_blank">
                <div class="modal-body">

  <label class="control-label col-xs-3" >Select Period</label>
                                <select name="bln" class="" data-live-search="true" title="Pilih Bulan" data-width="100%" required/>
                                <?php foreach ($jual_bln->result_array() as $k) {
                                    $bln=$k['bulan'];
                                ?>
                                    <option><?php echo $bln;?></option>
                                <?php }?>
                                </select>
                       

                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="button"><span class="fa fa-print"></span> View</button>
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
                <h3 class="modal-title" id="myModalLabel">BY YEARS</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_pertahun'?>" target="_blank">
                <div class="modal-body">

               
                        <label class="control-label col-xs-3" >Select year</label>
   
                                <select name="thn" class="" data-live-search="true" title="" data-width="100%" required/>
                                <?php foreach ($jual_thn->result_array() as $t) {
                                    $thn=$t['tahun'];
                                ?>
                                    <option><?php echo $thn;?></option>
                                <?php }?>
                                </select>
                    

                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="button">View </button>
                </div>
            </form>
            </div>
            </div>
        </div>


         <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="lap_laba_rugi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">PROFIT INCOME</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_laba_rugi'?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Select Period</label>
                        
                                <select name="bln" class="" data-live-search="true" title="Pilih Bulan" data-width="80%" required/>
                                <?php foreach ($jual_bln->result_array() as $k) {
                                    $bln=$k['bulan'];
                                ?>
                                    <option><?php echo $bln;?></option>
                                <?php }?>
                                </select>
                     
                    </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="button button-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="button">View</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <br/>
<center><a href="<?php echo base_url().'welcome'?>" class="button text-center">Back Home</a></center>
        <!--END MODAL-->

       

        <!-- Footer -->


    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/dataTables.bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
	   <?php 
        $this->load->view('admin/menu');
   ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    
</body>

</html>
