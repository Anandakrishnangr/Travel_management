<?php /* Smarty version 2.6.26, created on 2020-11-12 09:15:48
         compiled from userbookingview.tpl */ ?>
 
<html>
	<head>
	
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
<?php echo '

<style type="text/css">
	td{
		font-size: 13px;
	}
	.akubv{
		display: block;background-color: white;color: blue;width: 100%;height: 51px;padding: 12px;font-size: 17px;text-align: center;
	}
	.akubv:hover{
		background-color: orange;
	}
	.act{
		border-top: hidden;
		border-right: hidden;
		border-bottom: hidden;
	}
	.button2rrr
	{
		display: block;background-color: red;color: blue;width: 100%;height: 51px;padding: 12px;font-size: 17px;text-align: center;color: white;
	}
</style>

'; ?>

	</head>

		<body  style="background-image: url(web/images/US.jpg);background-position: center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;color: white;">
			<br><br>
			<br><br>
			<br><br>
			<center>	<br><br>
				

	<form method="POST" action="" style="width: 70%;background: rgba(0, 0, 0, 0.5);padding: 5px;min-height: 700px;"> 
		<h1>MY BOOKINGS</h1><hr width="25%" style="background-color: white;"><br>
		<table border="2" style="width: 100%;table-layout: fixed;">
			<tr><th>Package Name</th><th>Agency</th><th>Booked Date</th><th>Payment Status</th><th>Message from agency</th><th>Contact</th></tr>
	<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
			<tr><td><?php echo $this->_tpl_vars['s']['packagename']; ?>
</td><td><?php echo $this->_tpl_vars['s']['aname']; ?>
</td><td><?php echo $this->_tpl_vars['s']['bdate']; ?>
</td>
<?php if ($this->_tpl_vars['s']['paymentstatus'] == 1): ?>
	<td>Completed</td>
<?php elseif ($this->_tpl_vars['s']['paymentstatus'] == 0): ?>
	<td><a style="color: red;" href="directpay.php?k=<?php echo $this->_tpl_vars['s']['pkey']; ?>
">Not completed</a></td>
<?php endif; ?>

</td><td><?php echo $this->_tpl_vars['s']['reply']; ?>
   </td>

<td  ><?php echo $this->_tpl_vars['s']['ph']; ?>
</td>
<?php if ($this->_tpl_vars['s']['paymentstatus'] == 0): ?>
<td  class="act" style="padding: 0px;"><a class="button2rrr" href="removefromkart.php?k=<?php echo $this->_tpl_vars['s']['bkey']; ?>
">Remove</a></td>
<?php else: ?>




<?php if ($this->_tpl_vars['s']['cancelstatus'] == 1): ?>
		<td class="act">Cancelled</td>
<?php elseif ($this->_tpl_vars['s']['progress'] == -1): ?>	
		<td class="act" style="background-color: red;color: white;text-align: center;">Suspended</td>
<?php elseif ($this->_tpl_vars['s']['progress'] == 1): ?>	
		<td class="act" style="background-color: green;color: white;text-align: center;">In-Progress</td>
<?php elseif ($this->_tpl_vars['s']['progress'] == 2): ?>
		<td class="act" style="background-color: #3399ff;color: white;text-align: center;">Completed</td>
		<td style="background-color: #ffffffa6;text-align: center;"><a href="rating.php?f=<?php echo $this->_tpl_vars['s']['pkey']; ?>
&&k=<?php echo $this->_tpl_vars['s']['akey']; ?>
">Review</a>
	
	</td></tr>


<?php elseif ($this->_tpl_vars['s']['cancelstatus'] == 0 && $this->_tpl_vars['date6'] < $this->_tpl_vars['s']['cldate']): ?>
		<td class="act" style="padding: 0px;"><a class="akubv" href="cancelbooking.php?k=<?php echo $this->_tpl_vars['s']['bkey']; ?>
&&k1=<?php echo $this->_tpl_vars['s']['bdate']; ?>
&&k2=<?php echo $this->_tpl_vars['s']['packageid']; ?>
&&k3=<?php echo $this->_tpl_vars['s']['packageamount']; ?>
">Cancel</a></td>
<?php endif; ?>
<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
	</table>
</form></center><br><br><br><br><br><br>
</body>
</html>