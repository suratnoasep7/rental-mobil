<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Rental Mobil Corp</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />

<!-- v4.0.0 -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Cabin:300,400,500,600,700" rel="stylesheet" />

<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/et-line-font/et-line-font.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons/themify-icons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-lineicon/simple-line-icons.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/css/dataTables.bootstrap.min.css" />
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="<?php echo base_url();?>assets/js/adminkit.js"></script> 

<!-- Morris JavaScript --> 
<script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/morris/morris.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/functions/dashboard1.js"></script> 

<!-- Chart Peity JavaScript --> 
<script src="<?php echo base_url();?>assets/plugins/peity/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>assets/plugins/functions/jquery.peity.init.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script> 

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="<?php echo base_url('dashboard');?>" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-lg"></span>
    <!-- logo for regular state and mobile devices --> 
     </a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="<?php echo base_url('dashboard');?>"></a> </li>
      </ul>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="<?php echo base_url();?>assets/img/img1.jpg" class="img-circle" alt="User Image" /> </div>
        <div class="info">
          <p><?php echo ucfirst($this->session->userdata('is_username')); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li class="<?php if($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)==""){echo "active";}?>"><a href="<?php echo base_url('dashboard');?>"><i class="icon-grid"></i> <span>Dashboard</span></a></li>
        <li class="<?php if($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="data_user" || $this->uri->segment(2)=="data_mobil"){echo "active";}?> treeview"> <a href="#"> <i class="icon-layers"></i> <span>Data Master</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <?php 
        	foreach ($menu->result() as $row) {
        	?>
        	<li><a href="<?php echo base_url($row->link_menu);?>"><i class="fa fa-angle-right"></i> <span><?php echo $row->nama_menu ?></span></a></li>
        	<?php
        		} 
       		?>
          </ul>
        </li>   
        <li><a href="<?php echo base_url('logout');?>"><i class="icon-logout"></i> <span>Logout</span></a></li>    
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header sty-one">
      <h1>
        <?php 
          if(isset($title)) {
            echo $title;
          };
        ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>">Home</a></li>
        <li><i class="fa fa-angle-right"></i> <?php 
          if(isset($title)) {
            echo $title;
          };
        ?></li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <?php 
      	if(isset($content)){
      		$this->load->view($content);
      	} else {
      ?>
      	<div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Total Booking</h6>
                <h1 class="text-white">5,500</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Total User</h6>
                <h1 class="text-white">2,040</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-3">
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Total Profit</h6>
                <h1 class="text-white">Rp 8,590</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      	};
      ?>
      <!-- /.row --> 
    </section>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018. All rights reserved.</footer>
</div>
<!-- ./wrapper --> 
</body>
</html>
