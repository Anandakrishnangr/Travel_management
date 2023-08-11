<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="web/ak/css/form.css">
	<title>Edit Complaint</title>

{literal}

<style>
::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}
</style>



{/literal}

</head>
<body style="background-image: url(web/images/red-betta-fish-2707010.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;"><br><br><br><br><br><br><br><br><br>
	<center>
<div style="margin-top: 10vh;background-color: #0000008c;max-width: 60%;">
<center><h1 style="font-size: 60px; ">UPDATE COMPLAINT</h1><hr width="30%" width="45%" size="1" color="white" style="background-color: white;"></center><br>

<form method="POST" action="" class="rform"  style="min-width: 35%;min-height: 630px;">
	<table align="center">
	{foreach from=$view item="u"}
		<input type="hidden" name="hide" value="h">
		<tr  style="font-family: Georgia,serif; font-size: 15px;"><td style="padding: 10px;">Subject</td><td style="padding: 10px;"><input type="text" name=" subject" value="{$u.subject}"></td></tr>
		<tr  style="font-family: Georgia,serif; font-size: 15px;"><td style="padding: 10px;">Complaint</td><td style="padding: 10px;"><textarea name="complaint" placeholder="Enter Complaint" style="min-height: 290px;min-width: 370px;padding: 10px;">{$u.complaint}</textarea></td></tr><tr><td></td><td><input type="submit" name="submit" value="Update" style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 19px;border-radius: 12px;"></td></tr>
		{/foreach}
	</table>
</form>
</div>
</center>
<br><br>
</body>
</html>