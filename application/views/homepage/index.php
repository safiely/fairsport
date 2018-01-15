
<!-- Page Content -->
<div class="container">
	<!-- Portfolio Section -->
	<br>
	<br>
	<h2>Lates Sport News</h2>
	<div class="row">
		<?php
			foreach ($sql as $obj){
		?>
			<div class="col-lg-4 col-sm-6 portfolio-item">
				<a href="<?php echo base_url();?>post/<?php echo $obj->post_id; ?>" target="_blank">
					<div class="card h-100">
							<img class="card-img-top" src="<?php echo base_url();?>./uploads/<?php echo $obj->post_img; ?>" alt="">
						<div class="card-body">
							<h4 class="card-title">
								<?php echo $obj->post_title; ?>
							</h4>
						</div>
					</div>
				</a>
			</div>
			<?php } ;?>
	</div>
	<!-- /.row -->


</div>
<!-- /.container -->
