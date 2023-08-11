<html>
<head>
	
	<title></title>
</head>
<body>
<center><u><h1>Chat</h1></u>
<br><br><br><br><br><br><br><br>
<form method="POST" action="" style="min-height: 700px;margin: 40px;">
<table class="table table-bordered">
<!-- <input  type="hidden" name="hide" value="h"> -->
{if $view!=null}
<tr>
<td>Name</td>
</tr>
	
{foreach from=$view item="v"}
<tr>
		<td>{$v.username}</td><td><a href="agencychat.php?g={$v.loginid}" class="btn btn-info">CHAT</a></td>
			
	
	</tr> 
	{/foreach}
	</table>
	{/if}
</form>            
</body>
</html>