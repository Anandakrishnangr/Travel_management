<?php /* Smarty version 2.6.26, created on 2020-11-12 04:32:43
         compiled from agencybookingsview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

<?php echo '
<style type="text/css">
	
	td{

		text-align: center;
	}

</style> 

'; ?>


</head>
<body style="background-image: url(web/images/red-betta-fish-2707010.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
	<br><br><br><br><br><br>
<center><H1>RECENT BOOKINGS</H1><hr width="30%" color="white" style="background-color: white;"><br>
<div style="float: left;margin-left: 10%;font-size: 15px;background-color: red;padding: 4px;color: white;font-weight: bold;"><b><a style="color: white;" href="stat.php?k=<?php echo $this->_tpl_vars['jy1']; ?>
&&p=<?php echo $this->_tpl_vars['jy']; ?>
">View Statistics</a></b></div><br><br>
<form method="POST" action="" style="padding-bottom: 10px;background-color: #0000008c;max-width: 80%;width: 80%;padding: 50px;">
	<table border="2" style="text-align: center; width: 100%;">
<tr><th>Package Name</th><th>Customer Name</th><th>Booked Date</th><th>Payment Status</th><th>Cancel Status</th><th>Trip Status</th><th style="border-top: hidden;border-right: hidden;border-bottom: hidden;"></th></tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<tr><td><?php echo $this->_tpl_vars['s']['packagename']; ?>
</td><td><?php echo $this->_tpl_vars['s']['fname']; ?>
</td><td><?php echo $this->_tpl_vars['s']['bdate']; ?>
</td>
<?php if ($this->_tpl_vars['s']['paymentstatus'] == 1): ?><td style="background-color: green;color: white;">Completed</td><?php elseif ($this->_tpl_vars['s']['paymentstatus'] == 0): ?><td style="background-color: #b71111;color: white;">Not Completed</td><?php endif; ?><?php if ($this->_tpl_vars['s']['cancelstatus'] == 0): ?>
<td>no requests</td><?php else: ?><td>Cancelled</td><?php endif; ?>
</td>
<?php if ($this->_tpl_vars['s']['progress'] == 2): ?><td>Completed</td><?php elseif ($this->_tpl_vars['s']['progress'] == 1): ?><td>In-Progress</td><?php elseif ($this->_tpl_vars['s']['progress'] == -1): ?><td>Suspended</td><?php else: ?><td>Not Started</td><?php endif; ?>
<?php if ($this->_tpl_vars['s']['reply'] == null): ?><td style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button2" href="bookingreply.php?k=<?php echo $this->_tpl_vars['s']['bkey']; ?>
">Reply</a></td><?php elseif ($this->_tpl_vars['s']['reply'] != null): ?><td  style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button1" href="bookingreply.php?k=<?php echo $this->_tpl_vars['s']['bkey']; ?>
">Reply</a></td><?php endif; ?></tr>

		<?php endforeach; endif; unset($_from); ?>
	</table>
</form>
<br><br><br><br><br><br>
</center>
</body>
</html>