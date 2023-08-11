<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><H1>COMPLAINT RESPOND</H1><br><hr width="40%" size="3"><br>
	<form method="POST" action="">
		{foreach from=$view item="s"}
<h3>Complaint</h3>
		
		<table>
		<tr><td><p style="border-style: groove;border-width: 4px;height: 150px;width: 350px;align-content: center;"><font size="4px" >{$s.subject}</font><br><br>{$s.complaint}</p>
		{/foreach}</td></tr>
		<tr><td><input type="hidden" name="hide" value="h"><textarea name="creply" placeholder="Write Message" style="width: 350px;height: 200px;"></textarea></td></tr>	
<tr><td></td><td>
<input style="color: white;background-color: green;padding: 10px;font-size: 20px;border-radius: 10px;width: 100px;" type="submit" name="submit" value="SEND"></td></tr>
		</table>

	</form>
</center>
</body>
</html>