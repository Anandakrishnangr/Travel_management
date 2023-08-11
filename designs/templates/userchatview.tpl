<br><br><br><html>
<head>
	<title></title>
</head>
<body>
<center><u><h1>Chat</h1></u>
<br>
<form method="POST" action="">
<table class="table table-bordered">
<!-- <input  type="hidden" name="hide" value="h"> -->
{if $view!=null}
<tr>
<td>Name</td>
</tr>
	
{foreach from=$view item="v"}
<tr>
		<td>{$v.aname}</td><td><a href="userchat.php?g={$v.loginid}" class="btn btn-info">CHAT</a></td>
			
	
	</tr>
	{/foreach}
	</table>
	{/if}
</form>            
</body>
</html>