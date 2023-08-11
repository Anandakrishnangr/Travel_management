<!DOCTYPE html>
<html style="min-width: 570px; ">
	<head>
		<title>Agency Registration</title>

		<link rel="stylesheet" type="text/css" href="web/ak/css/style.css">
			<!-- <link rel="stylesheet" type="text/css" href="web/ak/css/mycssbutton.css"> -->
			
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

.t{
			width: 70px;
		}
	
.containerr {
  position: relative;
  width: 100%;
  max-width: 650px;
}

.containerr img {
  width: 300px;
  height: 301px;
}

.containerr .btn {
  position: absolute;
  top: 84.7%;
  left: 64.8%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 0px;
  text-align: center;
  float: right;
}

.containerr .btn:hover {
  background-color: black;
}                  
</style>
{/literal}

	</head>
		<body   onload="hide()" style=" background-image: url('web/ak/img/plane_takeoff_sunset.jpg')";>
			<br><br><br><br><br>


<div class="div1" id="register" style="background-image: url('web/ak/img/com.jpg')" >
				
				
				
				
					<form class="rform" method="POST" action="" onSubmit = "return checkPassword(this)" enctype="multipart/form-data">
						<div class="div2" style="background-color: rgba(0, 0, 0, 0.5);padding: 10px;width: 70%">
							<div class="header">
					<h1 style=" text-shadow: 4px 3px black;">UPDATE DETAILS</h1>
				</div>
			
				<form action="" method="post">
					<table align="center" style="padding: 10px;">
						<input type="hidden" name="hide" value="h">
{foreach from=$view item='b'}

			<tr><td  colspan="4" style="text-align: center;"><div class="containerr"><img src="{$b.pathpic}"><br><label  style="text-align: center;" for="dp">Display Picture</label>
				<input type="button" class="btn" value="Change" onclick="document.getElementById('coverim').click()"></div><br>

				<div style="display: none;"><input type="file"   id="coverim" name="adp"></div></td></tr>
		<tr><td>	<label for="username">Agency Name  </label>	</td><td><input type="text" name="aname" value="{$b.aname}" required></td>
			<td>	<label for="ph">Contact Number </label>			</td><td>	<input type="number" name="ph" value="{$b.ph}" required>					</td></tr>
		<tr><td>	<label for="district">District</label>		</td><td>
					<select 	id="dist" name="dist" placeholder="District"  required>	
					<option  >  {$b.dist} 	</option>								
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
				<td>	<label for="district">Postal Code  </label>	</td><td>	<input type="number" name="pin" value="{$b.pin}" required>				</td></tr>
		
		<tr><td>	<label for="">Address</label></td>
				<td colspan="3">		<textarea class=".reg"  style="width: 100%;height: 130px;" type="text" id="" name="address" >{$b.address}</textarea></td></tr>
				
		<tr style="display: none;"><td>	<label for="district">Registeration Number  </label>	</td><td>	<input type="text" name="regno" value="{$b.regno}" required>				</td></tr>
		{/foreach}
		<tr><td>							</td><td>	<input type="submit" name="register_bin" value="Update" class="buttonload">	</td></tr>


				</table>



					<br><br>
			</form>
		</center>


	</div>
</div>







<br><br><br><br><br>










	</body>
</html>



















































<!-- <!DOCTYPE html>
<html>
	<head>
		<title>Agency Registration</title>
	</head>
		<body>
			<h1><center><u>Agency Registration</u></H1></center>
			
				<form action="" method="post">
					<table align="center">
						<input type="hidden" name="hide" value="h">
		{foreach from=$view item='b'}
		<tr><td>	Agency Name  	</td><td>	<input type="text" name="aname" value="{$b.aname}">	</td></tr>
		<tr><td>	Address 		</td><td>	<textarea	   	   name="address" >{$b.address}</textarea>	</td></tr>
		<tr><td>	Pincode 		</td><td>	<input type="text" name="pin" value="{$b.pin}">		</td></tr>
		<tr><td>	District 		</td><td>
					<select 	id="dist" name="dist"> 
						<option  >  {$b.dist} 	</option>									
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

		<tr><td>	Contact Number 			</td><td>	<input type="text" name="ph" value="{$b.ph}">
							</td></tr>
		<tr><td>	Registeration Number  	</td><td>	<input type="text" name="regno" value="{$b.regno}">				</td></tr>
		
		<tr><td>							</td><td>	<input type="submit" value="UPDATE" name="">	</td></tr>

	{/foreach}
				</table>
			</form>
		</center>
	</body>
</html>


-->