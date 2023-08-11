<?php /* Smarty version 2.6.26, created on 2020-04-05 15:27:35
         compiled from notifisend.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

<?php echo '
<style type="text/css">
	
	td,th,tr{

border: 1px solid black;

	}

	td{

		font-size: 15px;
	}


</style>

'; ?>



</head>
<body  style="background-image: url(web/images/dove.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: black;">
	<br><br><br><br><br><br>

<center><H1>RECENT BOOKINGS</H1><hr width="30%" style="background-color: black;"><br>

<form method="POST" action="">
	<table  style="border: 1px solid black;">
<tr><th>Customer Name</th><th>Package Name</th><th>Booked Date</th><th>Payment Status</th><th style="border-top: hidden;border-right: hidden;border-bottom: hidden;">Action</th></tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr><td><?php echo $this->_tpl_vars['s']['fname']; ?>
</td><td><?php echo $this->_tpl_vars['s']['packagename']; ?>
</td><td><?php echo $this->_tpl_vars['s']['bdate']; ?>
</td>
<?php if ($this->_tpl_vars['s']['paymentstatus'] == 1): ?><td>Completed</td><?php elseif ($this->_tpl_vars['s']['paymentstatus'] == 0): ?><td>Not Completed</td><?php endif; ?>
</td><td style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button2" href="notadd.php?k=<?php echo $this->_tpl_vars['s']['loginid']; ?>
">Send</a></td></tr>

		<?php endforeach; endif; unset($_from); ?>
	</table>
</form>
</center>
<br><br><br><br><br><br>
</body>
</html> 