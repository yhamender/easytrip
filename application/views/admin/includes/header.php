<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">
<header class="main-header"> <a href="#" class="logo"> <span class="logo-mini"><b>V</b>I</span> <span class="logo-lg"><b>Easy Trip </b></span> </a>
  <nav class="navbar navbar-static-top" role="navigation"> <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.png" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo "Easy Trip "; ?></span> </a>
          <ul class="dropdown-menu">
            <li class="user-header"> <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.png" class="img-circle" alt="User Image">
              <p> Logged in as: <?php echo "Easy Trip "; ?> <small>Date: <?php echo date('j M Y H:i:s'); ?></small> </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer"> <a href="<?php echo base_url('admin/logout'); ?>" class="btn btn-default btn-flat btn-block">Sign out</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image"> 
	   <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.png" class="img-circle" alt="User Image"> 
	  </div>
      <div class="pull-left info">
        <p><?php echo "Easy Trip "; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
    </div>
    <?php $this->load->view('admin/includes/sidebar'); ?>
  </section>
</aside>
<div class="content-wrapper">
