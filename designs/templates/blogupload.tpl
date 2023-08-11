
<html>
<head>
	<link rel="stylesheet" href="web/ak/css/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   {literal}<script>tinymce.init({ selector:'textarea' });</script>

	<style type="text/css">

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

	</style>
{/literal}
	<title></title>

</head>
<body style="background-image: url(web/images/blogbg.jpg);font-size: 16px;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
	<br><br><br><br><br><br><br>

<center>
<form  enctype="multipart/form-data" action="" method="POST" class="rform" style="background-color: black;opacity: 0.8;width: 600px;">
	<h1 style="font-size: 36px;">Write Blog</h1><hr width="90%" color="white"  size="4">
	<table>
		<input type="hidden" name="hide" value="h">
		<tr><td><label>Title 	</label></td><td><input type="text" name="head"  placeholder="Title" style="width: 400px;" required></td></tr>

		<tr><td><label>Catagory	</label></td><td><select  name="cat"  placeholder="Catagory" style="width: 400px;" required>
												
												<option>Creative</option>
												<option>Food</option>
												<option>Tech</option>
												<option>Travel</option>	
												<option>News</option>											
												
												</select></td></tr>

		<tr><td><label>Place 	</label></td><td><input type="text" name="place" placeholder="Place" style="width: 400px;" required></td></tr>
		<tr><td><label >Pictures &nbsp;&nbsp;&nbsp; <i class="fa fa-camera-retro fa-5x" style="float: right;"></i></label></td><td><input type="file" name="bimage" style="color: white;background-color: black;" required></td></tr>
		<tr><td><label>Blog 	</label></td><td><textarea name="content" placeholder="Write your blog" style="width: 400px;height: 500px;opacity: 1;" ></textarea></td></tr>
		<tr><td></td><td><input type="submit" name="" value="Post"><br></td></tr>
	</table>

</form>
<br><br><br><br><br><br><br><br><br>
</center><br>
</body>
</html>