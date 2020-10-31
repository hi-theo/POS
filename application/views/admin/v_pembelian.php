<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PURCHASE ORDER</title>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
	
    <link href="<?php echo base_url().'assets/css/dataTables.bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/dist/css/bootstrap-select.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-datetimepicker.min.css'?>">
	
</head>

<body>

    <!-- Page Content -->
    <div class="container-fluid">

            <center><?php echo $this->session->flashdata('msg');?></center>
                <h1 class="page-header text-center">PURCHASE</h1>
   
        <!-- /.row -->
            <div class="col-lg-12">
            <form action="<?php echo base_url().'admin/pembelian/add_to_cart'?>" method="post">
            <table class="table bg-light">
                <tr>
                    <th>Invoice</th>
                    <th><input type="text" name="nofak" value="<?php echo $this->session->userdata('nofak');?>" class="form-control input-sm" style="width:200px;" required></th>
                    <th>Suplier</th>
                    <td>
                    <select name="suplier" class="selectpicker show-tick form-control" data-live-search="true" title="Select Suplier" data-width="100%" required>
                        <?php foreach ($sup->result_array() as $i) {
                            $id_sup=$i['suplier_id'];
                            $nm_sup=$i['suplier_nama'];
                            $al_sup=$i['suplier_alamat'];
                            $notelp_sup=$i['suplier_notelp'];
                            $sess_id=$this->session->userdata('suplier');
                            if($sess_id==$id_sup)
                                echo "<option value='$id_sup' selected>$nm_sup - $al_sup - $notelp_sup</option>";
                            else
                                echo "<option value='$id_sup'>$nm_sup - $al_sup - $notelp_sup</option>";
                        }?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <div class='input-group date' id='datepicker'>
                            <input type='text' name="tgl" class="form-control" value="<?php echo $this->session->userdata('tglfak');?>" placeholder="Date" required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="bg-light">
                <tr>
                    <th>ID PRODUK</th>
                </tr>
                <tr>
                    <th><input type="text" name="kode_brg" id="kode_brg" class="form-control input-sm"></th>                     
                </tr>
                    <div id="detail_barang" style="position:absolute;">
                    </div>
            </table>
             </form>
            <table class="table">
                <thead>
                    <tr class="bg-info text-white">
                        <th>ID Product</th>
                        <th>Product</th>
                        <th style="text-align:center;">Unit</th>
                        <th style="text-align:center;">Buy Price</th>
                        <!--<th style="text-align:center;">Harga Jual</th>-->
                        <th style="text-align:center;">Qty</th>
                        <th style="text-align:center;">Sub Total</th>
                        <th style="width:100px;text-align:center;">Set</th>
                    </tr>
                </thead>
				   <?php 
        $this->load->view('admin/menu');
   ?>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr>
                         <td><?=$items['id'];?></td>
                         <td><?=$items['name'];?></td>
                         <td style="text-align:center;"><?=$items['satuan'];?></td>
                         <td style="text-align:right;"><?php echo number_format($items['price']);?></td>
                         <!--<td style="text-align:right;"><?php echo number_format($items['harga']);?></td>-->
                         <td style="text-align:center;"><?php echo number_format($items['qty']);?></td>
                         <td style="text-align:right;"><?php echo number_format($items['subtotal']);?></td>
                         <td style="text-align:center;"><a href="<?php echo base_url().'admin/pembelian/remove/'.$items['rowid'];?>" class="btn btn-danger btn-xs rounded-circle">X</a></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" style="text-align:right;"><h4>Total</h4></td>
                        <td colspan="2" style="text-align:right;"><h4><?php echo number_format($this->cart->total());?></h4></td>
                    </tr>
                </tfoot>
            </table>
            <a href="<?php echo base_url().'admin/pembelian/simpan_pembelian'?>" class="btn btn-info btn-lg btn-block">TRANSACTION</a>
            </div>
        </div>
        <!-- /.row -->
        

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
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").keyup(function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'admin/pembelian/get_barang';?>",
               data: kobar,
               success: function(msg){
               $('#detail_barang').html(msg);
               }
            });
            }); 

            $("#kode_brg").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>
    
</body>

</html>
