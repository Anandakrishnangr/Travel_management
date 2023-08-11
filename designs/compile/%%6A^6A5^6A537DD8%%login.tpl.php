<?php /* Smarty version 2.6.26, created on 2020-10-14 15:19:45
         compiled from login.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="web/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="web/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="web/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="web/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="web/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('web/login/images/wp.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="background-image: url('web/login/images/bg-011.jpg');">
				<form class="login100-form validate-form flex-sb flex-w" action=""  method="POST">
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input type="hidden" name="hide" value="h">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<!-- <a style="color: white;" href="" class="txt2 bo1 m-l-5">
							Forgot?
						</a> -->
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="login" value="login" class="login100-form-btn">
						
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span style="color: white;" class="txt2" >
							Not a member?&nbsp;
						</span>

						<a style="color: white;" href="userreg.php" class="txt2 bo1">
							Sign up now
						</a>&nbsp;&nbsp;&nbsp;<a style="color: white;" href="areg.php" class="txt2 bo1">
							Register Agency
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="web/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="web/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="web/login/vendor/bootstrap/js/popper.js"></script>
	<script src="web/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="web/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="web/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="web/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="web/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="web/login/js/main.js"></script>

</body>
</html>