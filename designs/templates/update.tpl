


	<!DOCTYPE html">
	<html >

		<head>
		<title>Update_bio</title>
			<link rel="stylesheet" type="text/css" href="web/ak/css/style.css">
			<!-- <link rel="stylesheet" type="text/css" href="web/ak/css/mycssbutton.css"> -->
			<link rel="stylesheet" type="text/css" href="web/ak/css/login.css">

			<script type="text/javascript" src="web/ak/js/fvalidation.js"></script>
			<script type="text/javascript" src="web/ak/js/login.js"></script>
	
	
{literal}<style type="text/css">

input{
	color: white;
	background-color: black;
	opacity: 1;
}
textarea,option,select{
	color: white;
	background-color: black;
	opacity: 1;
}

		.label{
			font-size: 150%;
			font-style: bold;
			font-family: sans-serif;

		}
td
{
	padding-left: 10px;	
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
  top: 87.4%;
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

		
		<body onload="hide()">
				
			<br><br><br><br><br><br><br>


		<div class="div1" id="register">
				
								
					<form class="rform" method="POST" action="" onSubmit = "return checkPassword(this)" enctype="multipart/form-data">
						<div style="background-color: rgba(0, 0, 0, 0.5);margin-right: 19%;margin-left: 19%;">
							<div class="header">
							<h1 style=" text-shadow: 4px 3px black;">UPDATE INFO</h1>
							</div>
					
					
			<center>{foreach from=$view item='b'}	
	<div class="containerr">
<img src="{$b.pathpic}" width="100" height="60"><br><br>
<input type="button" class="btn" value="Change" onclick="document.getElementById('coverim').click()">
	
	</div>
				<table cellspacing="2">
					
					<input type="hidden" name="hide" value="h">


	<tr style="display: none;">
		
		<td colspan="4"><center>
			<img src="{$b.pathpic}"><br>
			<label for="dp">Display Picture</label><br>
			<input type="file" name="userdp" id="coverim"></td></center>
	</tr>

	

	<tr>
		<td>
			<label for="fname">First Name</label></td>
		<td>
			<input class=".reg"  type="text" id="fname" name="fname" value="{$b.fname}"  required></td>
	
		<td>
			<label for="lname">Last Name</label></td>
		<td>
			<input class=".reg"  type="text" id="lname" name="lname" value="{$b.lname}" required></td>
	</tr>

	<tr>
		<td>
			<label for="">Date Of Birth</label></td>
			<td>
				<input  class=".reg" type="date" id="" name="dob" minlength="6" size="6" value="{$b.dob}" required></td>
	
		<td>
			<label for="">Gender</label></td>
		<td>
			<select name="gender">
				{if $b.gender=='male'}
				<option value="male">Male</option>
				<option value="female">Female</option>
				{else}
				<option>Female</option>
				<option>Male</option>
				{/if}
			</select></td>
	</tr>
	<tr>
		<td>
			<label for="district">District</label></td>
				<td><select id="dist" name="dist" required>
					<option  style="text-transform: capitalize;">{$b.dist}</option>		
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
	
		<td>
			<label for="">Postal Code</label></td>
		<td>
			<input class=".reg"  type="number" id="" name="pin" minlength="6" size="6" value="{$b.pin}"  required></td>
	</tr>

	<tr>
		<td>
			<label for="">Phone Number</label></td>
		<td>
			<input class=".reg"  type="number" id="" name="ph" minlength="6" size="6" value="{$b.ph}"  required></td>
	
		<td>
			<label for="username">User Name</label></td>
		<td>
			<input class=".reg"  type="text" name="username" size="20"  minlength="4" value="{$b.username}" required></td>
	</tr>
	<tr>
		<td>
			<label for="username">About</label></td>
		<td colspan="3">
			<textarea class=".reg" style="width: 100%" type="text" name="uabout" size="20"  minlength="4" value="{$b.uabout}" required>{$b.uabout}</textarea></td>
	</tr>
	<tr>
		<td>
			<label for="">Address</label></td>
		<td colspan="3">
			<textarea class=".reg"  style="width: 100%;height: 130px;" type="text" id="" name="addr" >{$b.address}</textarea></td>
	</tr>
					
				</table>
{/foreach}
				<input type="submit" 	value="UPDATE"><br>
			</center>
 



			<br><br>
				
				</form>
					</div>
		</div>
	
<br><br>
<br><br>
<br><br>





	</body>
</html>
