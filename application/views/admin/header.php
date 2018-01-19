<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>Akbid Jambi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content=""> <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/charisma-app.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/fullcalendar.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/fullcalendar.print.css" rel='stylesheet' media='print'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/chosen.min.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/colorbox.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/responsive-tables.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-tour.min.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/jquery.noty.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/noty_theme_default.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/elfinder.min.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/elfinder.theme.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/jquery.iphone.toggle.css" rel='stylesheet'>
        <link href="<?php echo base_url(); ?>asset/bootstrap/css/uploadify.css" rel='stylesheet'>	

		<link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-file-input.css" rel="stylesheet">
		
		<link href="<?php echo base_url(); ?>asset/bootstrap/css/datepicker.css" rel="stylesheet">
		
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>asset/bootstrap/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap-file-input.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
  </head>

  <body>

<header class="navbar navbar-default" role="navigation">
	  <div class="container">
		<div class="navbar-inner">
		  <button type="button" class="navbar-toggle pull-left animated flip">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>asset/bootstrap/img/logo_akbid.png"> </a>

			<ul class="collapse navbar-collapse nav navbar-nav top-menu">
			  <li><a href="<?php echo base_url(); ?>"><i class="glyphicon glyphicon-home icon-white"></i> Beranda</a></li>
			  <li><a href="<?php echo base_url(); ?>index.php/admin/"><i class="glyphicon glyphicon-book icon-white"></i> Home</a></li>
			 
			  <li><a href="<?php echo base_url(); ?>index.php/admin/data_artikel"><i class="glyphicon glyphicon-pencil icon-white"></i> Artikel</a></li>
			  
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment icon-white"></i> Master <b class="caret"></b></a>
				<ul class="dropdown-menu">
					  <li><a href="<?php echo base_url(); ?>index.php/admin/data_mahasiswa"> Data Mahasiswa</a></li>
					  <li><a href="<?php echo base_url(); ?>index.php/admin/data_mk"> Data Matakuliah</a></li> 
					  <li><a href="<?php echo base_url(); ?>index.php/admin/data_dosen"> Data Dosen</a></li> 
				</ul>
			  </li>

			   <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-file icon-white"></i> Informasi <b class="caret"></b></a>
				<ul class="dropdown-menu">
					  <li><a href="<?php echo base_url(); ?>index.php/admin/nilai">Informasi Nilai</a></li> 
					  <li><a href="<?php echo base_url(); ?>index.php/admin/pmb">Informasi Pendaftaran Mahasiswa Baru</a></li> 
				</ul>
			  </li>
			  
			  
			</ul>
			<div class="btn-group navbar-form pull-right">
			  <button class="btn btn-default"><i class="glyphicon glyphicon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>index.php/app/ganti_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>

		</div>
	  </div>
	</header>