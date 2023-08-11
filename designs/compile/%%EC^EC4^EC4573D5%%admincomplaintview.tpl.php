<?php /* Smarty version 2.6.26, created on 2020-11-12 07:09:51
         compiled from admincomplaintview.tpl */ ?>




<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
</head>
<body>


<br><br><br><br>
<br><br><br><br>

	<center><h1 style="font-size: 60px; word-spacing: 100px;">COMPLAINTS</h1></center><hr width="45%" size="1" color="black"></center><br>
		<form method="POST" action="">
			<table align="center" border="5" bgcolor="white" style="text-align: center;">
		<tr><th>Complainee</th><th>Subject</th><th>Complaint</th><th>Complaint Date</th><th>Action</th></tr>
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>

<tr><td><?php echo $this->_tpl_vars['b']['aname']; ?>
<?php echo $this->_tpl_vars['b']['fname']; ?>
</td><td><?php echo $this->_tpl_vars['b']['subject']; ?>
</td><td><?php echo $this->_tpl_vars['b']['complaint']; ?>
</td><td><?php echo $this->_tpl_vars['b']['date']; ?>
</td><td><a style="display: inline-block;background-color: green;color: white;border-radius: 10px;padding: 15px;width: 100px;height: 50px;text-align: center;" href="admincomplaintreply.php?k=<?php echo $this->_tpl_vars['b']['ckey']; ?>
">Reply</a></td>
	<!--<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;"><a style="background-color: green;text-align: center;" class="a" 	href="usercomplaintupdate.php?f=<?php echo $this->_tpl_vars['b']['ckey']; ?>
">Edit</a></td>
	<td style="border: hidden;"><a  style="background-color: red;" class="a"  href="usercomplaintdelete.php?g=<?php echo $this->_tpl_vars['b']['ckey']; ?>
">Delete</a></td>
	--></tr>
		<?php endforeach; endif; unset($_from); ?>
		
			</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
</html>