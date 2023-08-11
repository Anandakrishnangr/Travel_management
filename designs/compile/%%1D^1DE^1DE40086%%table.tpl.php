<?php /* Smarty version 2.6.26, created on 2020-01-11 07:55:59
         compiled from table.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="2" cellpadding="4" cellspacing="3"><th>FIRSTNAME</th><th>LASTNAME</th><th>ADDRESS</th><th>CONTACT</th>

<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['b']['fname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['lname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['address']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['ph']; ?>
</td>
	
	<td><a href="update.php?v=<?php echo $this->_tpl_vars['b']['lkey']; ?>
">UPDATE</a></td>
	<td><a href="delete.php?v=<?php echo $this->_tpl_vars['b']['ukey']; ?>
">DELETE</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>
</body>
</html>