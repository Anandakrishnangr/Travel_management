<?php /* Smarty version 2.6.26, created on 2020-04-11 14:15:54
         compiled from usernot.tpl */ ?>




<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<!-- <link rel="stylesheet" href="web/ak/css/mycssbutton.css"> -->

<?php echo '
<style>
/* width */


::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px white; 
  border-radius: 10px;
  background: black; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: white; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}

::-webkit-scrollbar-track:hover {
  box-shadow: inset 0 0 5px black; 
  border-radius: 10px;
  background: white; 
}

</style>
'; ?>

</head>
<body  style="background-image: url(web/images/notificationbg.jpg);font-size: 16px;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">


<br><br><br><br>
<br><br><br><br>

	<center><h1 style="font-size: 60px; word-spacing: 100px;">NOTIFICATIONS</h1></center><hr width="65%" size="2" color="white" style="background-color: white;"></center><br>
	<div style="text-align: center;"> 
		<center>
		<form method="POST" action="" style="text-align: center;height:600px;width:90%;overflow-y:auto;">
			<center><table align="center"  bgcolor="white" style="text-align: center;width: 100%	">
		<tr><th>Notification</th><th> Date</th></tr>
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
		

<tr><td><?php echo $this->_tpl_vars['b']['notifi']; ?>
   <h2 style="float: right;">  FROM
<?php if ($this->_tpl_vars['b']['loginid'] == 1): ?> 
 Admin@IMPERIAL 
<?php else: ?> 
<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['bb']):
?> 

<?php if ($this->_tpl_vars['bb']['loginid'] == $this->_tpl_vars['b']['loginid']): ?> 
<?php echo $this->_tpl_vars['bb']['aname']; ?>
 



<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</h2>

</td><td><?php echo $this->_tpl_vars['b']['date']; ?>
</td>
	
	</tr>
		
		<?php endforeach; endif; unset($_from); ?>
			</table></center>
		</form></center>
		</div>
		<br><br><br><br>
		

<br><br><br><br><br><br><br><br>


		</body>
</html>