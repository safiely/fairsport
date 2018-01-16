<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Users</li>
	</ol>
	<!-- Icon Cards-->
	<div class="row">
		<div class="col-xl-12 col-sm-12">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> Users Data</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Type</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Type</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
							<?php
                                foreach ($sql->result() as $obj){
                            ?>
								<tr>
									<td><?php echo $obj->user_id; ?></td>
									<td><?php echo $obj->user_name; ?></td>
									<td><?php echo $obj->user_email; ?></td>
									<td><?php echo $obj->user_type; ?></td>
									<td><?php echo $obj->user_created; ?></td>
									<td>
										<a href="<?php echo base_url();?>dashboard/user/edit<?php echo $obj->user_id; ?>">
											<div class="btn btn-sm btn-warning">Edit</div>
										</a>
										<a href="<?php echo base_url();?>dashboard/user/delete/<?php echo $obj->user_id; ?>">
											<div class="btn btn-sm btn-danger">Delete</div>
										</a>
									</td>
								</tr>
								<?php } ;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid-->
