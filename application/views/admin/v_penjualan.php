<!DOCTYPE html>
<html lang="en">

<head>
    <title>Point of Sale Retail</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- Bootstrap Core CSS -->
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

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
            <center><?php echo $this->session->flashdata('msg');?></center>
                               <h1 class="page-header text-primary"><i class="lni-cart"></i><br/>Point of sale Retail</h1>
				<p><small>Max 6 product item in transaction form,after 6 item product you can create new transaction again</small></p>
				<p>For search product click icon.</p>
                    <a class="btn btn-primary btn-lg rounded-circle" href="#" data-toggle="modal" data-target="#largeModal"><i class="lni-search"></i></a>
                 
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            <div class="col-lg-12">
            <form action="<?php echo base_url().'admin/penjualan/add_to_cart'?>" method="post">
            <table>
                <tr>
                    <th>ID Product</th>
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
                    <tr class="bg-primary text-white">
                        <th>ID Product</th>
                        <th>Product</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                        <th>Del</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                    <tr>
                         <td><?=$items['id'];?></td>
                         <td><?=$items['name'];?></td>
                         <td><?=$items['satuan'];?></td>
                         <td><?php echo number_format($items['amount']);?></td>
                         <td><?php echo number_format($items['disc']);?></td>
                         <td><?php echo number_format($items['qty']);?></td>
                         <td><?php echo number_format($items['subtotal']);?></td>
                        
                         <td><a href="<?php echo base_url().'admin/penjualan/remove/'.$items['rowid'];?>" class="btn btn-danger rounded-circle btn-xs">x</a></td>
                    </tr>
                    
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
			<hr/>
            <form class="text-right" action="<?php echo base_url().'admin/penjualan/simpan_penjualan'?>" method="post">
<h4>Total : <input type="text" name="total2" value="<?php echo number_format($this->cart->total());?>" readonly>
                    <input type="hidden" id="total" name="total" value="<?php echo $this->cart->total();?>" readonly><hr/>
Payment : <input type="text" id="jml_uang" name="jml_uang" required>
                    <input type="hidden" id="jml_uang2" name="jml_uang2" required><hr/>
                Change : <input type="text" id="kembalian" name="kembalian" required></h4>
            <br/><br/>
			<button type="submit" class="btn btn-primary btn-lg btn-block"> TRANSACTION </button>
			</form>
            <hr/>
        </div>
        <!-- /.row -->
        <!-- ============ MODAL ADD =============== -->
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">List Produk</h3>
            </div>
                <div class="modal-body" style="overflow:scroll;height:500px;">

                                  <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th style="text-align:center;width:40px;">No</th>
                            <th>ID Product</th>
                            <th>Product</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Stok</th>
                            <th>Set</th>
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
                            <td style="text-align:center;"><?php echo $satuan;?></td>
                            <td style="text-align:right;"><?php echo 'Rp '.number_format($harjul);?></td>
                            <td style="text-align:center;"><?php echo $stok;?></td>
                            <td style="text-align:center;">
                            <form action="<?php echo base_url().'admin/penjualan/add_to_cart'?>" method="post">
                            <input type="hidden" name="kode_brg" value="<?php echo $id?>">
                            <input type="hidden" name="nabar" value="<?php echo $nm;?>">
                            <input type="hidden" name="satuan" value="<?php echo $satuan;?>">
                            <input type="hidden" name="stok" value="<?php echo $stok;?>">
                            <input type="hidden" name="harjul" value="<?php echo number_format($harjul);?>">
                            <input type="hidden" name="diskon" value="0">
                            <input type="hidden" name="qty" value="1" required>
                                <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-edit"></span> Select</button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>    

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary text-white" data-dismiss="modal" aria-hidden="true">Close</button>
                    
                </div>
            </div>
            </div>
        </div>

        

        <!-- ============ MODAL HAPUS =============== -->
        

        <!--END MODAL-->

        <hr>

        <!-- Footer -->
        <footer>

<center><a href="<?php echo base_url().'welcome'?>" class="btn btn-primary text-center">Back Home</a></center>
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
        $(function(){
            $('#jml_uang').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(function(){
            $('.jml_uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#jml_uang2').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#kembalian').priceFormat({
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
	   <?php 
        $this->load->view('admin/menu');
   ?>
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").on("input",function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'admin/penjualan/get_barang';?>",
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
