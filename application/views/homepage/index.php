<header>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<!-- Slide One - Set the background image for this slide in the line below -->
			<div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
				<div class="carousel-caption d-none d-md-block">
					<h3>First Slide</h3>
					<p>This is a description for the first slide.</p>
				</div>
			</div>
			<!-- Slide Two - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
				<div class="carousel-caption d-none d-md-block">
					<h3>Second Slide</h3>
					<p>This is a description for the second slide.</p>
				</div>
			</div>
			<!-- Slide Three - Set the background image for this slide in the line below -->
			<div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
				<div class="carousel-caption d-none d-md-block">
					<h3>Third Slide</h3>
					<p>This is a description for the third slide.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</header>

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
