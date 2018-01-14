<!-- /.content-wrapper-->
<footer class="sticky-footer">
	<div class="container">
		<div class="text-center">
			<small>Copyright © Fair Sport 2018</small>
		</div>
	</div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="<?php echo base_url();?>logout">Logout</a>
			</div>
		</div>
	</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor//bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/tinymce/js/tinymce/plugins/code/plugin.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/tinymce/js/tinymce/plugins/image/plugin.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url();?>assets/js/fairsport-admin.min.js"></script>

<script>
tinymce.init({
    selector:'#textarea-newpost',
    toolbar: [
        'bold | italic | underline | strikethrough | alignleft | aligncenter | alignright | alignjustify | outdent | indent | blockquote | undo | redo | removeformat | subscript | superscript ', 
        'formatselect | fontselect | fontsizeselect | link image | cut | copy | paste | bullist | numlist | code',
    ],
    menubar: false,
    height: 300,
    plugins: 'code link image'
});
</script>
<!-- Custom scripts for this page-->
<!-- <script src="js/sb-admin-datatables.min.js"></script>
<script src="js/sb-admin-charts.min.js"></script> -->
</div>
</body>

</html>
