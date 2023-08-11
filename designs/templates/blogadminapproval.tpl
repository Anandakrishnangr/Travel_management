



<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
</head>
<body>


<br><br><br><br>
<br><br><br><br>

	<center><h1 style="font-size: 60px; word-spacing: 100px;">Blogs</h1></center><hr width="45%" size="1" color="black"></center><br>
		<form method="POST" action="" enctype="multipart/form-data" >
			<table align="center" border="5" bgcolor="white" style="text-align: center;">
		<tr><th>Cover Image</th><th>Title</th><th>Author</th><th>Date</th><th>Place</th><th style="width: 300px;">Content</th><th></th><th>Status</th></tr>
		{foreach from=$view item="b"}
{if $b.status!=-1}
<tr>
	<td><img src="{$b.pathpic}" style="height: 90px;width: 160px;"></td><td>{$b.head}</td><td>{$b.username}{$b.aname}</td><td>{$b.date}</td>
	<td>{$b.place}</td><td style="width: 250px;">{$b.content}</td><td><a  class="button1" style="text-decoration: none;" 	href="p1blog.php?k={$b.blogkey}">Read</a></td>
	{if $b.status==0}
	<td>Pending</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;">
		<a  class="button1" style="text-decoration: none;" 	href="blogapprove.php?f={$b.blogkey}">Approve</a><!--  --></td>{else if $b.status==1}
		<td>Approved</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;">
		<a   class="button2"  style="text-decoration: none;" href="blogreject.php?g={$b.blogkey}">Reject</a></td>
	{/if}
	</tr>
	{else}

<tr style="background-color: #ff000042;" >
	<td><img src="{$b.pathpic}" style="height: 90px;width: 160px;"></td>
	<td>{$b.head}</td>
	<td>{$b.username}{$b.aname}</td>
	<td>{$b.date}</td><td>{$b.place}</td><td style="width: 250px;">{$b.content}</td><td><a  class="button1" style="text-decoration: none;" 	href="p1blog.php?k={$b.blogkey}">Read</a></td>
	<td>Rejected</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;background-color: white;">
	<a  class="button1" style="text-decoration: none;" 	href="blogapprove.php?f={$b.blogkey}">Approve</a></td>

</tr>

	{/if}
		{/foreach}
			</table>

		</body>
</html>
