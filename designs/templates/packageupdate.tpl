
<html>
	<head>
		<title>Update package</title>
			<link rel="stylesheet" href="web/ak/css/form.css">

			{literal}

			<style type="text/css">
	
			td{
				padding: 5px;
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
  width: 100%;
  height: auto;
}

.containerr .btn {
  position: absolute;
  top: 90%;
  left: 91.6%;
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
		<body>
			<br><br>
				<br><br>
					<br><br>
				<br><br>
			<br><br>

			<center>
				<form name="" method="POST" enctype="multipart/form-data"  class="rform" style="border: 3px;"><input type="hidden" value="h" name="hide">

		{foreach from=$view item='b'}
				<center><h1>{$b.packagename}</h1></center>
<div class="containerr">
<img src="{$b.pathpic}"><br><br>
<input type="button" class="btn" value="Change" onclick="document.getElementById('coverim').click()">
	
	</div><table>
		<tr><td>Package Type</td>
			<td> 
				<select name="packagetype">
					<option>{$b.packagetype} 	</option>
					<option>International		</option>
					<option>Domestic			</option>
				</select></td><td></td>
		<td>Package Category</td>
		<td>
			<select name="category">
				<option>{$b.category}	</option>
				<option>Summer  		</option>
				<option>Honeymoon 		</option>
				<option>Academic 		</option>
				<option>South 			</option>
				<option>North     		</option>
				<option>Adventure 		</option>
			</select></td></tr>

<tr><td>Package Name  	</td>	<td>			<input 	type="text" 	name="packagename" 	 value="{$b.packagename}" 	required>		</td><td></td>
	<td>Package Amount	</td>	<td>			<input 	type="number" 	name="packageamount" value="{$b.packageamount}" required>		</td></tr>
<tr><td>No of persons 	</td>	<td>			<input 	type="number" 	name="noc" 			 value="{$b.noc}"  			required>		</td><td></td>
	<td>Days 		  	</td>	<td>			<input 	type="number" 	name="days" 		 value="{$b.days}" 			required>		</td></tr>
<tr><td>Start 			</td>	<td>			<input 	type="text" 	name="start" 		 value="{$b.start}" 		required>		</td><td></td>
	<td>Destination 	</td>	<td>			<input 	type="text" 	name="destination"   value="{$b.destination}" 	required>		</td></tr>
<tr style="display: none;">		<td>Image 		</td>	<td><input 	type="file" 	name="pimage" 	id="coverim" 				>		</td></tr>
<tr><td>Package Details </td>	<td colspan="4	"><textarea 				name="packagedetails" style="width: 100%;">{$b.packagedetails}</textarea> </td></tr>	{/foreach}


<tr><td></td><td></td><td></td><td></td>	<td   colspan="2" style="float: right;">			<input type="submit" value="UPDATE" name="update">									</td></tr>


	</table>
				</form>
			</center>
			<!-- <!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="web/ak/css/form.css">
	
	<title>add package</title>

{literal}

<style type="text/css">
	
td{
	padding: 5px;
}

</style>

	{/literal}
</head>
<body><br><br><br><br><br><br><br><br><br><br>
	<center>

	{foreach from=$view item='b'}

<form name="" method="POST" enctype="multipart/form-data" class="rform"><input type="hidden" value="h" name="hide">
	<center><h1>NEW PACKAGE</h1></center>
	<hr  width="40%">
	<br>
	<table>
	<tr><td>Package Type</td><td><select name="packagetype">
		<option>International</option>
		<option>Domestic	</option>
		</select></td>
		<td>Package Category</td><td><select name="category">
		<option>Academic</option>
		<option>Adventure</option>
		<option>Cruise</option>
		<option>Family</option>
		<option>Honeymoon</option>
		<option>Holidays</option>
		<option>Luxury</option>
		<option>Summer</option>
		
		</select></td></tr>






<tr><td>Package Name  	</td><td><input 	type="text" value="{$b.packagename}" 	name="packagename" required></td><td>Package Amount</td><td><input 	type="number" value="{$b.packageamount}"	name="packageamount" required></td></tr>

<tr><td>No of persons 	</td><td><input 	type="number" value="{$b.noc}"  		name="noc" required></td><td>Days 			</td><td><input 	type="number" 	name="days" value="{$b.days}" required></td></tr>
<tr><td>Start 			</td><td><input 	type="text" value="{$b.start}" 	name="start" ></td><td>Destination 	</td><td><input 	type="text"  value="{$b.destination}"	name="destination" required></td></tr>

<tr><td>Image 			</td><td><input 	type="file" 	name="pimage" required></td></tr>
<tr><td>Package Details </td><td colspan="4"><textarea 					name="packagedetails"  style="width: 100%;" required></textarea></td></tr>
<tr><td>				</td><td><input 	type="submit" 	name="register" value="Update"></td></tr>


</table></form>	{/foreach}</center>
</body>
</html> -->
		</body>
</html>