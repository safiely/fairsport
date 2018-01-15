<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Fairsport - Dashboard</title>
	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url();?>assets/css/fairsport-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="<?php echo base_url();?>" target="_blank">Fair Sport</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
		aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="<?php echo base_url();?>dashboard">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-pencil-square-o"></i>
						<span class="nav-link-text">Post</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents">
						<li>
							<a href="<?php echo base_url();?>dashboard/post">New Post</a>
                        </li>
                        <?php 
                        if($_SESSION['logged_in']['type'] === 'admin'){ ?>
						<li>
							<a href="<?php echo base_url();?>dashboard/allpost">All Post</a>
                        </li>
                        <?php } ?>
					</ul>
				</li>
				<?php 
                    if($_SESSION['logged_in']['type'] === 'admin'){ ?>
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
					<a class="nav-link" href="<?php echo base_url();?>dashboard/users">
						<i class="fa fa-fw fa-users"></i>
						<span class="nav-link-text">Users</span>
					</a>
				</li>
				<?php } ?>
			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa fa-fw fa-user"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#logoutModal">
						<i class="fa fa-fw fa-sign-out"></i>Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="content-wrapper">
