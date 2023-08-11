<?php /* Smarty version 2.6.26, created on 2020-01-24 09:04:05
         compiled from diagency.tpl */ ?>
<html>
<head><title>display table</title></head>
<body>

<table border="5" align="center"> 
<tr><th>Name</th>
<th>Address</th>
<th>Pincode</th>
<th>District</th>

<th>phone number</th><th>register number</th>
</tr>

<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['b']['aname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['address']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['pin']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['dist']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['ph']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['regno']; ?>
</td>
	<td><a href="agencyapprove.php?f=<?php echo $this->_tpl_vars['b']['lkey']; ?>
">Approve</a></td>
    <td><a href="agencyreject.php?g=<?php echo $this->_tpl_vars['b']['lkey']; ?>
">Reject</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>