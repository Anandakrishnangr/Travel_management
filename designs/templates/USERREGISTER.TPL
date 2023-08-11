<!DOCTYPE html">
	<html >

	<head>
		<title>REGISTER</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="mycssbutton.css">
			
			<link rel="stylesheet" type="text/css" href="login.css">
			<script type="text/javascript" src="fvalidation.js"></script>
			
			<script type="text/javascript" src="login.js"></script>
	
	

	</head>

	<body onload="hide()">
				



<div class="div1" id="register">
				<div class="header">
					<h1 style=" text-shadow: 4px 3px black;">REGISTERATION</h1>
				</div>
				
				
				
					<form class="rform" method="POST" action="" onSubmit = "return checkPassword(this)">
					
					
					
	<center>	
	
		<table cellspacing="2">
			<input type="hidden" name="hide" value="h">
			<tr>
				<td>
						<label for="username">Username</label>	</td>
				<td>		<input class=".reg"  type="text" name="username" size="20"  minlength="4" placeholder="Username..." required>	</td>	</tr>
			<tr><td>	<label for="email" >Email</label></td>
				<td>		<input  class=".reg" type="email" name="email" size="20"  placeholder="Email" required>	</td></tr>
			<tr>
				<td>	<label for="password">Password</label></td>
				<td>		<input  class=".reg" type="password" name="password1"  minlength="8" size="20" id="txtNewPassword"  placeholder="Password" required>					</td></tr>
			<tr>
				<td>	<label for="fname">Confirm Password</label></td>
				<td>		<input  class=".reg" type="password" name="password2"  minlength="8" size="20" id="txtConfirmPassword" onChange="checkPasswordMatch();" 				placeholder="Confirm password" required></td></tr>
			<tr><td></td>		
				<td>	<div  style="margin-left: 100px;margin-top: 10px;"> 
						<label class="container"><font style="margin-left: 10px;" size="2"><center>Show Password</center></font>
							<input class=".reg"  type="checkbox" Onclick="showpassword()" >
									<span class="checkmark"></span>
									</label>
							</div></td>
						</tr>
			<tr><td>	<label for="fname">First Name</label></td>
				<td>		<input class=".reg"  type="text" id="fname" name="firstname" placeholder="Your name.."></td></tr>
			<tr><td>	<label for="lname">Last Name</label></td>
				<td>		<input class=".reg"  type="text" id="lname" name="lastname" placeholder="Your last name.."></td></tr>

			<tr><td>	<label for="">Date Of Birth</label></td>
				<td>		<input  class=".reg" type="date" id="" name="dob" minlength="6" size="6" placeholder="postalcode"></td></tr>
				<tr><td>	<label for="">Gender</label></td>
				<td>		<input  type="radio" value="male" name="gender"><label for="">Male</label><input  type="radio" value="female" name="gender"><label for="">Female</label></td></tr>
			
					
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
							</td></tr>
			<tr><td>	<label for="">POSTALCODE</label></td>
				<td>		<input class=".reg"  type="number" id="" name="pin" minlength="6" size="6" placeholder="Postal code"></td></tr>
				<tr><td>	<label for="">PHONE NUMBER</label></td>
				<td>		<input class=".reg"  type="number" id="" name="ph" minlength="6" size="6" placeholder="Phone number"></td></tr>
			
			<tr><td>	<label for="">Address</label></td>
				<td>		<textarea class=".reg"  style="width: 260px;height: 130px;" type="text" id="" name="addr" placeholder="Address.."></textarea></td></tr>
					
					</table>

					<input type="submit" name="register_bin" value="Register" ><br>
					<p style="color: white; font-size: 20px;">Already have an account?Click <a style="color: white;text-decoration: none;" href="#new" onclick="show()">here</a></p></center>
 



					
				
			</form>
		</div>

	

<div id="toggle" class="loginr"><a name="new"><h1  style="text-align: center;font-size: 60px;color: white;margin-top: 150px;">LOGIN</h1></a>
	<center><form action="/login.php" class="form-container">
   

    <label for="username"><b style="color: white;font-size: 19px;text-align: left;">Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b style="color: white;font-size: 19px;text-align: left;" >Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>

    <br>
    <p style="color: white;font-size: 18px;">
    <a onclick="show();" style="text-decoration: none;">Create an Account!</a><br>
    Forgot Password?click here to <a href="#" style="text-decoration: none;color: white;">reset</a>
   </p>
  </form>

</center>





</div>
















	</body>
</html>
