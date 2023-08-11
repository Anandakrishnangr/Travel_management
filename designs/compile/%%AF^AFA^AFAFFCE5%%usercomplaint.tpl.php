<?php /* Smarty version 2.6.26, created on 2020-04-07 06:19:27
         compiled from usercomplaint.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title> User Complaint</title>
</head>
<body>
<center><h1><u>User Complaint</u></h1></center><br>
<form method="POST" action="">
	<table align="center" border="5" bgcolor="white">
<tr ><th>Name</th><th>Contact</th><th>Email</th><th>Subject</th><th>Complaint</th><th>Complainte Registed Date</th></tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr>
<td><?php echo $this->_tpl_vars['b']['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['b']['contact']; ?>
</td>
<td><?php echo $this->_tpl_vars['b']['email']; ?>
</td>
<td><?php echo $this->_tpl_vars['b']['subject']; ?>
</td>
<td><?php echo $this->_tpl_vars['b']['complaint']; ?>
</td>
<td><?php echo $this->_tpl_vars['b']['date']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

</body>
</html>