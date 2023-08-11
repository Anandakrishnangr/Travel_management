<?php /* Smarty version 2.6.26, created on 2020-04-05 09:42:03
         compiled from viewpackage.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>Packages</title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutton.css">
		<link rel="stylesheet" href="web/ak/css/form.css">

<?php echo '
		<style type="text/css">table td {


text-align: center;
color:#336699;

padding:8px;
text-overflow:ellipsis;
overflow:hidden;
white-space:nowrap;
}</style>
'; ?>

</head>
<body>

<br><br><br><br><br><br><br><br><br><br>
	<center><h1>PACKAGES</h1><hr size="2" width="30%"><br>
	<form action="" method="POST" enctype="multipart/form-data">
		<table border="2" style="table-layout: fixed;
  width: 100%;text-align: center; ">
			<tr><th  style="border-bottom: hidden;border-left: hidden;border-top: hidden;"></th><th>Package Name</th><th>Package Type</th><th style="width: 150px;">Package Details</th><th>Start</th><th>Destination</th><th>Days</th><th>Added On</th><th>Package Amount</th></tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr><td style="border-bottom: hidden;border-left: hidden;"><img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" alt="packagecover" height="100px" width="160px"></td>
	<td><?php echo $this->_tpl_vars['b']['packagename']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['packagetype']; ?>
</td>
	<td  style="max-height: 100px;"><?php echo $this->_tpl_vars['b']['packagedetails']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['start']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['destination']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['days']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['packageamount']; ?>
</td>
	
	<td style="border-bottom: hidden;border-right: hidden;border-top: hidden;"><a  class="button1"  style="text-decoration: none;" href="packageupdate.php?v=<?php echo $this->_tpl_vars['b']['pkey']; ?>
">UPDATE</a></td>
	<td style="border-bottom: hidden;border-right: hidden;border-top: hidden;"><a  class="button2"  style="text-decoration: none;" href="packagedelete.php?v=<?php echo $this->_tpl_vars['b']['pkey']; ?>
">DELETE</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</center><br><br><br><br><br><br><br><br><br><br>
</body>
</html>