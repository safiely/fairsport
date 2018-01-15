<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="fairsport">

	<title>Fairsport - Always New</title>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png"/>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link href="<?php echo base_url();?>assets/css/fairsport-style.css" rel="stylesheet">

</head>

<body>
	<!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-futbol-o" aria-hidden="true"></i> Fairsport</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>about">About</a>
					</li>
					<?php if(isset($_SESSION['logged_in'])){ ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>dashboard">Dashboard</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>logout">Logout</a>
					</li>
					<?php
					}else{
					?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url()?>login">Login</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
