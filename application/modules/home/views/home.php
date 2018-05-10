

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Rental Mobil Corp</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url();?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="<?php echo base_url();?>assets/user/vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="<?php echo base_url();?>assets/user/vendor/select2/css/select2-bootstrap.css" />
      <link href="<?php echo base_url();?>assets/user/vendor/select2/css/select2.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url();?>assets/user/css/osahan.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/user/transition/transition.css" rel="stylesheet">
      <style>
      	.navbar-brand {
      		padding-top: 0px !important;
      	}
      	.btn-sewa {
      		width: 100%;
      	}
      	.section-padding {
      		background: #eceff1;
      	}

      	.section-booking {
      		padding: 0px;
      	}
      	body.transition.loading main {
      		height: auto !important;
      	}
      	body.transition main {
      		height: 550px !important;
      	}
      </style>
   </head>
   <body class="transition loading">
     <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-github" viewBox="0 0 32.6 31.8">
				<title>github</title>
				<path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z"/>
			</symbol>
		</svg>
		<main>
			<div class="content content--intro">
				
				<div class="content__inner">
					<header>
			        	<nav class="navbar navbar-expand-lg navbar-light bg-light">
				            <div class="container">
				               <a class="navbar-brand logo" href="index.html">
				             	<span>Rental Mobil Corp</span>
				               </a>
				               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				               <span class="navbar-toggler-icon"></span>
				               </button>
				               <div class="collapse navbar-collapse" id="navbarResponsive">
				                  
				                  <div class="my-2 col-md-12">
				                     <ul class="list-inline main-nav-right float-right">
				                        <li class="list-inline-item">
				                           <a class="btn btn btn-outline-primary btn-sm">Home</a>
				                        </li>
				                        <li class="list-inline-item">
				                           <a class="btn btn-primary btn-sm" href="<?php echo base_url('login'); ?>"><i class="mdi mdi-security-account"></i> Login</a>
				                        </li>
				                     </ul>
				                  </div>
				               </div>
				            </div>
			         	</nav>
			      	</header>
			      	<section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
               <li data-target="#osahanslider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active slider-one">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item slider-two">
                  <div class="overlay"></div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="slider-form">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                            <select class="form-control select2 no-radius">
                             	<option value="">Semua</option>
                                <?php 
                                	foreach ($data_kota->result() as $row) {
                              	?>
                              	<option value="<?php echo $row->id_kota ?>"><?php echo $row->nama_kota; ?></option>
                              	<?php
                                	}
                                ?>
                             </select>
                        </div>
                    </div>
                   	<div class="col-md-3">
                      	<div class="input-group">
                         	<div class="input-group-addon"><i class="mdi mdi-calendar"></i></div>
                         	<input class="form-control" placeholder="Tanggal Sewa" type="date">
                      	</div>
                   	</div>
                   	<div class="col-md-3">
                      	<div class="input-group">
                         	<div class="input-group-addon"><i class="mdi mdi-timer"></i></div>
                        	<select class="form-control select2 no-radius">
                            	<option value="">Durasi</option>
                            	<?php 
                            		foreach ($data_durasi->result() as $row) {
                            	?>
									<option value="<?php echo $row->id_durasi ?>"><?php echo $row->lama_durasi ?></option>
                            	<?php
                            		}
                            	?>
                         	</select>
                      </div>
                   	</div>
                   	<div class="col-md-3">  
                      <button type="button" class="btn btn-secondary btn-block no-radius font-weight-bold" id="btn-search">SEARCH</button>
                   	</div>
                </div>
               
            </div>
         </div>
      </section>
      <section class="section-padding">
         <div class="container">
         	<div class="content">
         		<?php $this->load->view('content', array('data_mobil'=>$data_mobil)) ?>
         	</div>
            <div class="row mt-4">
               <div class="col-md-12 text-center">
                  <button class="btn btn-secondary font-weight-bold btn-lg" type="submit">VIEW ALL</button>
               </div>
            </div>
         </div>
      </section>
				</div>
				<div class="shape-wrap">
					<svg class="shape" width="100%" height="100vh" preserveAspectRatio="none" viewBox="0 0 1440 800" xmlns:pathdata="http://www.codrops.com/">
						<path d="M -44,-50 C -52.71,28.52 15.86,8.186 184,14.69 383.3,22.39 462.5,12.58 638,14 835.5,15.6 987,6.4 1194,13.86 1661,30.68 1652,-36.74 1582,-140.1 1512,-243.5 15.88,-589.5 -44,-50 Z" pathdata:id="M -44,-50 C -137.1,117.4 67.86,445.5 236,452 435.3,459.7 500.5,242.6 676,244 873.5,245.6 957,522.4 1154,594 1593,753.7 1793,226.3 1582,-126 1371,-478.3 219.8,-524.2 -44,-50 Z"></path>
					</svg>
				</div>
			</div><!-- /content -->
			<div class="content content--fixed">
				<div class="content__inner">
					<header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px 0px">
            <div class="container">
               <a class="navbar-brand logo" href="<?php echo base_url(); ?>" style="margin: 7px 0px 0px;">
             	<span><i class="mdi mdi-chevron-left" style="color: #304ffe;font-size: 2.5rem;"></i></span>
               </a>
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
               		<div class="col-md-12 text-center">
               			<h2>Rental Mobil Corp</h2>
               		</div>
               </div>
            </div>
         </nav>
      </header>
      <section class="section-padding">
      	<div class="container">
      		<?php $this->load->view('booking') ?>
      	</div>
      </section>
				</div>
			</div>
			<!-- Bootstrap core JavaScript -->
      <script src="<?php echo base_url();?>assets/user/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <script src="<?php echo base_url();?>assets/user/js/jqBootstrapValidation.js"></script>
      <script src="<?php echo base_url();?>assets/user/js/contact_me.js"></script>
      <!-- select2 Js -->
      <script src="<?php echo base_url();?>assets/user/vendor/select2/js/select2.min.js"></script>
      <!-- Custom -->
      <script src="<?php echo base_url();?>assets/user/js/custom.js"></script>
      <script>
      	$(document).ready(function(){
			$("#btn-search").click(function(){ 
				$.ajax({
					url: '<?php echo base_url();?>home/pencarian',
					type: 'POST',
					dataType: "json",
					success: function(msg){ 
						$('.content').html(msg.response);
					}
				});
			});
			$('.enter').click(function() {
				$('.shape').css('display','block');
				$('.shape-wrap').css('display','block');
			})
		});
      </script>
			<script src="<?php echo base_url();?>assets/user/transition/imagesloaded.pkgd.min.js"></script>
			<script src="<?php echo base_url();?>assets/user/transition/charming.min.js"></script>
			<script src="<?php echo base_url();?>assets/user/transition/anime.min.js"></script>
			<script src="<?php echo base_url();?>assets/user/transition/transition.js"></script>
   </body>
</html>

