<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Fairsport 2018</p>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	 $("#formSignup").validate({
	rules: {
		name: {
			required: true,
		},
		email: {
			required: true,
      		email: true
		},
		password: { 
			required: true,
			minlength: 6,
			maxlength: 10,

		} , 
		password2: { 
			equalTo: "#inputPassword",
			minlength: 6,
			maxlength: 10
		}
	},
	messages:{
		name: {
			required: "Name can't be empty!"
		},
		email: {
			required: "Please enter valid email"
		},
		password: { 
				required:"Password is required!"
		},
		password2: { 
				required:"Password not match!"
		}
	}

});

$("#formSignin").validate({
	rules: {
		email: {
			required: true,
      		email: true
		},
		password: { 
			required: true,
			minlength: 6,
			maxlength: 10,
		} , 
	},
	messages:{
		email: {
			required: "Please enter valid email"
		},
		password: { 
				required:"Password is required!"
		},
	}
});
</script>
</body>

</html>
