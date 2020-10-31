<!DOCTYPE html>
<html>
  <head>
    <title>POS Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href='https://unpkg.com/papercss@1.6.1/dist/paper.min.css' rel='stylesheet'/>
    <!-- Bootstrap -->

	
   
  </head>
  <body class="login-bg bg-secondary text-white text-center">
<div class="col-12 col-md-12 p-3 p-md-3 bg-secondary border border-secondary">
			<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
<h1>L O G I N</h1>
			                <p><?php echo $this->session->flashdata('msg');?></p>
	                        <hr/>
	                        <form action="<?php echo base_url().'administrator/cekuser'?>" method="post"><p class="text-left">Username :</p>
	                        	<input class="form-control" type="text" name="username" placeholder="Username" required><hr/>
								<p class="text-left">Password :</p>
				                <input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
				                <div class="action">
								<hr/>
				                    <button type="submit" class="btn btn-light btn-lg btn-block">Login Now</button>
				                </div>
	                        </form>
			                                
			            </div>
			        </div>


			    </div>
			</div>
		</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    
  </body>
</html>