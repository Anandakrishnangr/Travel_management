



<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<!-- <link rel="stylesheet" href="web/ak/css/mycssbutton.css"> -->

{literal}
<style>
/* width */


::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px white; 
  border-radius: 10px;
  background: black; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: white; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}

::-webkit-scrollbar-track:hover {
  box-shadow: inset 0 0 5px black; 
  border-radius: 10px;
  background: white; 
}

</style>
{/literal}
</head>
<body  style="background-image: url(web/images/notificationbg.jpg);font-size: 16px;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">


<br><br><br><br>
<br><br><br><br>

	<center><h1 style="font-size: 60px; word-spacing: 100px;">NOTIFICATIONS</h1></center><hr width="65%" size="2" color="white" style="background-color: white;"></center><br>
	<div style="text-align: center;"> 
		<center>
		<form method="POST" action="" style="text-align: center;height:600px;width:90%;overflow-y:auto;">
			<center><table align="center"  bgcolor="white" style="text-align: center;width: 100%	">
		<tr><th>Notification</th><th> Date</th></tr>
		{foreach from=$view item="b"}
		

<tr><td>{$b.notifi}   <h2 style="float: right;">  FROM
{if $b.loginid==1 } 
 Admin@IMPERIAL 
{else} 
{foreach from=$views item="bb"} 

{ if $bb.loginid==$b.loginid } 
{$bb.aname} 



{/if}
{/foreach}
{/if}
</h2>

</td><td>{$b.date}</td>
	
	</tr>
		
		{/foreach}
			</table></center>
		</form></center>
		</div>
		<br><br><br><br>
		

<br><br><br><br><br><br><br><br>


		</body>
</html>
