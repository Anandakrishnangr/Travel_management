<?php /* Smarty version 2.6.26, created on 2020-10-31 15:28:04
         compiled from userreg.tpl */ ?>
<!DOCTYPE html">
	<html style="min-width: 570px; ">

	<head>
		<title>REGISTER</title>
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
<?php echo '
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
}
label{
	font-size: 13px;
}

</style>
'; ?>

	</head>

	<body onload="hide()">
				
<br><br><br><br><br>


<div class="div1" id="register" >
				
				
				
				
					<form class="rform" method="POST" action="" enctype="multipart/form-data" onSubmit = "return checkPassword(this)">
						<div class="div2" style="background-color: rgba(0, 0, 0, 0.5);">
							<div class="header">
					<h1 style=" text-shadow: 4px 3px black;">REGISTERATION</h1>
				</div>
					
					
	<center>	
	
		<table cellspacing="2">
			<input type="hidden" name="hide" value="h">
			<tr>
				<td>
						<label for="username">Username</label>	</td>
				<td>		<input class=".reg"  type="text" name="username" size="20"  minlength="4" placeholder="Username..." required>	</td>	
				<td>	<label for="email" >Email</label></td>
				<td>		<input  class=".reg" type="email" name="email" size="20"  placeholder="Email" required>	</td></tr>
			<tr>
				<td>	<label for="password">Password</label></td>
				<td>		<input  class=".reg" type="password" name="password1"  minlength="8" size="20" id="txtNewPassword"  placeholder="Password" required>					</td>
				<td>	<label for="fname">Confirm Password</label></td>
				<td>		<input  class=".reg" type="password" name="password2"  minlength="8" size="20" id="txtConfirmPassword" onChange="checkPasswordMatch();" 				placeholder="Confirm password" required></td></tr>
			<tr>		
				<td colspan="4">	<div  style="float: right;"> 
					<input class=".reg"  type="checkbox" Onclick="showpassword()" ><span class="checkmark"></span>
						<font size="2" style="float: right;" color="white"><center>&nbsp;&nbsp;&nbsp;Show Password</center></font>
							
									
									
							</div></td>
						</tr>
			<tr><td>	<label for="fname">First Name</label></td>
				<td>		<input class=".reg"  type="text" id="fname" name="fname" placeholder="Your name.."></td>
				<td>	<label for="lname">Last Name</label></td>
				<td>		<input class=".reg"  type="text" id="lname" name="lname" placeholder="Your last name.."></td></tr>

			<tr><td>	<label for="">Date Of Birth</label></td>
				<td>		<input  class=".reg" type="date" id="" name="dob" minlength="6" size="6" ></td><td>	<label for="">Gender</label></td>
				<td>		<input style="margin-left: 10px;"   type="radio" value="male" name="gender"><label  style="margin-left: 10px;"  for="">Male</label><input style="margin-left: 10px;"   type="radio" value="female" name="gender"><label style="margin-left: 10px;" for="">Female</label></td></tr>
				<tr><td><label for="dp">Display Picture</label></td><td><input type="file" name="userdp"></td>
					<td>	<label for="">Phone Number</label></td>
				<td>		<input class=".reg"  type="number" id="" name="ph" minlength="6" size="6" placeholder="Phone number"></td></tr>
					<tr><td ><label for="about">About</label></td><td colspan="3"><textarea class=".reg"  style="width: 100%;height: 100px;" type="text" id="" name="about" placeholder="About you.."></textarea></td></tr>
		
					
			<tr><td>
						<label for="district">District</label></td>
				<td>		<select id="dist" name="dist">
									
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
							</td><td>	<label for="">Postal Code</label></td>
				<td>		<input class=".reg"  type="number" id="" name="pin" minlength="6" size="6" placeholder="Postal code"></td></tr>
				
			
			<tr><td>	<label for="">Address</label></td>
				<td colspan="3">		<textarea class=".reg"  style="width: 100%;height: 130px;" type="text" id="" name="addr" placeholder="Address.."></textarea></td></tr>
					
					</table>

					<input type="submit" name="register_bin" value="Register" class="buttonload">
 <br>
					<p style="color: white; font-size: 20px;">Already have an account?Click <a style="color: white;text-decoration: none;" href="#new" onclick="show()">here</a></p></center>
 



					<br><br>
				
			</form>
		</div>
</div>
	

<div id="toggle" class="loginr"><a name="new"><h1  style="text-align: center;font-size: 60px;color: white;margin-top: 150px;">LOGIN</h1></a>
	<center><form action=""  method="post" class="form-container">
   
		<input type="hidden" name="hide" value="h">
    <label for="username"><b style="color: white;font-size: 19px;text-align: left;">Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b style="color: white;font-size: 19px;text-align: left;" >Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="btn" >Login</button>

    <br>
    <p style="color: white;font-size: 18px;">
    <a onclick="show();" style="text-decoration: none;">Create an Account!</a><br>
   
   </p>
  </form>

</center>





</div>
















	</body>
</html>