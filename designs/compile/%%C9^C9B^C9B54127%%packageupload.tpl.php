<?php /* Smarty version 2.6.26, created on 2020-04-08 07:56:44
         compiled from packageupload.tpl */ ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="web/ak/css/form.css">
	
	<title>add package</title>

<?php echo '

<style type="text/css">
	
td{
	padding: 5px;
}

</style>

	'; ?>

</head>
<body><br><br><br><br><br><br><br><br><br><br>
	<center>
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






<tr><td>Package Name  	</td><td><input 	type="text" 	name="packagename" required></td><td>Package Amount</td><td><input 	type="number" 	name="packageamount" required></td></tr>

<tr><td>No of persons 	</td><td><input 	type="number" 	name="noc" required></td><td>Days 			</td><td><input 	type="number" 	name="days" required></td></tr>
<tr><td>Start 			</td><td><input 	type="text" 	name="start" ></td><td>Destination 	</td><td><input 	type="text" 	name="destination" required></td></tr>

<tr><td>Image 			</td><td><input 	type="file" 	name="pimage" required></td></tr>
<tr><td>Package Details </td><td colspan="4"><textarea 					name="packagedetails"  style="width: 100%;" required></textarea></td></tr>
<tr><td>				</td><td><input 	type="submit" 	name="register" value="Upload"></td></tr>


</table></form></center>
</body>
</html>