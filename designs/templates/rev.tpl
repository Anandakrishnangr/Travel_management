<!DOCTYPE html>
<html>
<head>
	<title></title>

	{literal}
	<style type="text/css">
		
tr{
	border: 1px solid black;
}
th,td{
	padding: 10px;font-size: 14px;text-transform: capitalize;
}

	</style>
	{/literal}
</head>
<body>
<br><br>
<br>
<br>
<br>
<br>
<center>
<div style="background-color: skyblue;color: gold;font-size: 20px;text-align: center;width: 70%;padding: 15px;font-weight: 300;"><B>REVENUE</B></div><br>
<div style="float: left;margin-left: 15%;font-size: 15px;background-color: red;padding: 4px;color: white;font-weight: bold;"><b><a href="stat.php?k={$jy1}&&p={$jy}">View Statistics</a></b></div><br><br>
<div style="float: left;margin-left: 15%;font-size: 20px;background-color: skyblue;padding: 7px;color: white;"><b>This Month</b></div>

<div style="width: 70%;">

<table style="width: 100%;">
	<tr>
	<th>Agency Name</th>
	<th>Customer Name</th>
	<th>Purchase Date</th>
	<th>Amount</th>
	</tr>

{foreach from=$viewx1 item='t'}
	<tr>
		<td>{$t.aname}</td>
<td>{$t.username}</td><td>{$t.date}</td><td style="color: green;"><b>+{$t.amount}</b></td>


	</tr>
{/foreach}	
</table>

<br>
<div style="float: left;font-size: 20px;background-color: skyblue;padding: 7px;color: white;"><b>Last Month</b></div>

	

<table style="width: 100%;">
	<tr>
	<th>Agency Name</th>
	<th>Customer Name</th>
	<th>Purchase Date</th>
	<th>Amount</th>
	</tr>

{foreach from=$viewx2 item='t2'}
	<tr>
		<td>{$t2.aname}</td>
<td>{$t2.username}</td><td>{$t2.date}</td><td style="color: green;"><b>+{$t2.amount}</b></td>


	</tr>
{/foreach}	
</table>


</center>

</body>
</html>