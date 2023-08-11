<!DOCTYPE html>
<html style="min-width: 570px; ">
	<head>
		<title>Agency Registration</title>

		<link rel="stylesheet" type="text/css" href="web/ak/css/style.css">
			<link rel="stylesheet" type="text/css" href="web/ak/css/mycssbutto.css">
			
			<link rel="stylesheet" type="text/css" href="web/ak/css/login.css">
			<script type="text/javascript" src="web/ak/js/fvalidation.js"></script>
			
			<script type="text/javascript" src="web/ak/js/login.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="web/fonts/icomoon/style.css">

  <link rel="stylesheet" href="web/css/bootstrap.min.css">
  <link rel="stylesheet" href="web/css/jquery-ui.css">
  <link rel="stylesheet" href="web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="web/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="web/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="web/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="web/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="web/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="web/css/aos.css">
  <link href="web/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="web/css/style.css">
{literal}
<style type="text/css">
	
::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}

input,option,textarea,select{
	color: white;
}
option{
	background-color: black;
}

td{
	padding-right: 5px;
	padding-left: 5px;
}
label{
	font-size: 13px;
}

</style>
{/literal}

	</head>
		<body   onload="hide()" style=" background-image: url('web/ak/img/plane_takeoff_sunset.jpg')";>
			<br><br><br><br><br>


<div class="div1" id="register" style="background-image: url('web/ak/img/com.jpg')" >
				
				
				
				
					<form class="rform" method="POST" action="" onSubmit = "return checkPassword(this)"   enctype="multipart/form-data">
						<div class="div2" style="background-color: rgba(0, 0, 0, 0.5);">
							<div class="header">
					<h1 style=" text-shadow: 4px 3px black;">AGENCY REGISTRATION</h1>
				</div>
			
				<form action="" method="post"  enctype="multipart/form-data">
					<table align="center" cellpadding="5">
						<input type="hidden" name="hide" value="h">

		<tr><td>	<label for="username">Agency Name  </label>	</td><td><input type="text" name="name" placeholder="Agency Name" required></td>
				<td><label for="dp">Display Picture</label></td><td><input type="file" name="adp" required></td></tr>
		<tr><td>	<label for="about">About</label></td><td colspan="3"><textarea class=".reg"  style="width: 100%;height: 100px;" type="text" id="" name="about" placeholder="About you.." required></textarea></td></tr>
		<tr><td>	<label for="district">Registeration Number  </label>	</td><td colspan="1">	<input type="number" name="regno" placeholder="Registeration Number" required>				</td><td><label>Valid proof</label></td><td><input type="file" name="proof" required></td></tr>
		<tr><td>	<label for="email" >Email</label>			</td><td>	<input type="email" name="email" placeholder="Email" required>				</td>
			<td>	<label for="ph">Contact Number </label>			</td><td>	<input type="number" name="ph" placeholder="Contact Number" maxlength="12" required>					</td></tr>
		<tr>	<td>	<label for="password">Password</label>  				</td><td>	<input type="password" placeholder="Password" name="password1"  id="txtNewPassword" required></td>
		<td>	<label for="password">Confirm Password</label> </td>
		<td><input type="password" placeholder="Confirm Password" name="password2" id="txtConfirmPassword" required></td></tr>
		<tr><td></td><td></td><td></td><td>
			<div  style="margin-left: 100px;margin-top: 10px;">
				<label class="container"><font style="float: right;" size="2">Show Password</font><input style="float: right;margin-right: 10px;" class=".reg"  type="checkbox" Onclick="showpassword()" >
									<span class="checkmark"></span>
									</label>
							</div></td></tr>
		<tr><td>	<label for="district">District</label>		</td><td>
					<select 	id="dist" name="dist" placeholder="District"  required>									
						<option value="thiruvananthapuram"> THIRUVANANTHAPURAM 	</option>
							<option value="kollam"> KOLLAM 	</option>
								<option value="alappuzha"> ALAPPUZHA 	</option>
									<option value="pathanamthitta"> PATHANAMTHITTA 	</option>
										<option  value="kottayam"> KOTTAYAM 	</option>
											<option value="idukki"> IDUKKI 	</option>
												<option  value="eranakulam"> ERNAKULAM  	</option>
												<option  value="thrissur"> THRISSUR 	</option>
											<option value="palakkad"> PALAKKAD 	</option>
										<option value="malapuram"> MALAPURAM 	</option>
									<option value="kozhikode"> KOZHIKODE 	</option>
								<option value="wayanadu"> WAYANADU 	</option>
							<option value="kannur"> KANNUR 	</option>
						<option value="kasaragod"> 	KASARAGOD 	</option>
					</select>
														</td>
				<td>	<label for="district">Postal Code  </label>	</td><td>	<input type="number" name="pin" placeholder="Postal Code" required>				</td></tr>

		
		<tr><td>	<label for="">Address</label></td>
				<td colspan="3"><textarea class=".reg"  style="width: 100%;height: 130px;" type="text" id="" name="addr" placeholder="Address.." required></textarea></td></tr>
				
		
		
		
		
		<tr><td colspan="4" style="text-align: center;">	<input type="submit" name="register_bin" value="Register" class="buttonload">	</td></tr>


				</table>
<center>
				<p style="color: white; font-size: 20px;">Already have an account?Click <a style="color: white;text-decoration: none;" href="#new" onclick="show()">here</a></p></center>


					<br><br>
			</form>
		</center>


	</div>
</div>


<div id="toggle" class="loginr"><a name="new"><h1  style="text-align: center;font-size: 60px;color: white;margin-top: 150px;">LOGIN</h1></a>
	<center>
		<form action="" method="post" class="form-container">
   
		<input type="hidden" name="hide" value="h">
    <label for="username"><b style="color: white;font-size: 19px;text-align: left;">Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b style="color: white;font-size: 19px;text-align: left;" >Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="btn" >Login</button>

    <br>
    <p style="color: white;font-size: 18px;">
    <a onclick="show();" style="text-decoration: none;">Create an Account!</a><br>
   <!--  Forgot Password?click here to <a href="#" style="text-decoration: none;color: white;">reset</a> -->
   </p>
  </form>

</center>





</div>
















	</body>
</html>