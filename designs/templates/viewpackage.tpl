<!DOCTYPE html>
<html>
<head>
	<title>Packages</title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutton.css">
		<link rel="stylesheet" href="web/ak/css/form.css">

{literal}
		<style type="text/css">table td {


text-align: center;
color:#336699;

padding:8px;
text-overflow:ellipsis;
overflow:hidden;
white-space:nowrap;
}</style>
{/literal}
</head>
<body>

<br><br><br><br><br><br><br><br><br><br>
	<center><h1>PACKAGES</h1><hr size="2" width="30%"><br>
	<form action="" method="POST" enctype="multipart/form-data">
		<table border="2" style="table-layout: fixed;
  width: 100%;text-align: center; ">
			<tr><th  style="border-bottom: hidden;border-left: hidden;border-top: hidden;"></th><th>Package Name</th><th>Package Type</th><th style="width: 150px;">Package Details</th><th>Start</th><th>Destination</th><th>Days</th><th>Added On</th><th>Package Amount</th></tr>
			{foreach from=$view item='b'}
<tr><td style="border-bottom: hidden;border-left: hidden;"><img src="{$b.pathpic}" alt="packagecover" height="100px" width="160px"></td>
	<td>{$b.packagename}</td>
	<td>{$b.packagetype}</td>
	<td  style="max-height: 100px;">{$b.packagedetails}</td>
	<td>{$b.start}</td>
	<td>{$b.destination}</td>
	<td>{$b.days}</td>
	<td>{$b.date}</td>
	<td>{$b.packageamount}</td>
	
	<td style="border-bottom: hidden;border-right: hidden;border-top: hidden;"><a  class="button1"  style="text-decoration: none;" href="packageupdate.php?v={$b.pkey}">UPDATE</a></td>
	<td style="border-bottom: hidden;border-right: hidden;border-top: hidden;"><a  class="button2"  style="text-decoration: none;" href="packagedelete.php?v={$b.pkey}">DELETE</a></td>
</tr>
{/foreach}
		</table>
	</form>
</center><br><br><br><br><br><br><br><br><br><br>
</body>
</html>