<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ubah Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		{{-- <div class="container-login100" style="background-image: url('images/bg-01.jpg');"> --}}
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Ubah Password
				</span>
				<form method="POST" action="#" id="ubah_password_form" class="login100-form validate-form p-b-33 p-t-5">
					@csrf
					<input type="hidden" name="token" value="{{ $token }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="email" name="email" value="{{ $email }}" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="password" id="confirm-password" name="confirm-password" placeholder="Konfirmasi Password">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="container-login100-form-btn m-t-16">
						<button type="submit" id="ubah_password_btn" class="login100-form-btn">
							Reset Password
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>
	<script>
		$(function() {
			$("#ubah_password_form").submit(function(e) {
				e.preventDefault();
				$("#ubah_password_btn").val('Silahkan Tunggu...');
				$("#ubah_password_btn").prop('disabled', true);
				$.ajax({
					url: '{{ route('resetPassword-post') }}',
					method: 'POST',
					data: $(this).serialize(),
					dataType: 'json',
					success: function(res){
						if (res.status == 400) {
							showError('email', res.messages.email);
							showError('password', res.messages.password);
							$("#ubah_password_btn").val('Masuk');
							$("#ubah_password_btn").prop('disabled', false);
						}  else if (res.status === 200) {
							window.location = '{{ route('login') }}';
						}
					}
				});
			});
		});
	</script>

</body>
</html>gitadd