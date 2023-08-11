



<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

</head>
<body style="background-image: url(web/images/red-beta-fish.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">


<br><br><br><br>
<br><br><br><br>
<center>
<div style="margin-top: 10vh;background-color: #0000008c;max-width: 80%;">
	<center><h1 style="font-size: 60px; word-spacing: 100px;">COMPLAINTS</h1></center><hr width="45%" size="1" color="white" style="background-color: white;"><br>
		<form method="POST" action="" style="background-color: #00000000;max-width: 60%;padding: 50px;">
			<table align="center" border="5" bgcolor="white" style="text-align: center;width: 100%;">
		<tr><th>Subject</th><th>Complaint</th><th>Complaint Date</th><th>Complaint Reply</th></tr>
		{foreach from=$view item="b"}

<tr><td>{$b.subject}</td><td>{$b.complaint}</td><td>{$b.date}</td>

{if $b.creply}
<td>{$b.creply}</td>

{else}

<td>Complaint received ! will reach you soon !</td>
{/if}
	


	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;"><a  class="button1" 	href="agencycomplaintupdate.php?f={$b.ckey}">Edit</a></td>
	<td style="border: hidden;"><a  class="button2"  href="usercomplaintdelete.php?g={$b.ckey}">Delete</a></td>
	</tr>
		{/foreach}
			</table>
</form></center>
			</div></center>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
		</body>
</html>
