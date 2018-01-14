<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Add Post</li>
	</ol>
	<!-- Icon Cards-->
	<div class="row">
		<div class="col-xl-8 col-sm-12 offset-md-2">
            <?php echo form_open_multipart('dashboard/addpost');?>
				<div class="form-group">
                    <label for="inputTitle"><b>Post Title</b></label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter post title">
				</div>
				<div class="form-group">
					<label for="inputContent"><b>Write Content</b></label>
					<textarea id="textarea-newpost" name="content"></textarea>
                </div>
                <div class="form-group">
					<label for="uploadImage"><b>Upload Featured Image</b></label>
					<input type='file' class="form-control" name='featuredimage' id="uploadImage"  accept="image/gif, image/jpeg, image/png, image/jpg"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Post</button>
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid-->
