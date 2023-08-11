<?php /* Smarty version 2.6.26, created on 2020-10-31 14:44:39
         compiled from blogupdate.tpl */ ?>

<html>
<head>
<link rel="stylesheet" href="web/ak/css/form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<?php echo '
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   {literal}<script>tinymce.init({ selector:\'textarea\' });</script>
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
'; ?>

	<title></title>

</head> 
<body style="background-image: url(web/images/blogbg.jpg);font-size: 16px;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
	<br><br><br><br><br><br><br>

<center>
<form action="" enctype="multipart/form-data" method="POST" class="rform" style="background-color: black;opacity: 0.9;width: 600px;"><?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<h1 style="font-size: 36px;">Edit Blog</h1><br><img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" height="300px" width="550px" style="opacity: 0.9;">
	<table>
			<input type="hidden" name="hide" value="h">
			<tr><td><label>Pictures </label>	</td><td><input type="file" name="bimage" src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" value="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
"  style="width: 400px;" ></td></tr>
			<tr><td><label>Title 	</label>	</td><td><input type="text" name="head" value="<?php echo $this->_tpl_vars['b']['head']; ?>
"  style="width: 400px;" required></td></tr>
			<tr><td><label>Category	</label>	</td><td><select  name="cat"  placeholder="Category" style="width: 400px;" required>
												<option><?php echo $this->_tpl_vars['b']['Category']; ?>
</option>
												<option>Creative</option>
												<option>Food</option>
												<option>Tech</option>
												<option>Travel</option>	
												<option>News</option>											
												
												</select></td></tr>
		<tr><td><label>Place 	</label></td><td><input type="text"  value="<?php echo $this->_tpl_vars['b']['place']; ?>
" name="place"   style="width: 400px;" required></td></tr>

		<tr><td><label>Blog 	</label></td><td><textarea name="content"style="width: 400px;height: 500px;opacity: 1;" required ><?php echo $this->_tpl_vars['b']['content']; ?>
</textarea></td></tr>
		<tr><td></td><td></td></tr>
	</table>
<?php endforeach; endif; unset($_from); ?><input type="submit"  value="UPDATE" value="post">
</form>
</center>
</body>
</html>