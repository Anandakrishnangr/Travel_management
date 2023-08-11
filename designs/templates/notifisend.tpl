<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

{literal}
<style type="text/css">
	
	td,th,tr{

border: 1px solid black;

	}

	td{

		font-size: 15px;
	}


</style>

{/literal}


</head>
<body  style="background-image: url(web/images/dove.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: black;">
	<br><br><br><br><br><br>

<center><H1>RECENT BOOKINGS</H1><hr width="30%" style="background-color: black;"><br>

<form method="POST" action="">
	<table  style="border: 1px solid black;">
<tr><th>Customer Name</th><th>Package Name</th><th>Booked Date</th><th>Payment Status</th><th style="border-top: hidden;border-right: hidden;border-bottom: hidden;">Action</th></tr>
{foreach from=$view item="s"}
<tr><td>{$s.fname}</td><td>{$s.packagename}</td><td>{$s.bdate}</td>
{if $s.paymentstatus==1}<td>Completed</td>{elseif $s.paymentstatus==0}<td>Not Completed</td>{/if}
</td><td style="border-top: hidden;border-right: hidden;border-bottom: hidden;"><a class="button2" href="notadd.php?k={$s.loginid}">Send</a></td></tr>

		{/foreach}
	</table>
</form>
</center>
<br><br><br><br><br><br>
</body>
</html> 