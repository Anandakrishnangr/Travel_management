



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
		{foreach from=$view item="b"}

<tr><td>{$b.aname}{$b.fname}</td><td>{$b.subject}</td><td>{$b.complaint}</td><td>{$b.date}</td><td><a style="display: inline-block;background-color: green;color: white;border-radius: 10px;padding: 15px;width: 100px;height: 50px;text-align: center;" href="admincomplaintreply.php?k={$b.ckey}">Reply</a></td>
	<!--<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;"><a style="background-color: green;text-align: center;" class="a" 	href="usercomplaintupdate.php?f={$b.ckey}">Edit</a></td>
	<td style="border: hidden;"><a  style="background-color: red;" class="a"  href="usercomplaintdelete.php?g={$b.ckey}">Delete</a></td>
	--></tr>
		{/foreach}
		
			</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</body>
</html>
