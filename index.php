<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Aplikasi Laundry PNB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon1.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/image/laundry-cartoon-background-vector.jpg);">
				<span class="login100-form-title-1" style=" color:#fffff; margin: -10px 0px -1022px 0px !important;">
						Kelompok  1
					</span>
				</div>

				<form style="height: 450px;" class="login100-form validate-form" method="POST" action="ceklogin.php">
					<span class="login100-form-title-1" style=" color:#1e3f66;  margin-bottom:30px !important;">
						Aplikasi Laundry PNB
					</span>
					<div class="  m-b-26" data-validate="Username is required">
						<span class="" style="margin-left: -85px">Username</span>
						<input class="input100" type="text" style=" background-color: #e8f0fe !important; border-radius:15px; margin:5px -15px 0px -95px; width:500px; padding: 0px 20px 0px 20px !important; " name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class=" " data-validate = "Password is required">
						<span class="" style="margin:0px -15px 0px -85px;">Password</span>
						<input class="input100" style=" background-color: #e8f0fe !important; border-radius:15px; margin:5px -15px 20px -95px; width:500px; padding: 0px 20px 0px 20px !important; " type="password" name="password" placeholder="Enter password">
					</div>
					<?php if (isset($_GET['msg'])): ?>
						<small class="text-danger" style="margin-left: -90px;"><?= $_GET['msg'];  ?></small>
					<?php endif ?>
					<style>
						.login100-form-btn:hover {
							background-color: #73a5c6 !important;
						}
						.register:hover {
							color: #73a5c6 !important;

						}
					</style>
					<div class="container">
						<button class="login100-form-btn" style="border-radius: 15px; margin-left: -110px; width: 500px !important; margin-top: 10px; height:40px; background-color: #1e3f66;" type="submit"> 
							Login
						</button>
						<br>
					</div>
					<div class="container-login100-form-btn"  style="margin-bottom: -50px !important;">
						<p style=" margin: -10px 0px 0px -85px !important; " >
							Belum punya akun? <a class="register" href="../laundry/register/pengguna_tambah.php" style="font-weight: bold; color: #1e3f66; "> Register</a> 
							</p> 
					</div>	
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/animsition/js/animsition.min.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/bootstrap/js/popper.js"></script>  -->
	<!-- <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/select2/select2.min.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/daterangepicker/moment.min.js"></script>  -->
	<!-- <script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="assets/login/vendor/countdowntime/countdowntime.js"></script>  -->
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>