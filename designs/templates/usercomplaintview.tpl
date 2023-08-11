



<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
</head>
<body style="background-image: url(web/images/red-beta-fish.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">


<br><br><br><br>
<br><br><br><br>
<center>
<div style="margin-top: 10vh;background-color: #0000008c;max-width: 60%;">
	<h1 style="font-size: 60px; word-spacing: 100px;">COMPLAINTS</h1><hr width="45%" size="1" style="background-color: white;"><br>
		
			<form method="POST" action="" style="min-height: 600px;background-color: #00000000;max-width: 60%;padding: 50px;">
			<table align="center" border="5" bgcolor="white" style="text-align: center;">
			<tr><th>Subject</th><th>Complaint</th><th>Complaint Date</th></tr>
			{foreach from=$view item="b"}

			<tr><td>{$b.subject}</td><td>{$b.complaint}</td><td>{$b.date}</td>
			<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;"><a class="button1"	href="usercomplaintupdate.php?f={$b.ckey}">Edit</a></td>
			<td style="border: hidden;"><a  class="button2"  href="usercomplaintdelete.php?g={$b.ckey}">Delete</a></td>
			</tr>
		{/foreach}
			</table>
			</form>
</div>	
</center>


<br><br><br>
		</body>
</html>
