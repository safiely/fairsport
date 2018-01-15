<!-- Page Content -->
<div class="container">
	<?php
			foreach ($sql as $obj){
		?>
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">
			<?php echo $obj->post_title; ?>
		</h1>

		<div class="row">

			<!-- Post Content Column -->
			<div class="col-lg-8 offset-md-2">

				<!-- Preview Image -->
				<img class="img-fluid rounded" src="<?php echo base_url();?>./uploads/<?php echo $obj->post_img;?> " alt="">

				<hr>

				<!-- Date/Time -->
				<p>Posted on <?php echo $obj->post_created;?></p>

				<hr>

				<!-- Post Content -->
                <div class="post-detail">
                <?php echo $obj->post_desc;?>
                </div>

			</div>
		</div>
		<!-- /.row -->
		<?php } ;?>
</div>
<!-- /.container -->
