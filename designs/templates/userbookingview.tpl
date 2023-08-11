 
<html>
	<head>
	
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
{literal}

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

{/literal}
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
	{foreach from=$view item="s"}
			<tr><td>{$s.packagename}</td><td>{$s.aname}</td><td>{$s.bdate}</td>
{if $s.paymentstatus==1}
	<td>Completed</td>
{elseif $s.paymentstatus==0}
	<td><a style="color: red;" href="directpay.php?k={$s.pkey}">Not completed</a></td>
{/if}

</td><td>{$s.reply}   </td>

<td  >{$s.ph}</td>
{if $s.paymentstatus==0}
<td  class="act" style="padding: 0px;"><a class="button2rrr" href="removefromkart.php?k={$s.bkey}">Remove</a></td>
{else}




{if $s.cancelstatus==1}
		<td class="act">Cancelled</td>
{elseif $s.progress==-1}	
		<td class="act" style="background-color: red;color: white;text-align: center;">Suspended</td>
{elseif $s.progress==1}	
		<td class="act" style="background-color: green;color: white;text-align: center;">In-Progress</td>
{elseif $s.progress==2}
		<td class="act" style="background-color: #3399ff;color: white;text-align: center;">Completed</td>
		<td style="background-color: #ffffffa6;text-align: center;"><a href="rating.php?f={$s.pkey}&&k={$s.akey}">Review</a>
	
	</td></tr>


{elseif $s.cancelstatus==0 && $date6<$s.cldate}
		<td class="act" style="padding: 0px;"><a class="akubv" href="cancelbooking.php?k={$s.bkey}&&k1={$s.bdate}&&k2={$s.packageid}&&k3={$s.packageamount}">Cancel</a></td>
{/if}
{/if}

{/foreach}
	</table>
</form></center><br><br><br><br><br><br>
</body>
</html>