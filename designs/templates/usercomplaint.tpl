<!DOCTYPE html>
<html>
<head>
	<title> User Complaint</title>
</head>
<body>
<center><h1><u>User Complaint</u></h1></center><br>
<form method="POST" action="">
	<table align="center" border="5" bgcolor="white">
<tr ><th>Name</th><th>Contact</th><th>Email</th><th>Subject</th><th>Complaint</th><th>Complainte Registed Date</th></tr>
{foreach from=$view item="b"}
<tr>
<td>{$b.name}</td>
<td>{$b.contact}</td>
<td>{$b.email}</td>
<td>{$b.subject}</td>
<td>{$b.complaint}</td>
<td>{$b.date}</td>
</tr>
{/foreach}
</table>

</body>
</html>