<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Edit Usert</li>
	</ol>
	<!-- Icon Cards-->
	<?php foreach ($user as $u) { ?>
	<div class="row">
		<div class="col-xl-8 col-sm-12 offset-md-2">
			<?php echo form_open_multipart('dashboard/updateuser');?>
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $u->user_id ?>">
			</div>
			<div class="form-group">
				<label for="inputTitle">
					<b>Full Name</b>
				</label>
				<input type="text" name="name" class="form-control" id="inputName" placeholder="Enter your full name" value="<?php echo $u->user_name; ?>">
			</div>
			<div class="form-group">
				<label for="inputEmail">
					<b>Email</b>
				</label>
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Enter your email" value="<?php echo $u->user_email; ?>">
			</div>
			<div class="form-group">
				<select class="form-control" name="type">
                    <option value="admin"<?php echo $u->user_type == 'admin' ? ' selected="selected"' : '';?>>Admin</option>
                    <option value="member"<?php echo $u->user_type == 'member' ? ' selected="selected"' : '';?>>Member</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Save</button>
			</form>
		</div>
	</div>
	<?php } ?>
</div>
<!-- /.container-fluid-->
