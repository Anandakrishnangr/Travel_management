<?php /* Smarty version 2.6.26, created on 2020-10-18 13:04:22
         compiled from rev.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php echo '
	<style type="text/css">
		
tr{
	border: 1px solid black;
}
th,td{
	padding: 10px;font-size: 14px;text-transform: capitalize;
}

	</style>
	'; ?>

</head>
<body>
<br><br>
<br>
<br>
<br>
<br>
<center>
<div style="background-color: skyblue;color: gold;font-size: 20px;text-align: center;width: 70%;padding: 15px;font-weight: 300;"><B>REVENUE</B></div><br>
<div style="float: left;margin-left: 15%;font-size: 15px;background-color: red;padding: 4px;color: white;font-weight: bold;"><b><a href="stat.php?k=<?php echo $this->_tpl_vars['jy1']; ?>
&&p=<?php echo $this->_tpl_vars['jy']; ?>
">View Statistics</a></b></div><br><br>
<div style="float: left;margin-left: 15%;font-size: 20px;background-color: skyblue;padding: 7px;color: white;"><b>This Month</b></div>

<div style="width: 70%;">

<table style="width: 100%;">
	<tr>
	<th>Agency Name</th>
	<th>Customer Name</th>
	<th>Purchase Date</th>
	<th>Amount</th>
	</tr>

<?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
	<tr>
		<td><?php echo $this->_tpl_vars['t']['aname']; ?>
</td>
<td><?php echo $this->_tpl_vars['t']['username']; ?>
</td><td><?php echo $this->_tpl_vars['t']['date']; ?>
</td><td style="color: green;"><b>+<?php echo $this->_tpl_vars['t']['amount']; ?>
</b></td>


	</tr>
<?php endforeach; endif; unset($_from); ?>	
</table>

<br>
<div style="float: left;font-size: 20px;background-color: skyblue;padding: 7px;color: white;"><b>Last Month</b></div>

	

<table style="width: 100%;">
	<tr>
	<th>Agency Name</th>
	<th>Customer Name</th>
	<th>Purchase Date</th>
	<th>Amount</th>
	</tr>

<?php $_from = $this->_tpl_vars['viewx2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t2']):
?>
	<tr>
		<td><?php echo $this->_tpl_vars['t2']['aname']; ?>
</td>
<td><?php echo $this->_tpl_vars['t2']['username']; ?>
</td><td><?php echo $this->_tpl_vars['t2']['date']; ?>
</td><td style="color: green;"><b>+<?php echo $this->_tpl_vars['t2']['amount']; ?>
</b></td>


	</tr>
<?php endforeach; endif; unset($_from); ?>	
</table>


</center>

</body>
</html>