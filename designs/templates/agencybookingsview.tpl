<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

{literal}
<style type="text/css">
	
	td{

		text-align: center;
	}

</style> 

{/literal}

</head>
<body style="background-image: url(web/images/red-betta-fish-2707010.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
	<br><br><br><br><br><br>
<center><H1>RECENT BOOKINGS</H1><hr width="30%" color="white" style="background-color: white;"><br>
<div style="float: left;margin-left: 10%;font-size: 15px;background-color: red;padding: 4px;color: white;font-weight: bold;"><b><a style="color: white;" href="stat.php?k={$jy1}&&p={$jy}">View Statistics</a></b></div><br><br>
<form method="POST" action="" style="padding-bottom: 10px;background-color: #0000008c;max-width: 80%;width: 80%;padding: 50px;">
	<table border="2" style="text-align: center; width: 100%;">
<tr><th>Package Name</th><th>Customer Name</th><th>Booked Date</th><th>Payment Status</th><th>Cancel Status</th><th>Trip Status</th><th style="border-top: hidden;border-right: hidden;border-bottom: hidden;"></th></tr>
{foreach from=$view item="s"}
<tr><td>{$s.packagename}</td><td>{$s.fname}</td><td>{$s.bdate}</td>
{if $s.paymentstatus==1}<td style="background-color: green;color: white;">Completed</td>{elseif $s.paymentstatus==0}<td style="background-color: #b71111;color: white;">Not Completed</td>{/if}{if $s.cancelstatus==0}
<td>no requests</td>{else}<td>Cancelled</td>{/if}
</td>
{if $s.progress==2}<td>Completed</td>{elseif $s.progress==1}<td>In-Progress</td>{elseif $s.progress==-1}<td>Suspended</td>{else}<td>Not Started</td>{/if}
{if $s.reply==null}<td style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button2" href="bookingreply.php?k={$s.bkey}">Reply</a></td>{elseif $s.reply!=null}<td  style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button1" href="bookingreply.php?k={$s.bkey}">Reply</a></td>{/if}</tr>

		{/foreach}
	</table>
</form>
<br><br><br><br><br><br>
</center>
</body>
</html>