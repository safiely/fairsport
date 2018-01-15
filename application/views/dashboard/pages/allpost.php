<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">All Post</li>
	</ol>
	<!-- Icon Cards-->
	<div class="row">
		<div class="col-xl-12 col-sm-12">
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i> All Post Data</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th width="auto">Id</th>
									<th width="40%">Title</th>
                                    <th>Approved</th>
                                    <th>Created By</th>
									<th>Created At</th>
									<th width="130">Action</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Id</th>
									<th>Title</th>
									<th>Approved</th>
                                    <th>Created By</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</tfoot>
							<tbody>
                            <?php
                                foreach ($sql->result() as $obj){
                            ?>
								<tr>
									<td><?php echo $obj->post_id; ?></td>
									<td><?php echo $obj->post_title; ?></td>
									<td >
                                        <?php if($obj->post_approved){ ?>
                                        <span class="badge badge-pill badge-success btn-block">True</span></td>
                                        <?php } else { ?>
                                        <span class="badge badge-pill badge-secondary btn-block">False</span></td>
                                        <?php } ?>
									<td><?php echo $obj->post_createdby; ?></td>
									<td><?php echo $obj->post_created; ?></td>
									<td>
                                        <a href="<?php echo base_url();?>dashboard/post/edit/<?php echo $obj->post_id; ?>">
                                            <div class="btn btn-sm btn-warning">Edit</div>
                                        </a>
                                        <a href="<?php echo base_url();?>dashboard/post/delete/<?php echo $obj->post_id; ?> ">
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
