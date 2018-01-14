<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    <?php 
        if($_SESSION['logged_in']['type'] === 'admin'){ ?>
	<!-- Icon Cards-->
	<div class="row">
		<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fa fa-fw fa-users"></i>
					</div>
					<?php if(!empty($users)){ ?>
						<div class="mr-5"><?php echo $users ?> Users!</div>
					<?php }else{ ?>
						<div class="mr-5">0 Users!</div>
					<?php } ?>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fa fa-fw fa-newspaper-o"></i>
					</div>
					<?php if(!empty($posts)){ ?>
						<div class="mr-5"><?php echo $posts ?> Posts!</div>
					<?php }else{ ?>
						<div class="mr-5">0 Posts!</div>
					<?php } ?>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fa fa-fw fa-comments"></i>
					</div>
					<?php if(!empty($comments)){ ?>
						<div class="mr-5"><?php echo $comments ?> Comments!</div>
					<?php }else{ ?>
						<div class="mr-5">0 Comments!</div>
					<?php } ?>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</div>
		</div>
		<!-- <div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fa fa-fw fa-tags"></i>
					</div>
					<div class="mr-5">13 Category!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
					<span class="float-left">View Details</span>
					<span class="float-right">
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</div>
		</div> -->
    </div>
    <?php } ?>
</div>
<!-- /.container-fluid-->
