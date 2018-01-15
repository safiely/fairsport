<div class="container-fluid">
	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Dashboard</a>
		</li>
		<li class="breadcrumb-item active">Edit Post</li>
	</ol>
    <!-- Icon Cards-->
    <?php foreach ($post as $p) { ?>
	<div class="row">
		<div class="col-xl-8 col-sm-12 offset-md-2">
            <?php echo form_open_multipart('dashboard/updatepost');?>
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $p->post_id ?>">
                </div>
				<div class="form-group">
                    <label for="inputTitle"><b>Post Title</b></label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter post title" value="<?php echo $p->post_title; ?>">
				</div>
				<div class="form-group">
					<label for="inputContent"><b>Write Content</b></label>
                    <textarea id="textarea-newpost" name="content" ><?php echo $p->post_desc; ?></textarea>
                    <input name="image" type="file" id="upload" style="display:none" onchange="">
                </div>

                <div class="form-group" id="currentFeaturedImage">
                    <label for="uploadImage"><b>Featured Image</b></label>
                    <div class="edit-image-wrap">
                        <img src="<?php echo base_url("uploads/");echo $p->post_img; ?>" style="width: 200px;">
                    </div>
                    <div class="remove-image"><a href="#"><i class="fa fa-window-close" aria-hidden="true"></i> Remove</a></div>
                    <input type="hidden" id="currentImage" name="currentimg" value="<?php echo $p->post_img ?>">
                    <input type="hidden" id="currentImage2" name="currentimg2" value="<?php echo $p->post_img ?>">

                </div>
                <div class="form-group" id="updateFeaturedImage" style="display: none">
					<label for="uploadImage"><b>Upload Featured Image</b></label>
					<input type='file' class="form-control" name='newfeaturedimg' id="uploadImage" accept=".gif,.jpg,.png,.jpeg"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Post</button>
			</form>
		</div>
	</div>
    <?php } ?>
</div>
<!-- /.container-fluid-->
