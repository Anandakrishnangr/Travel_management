<?php /* Smarty version 2.6.26, created on 2020-10-31 14:33:55
         compiled from blogadminapproval.tpl */ ?>




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
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<?php if ($this->_tpl_vars['b']['status'] != -1): ?>
<tr>
	<td><img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" style="height: 90px;width: 160px;"></td><td><?php echo $this->_tpl_vars['b']['head']; ?>
</td><td><?php echo $this->_tpl_vars['b']['username']; ?>
<?php echo $this->_tpl_vars['b']['aname']; ?>
</td><td><?php echo $this->_tpl_vars['b']['date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['place']; ?>
</td><td style="width: 250px;"><?php echo $this->_tpl_vars['b']['content']; ?>
</td><td><a  class="button1" style="text-decoration: none;" 	href="p1blog.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">Read</a></td>
	<?php if ($this->_tpl_vars['b']['status'] == 0): ?>
	<td>Pending</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;">
		<a  class="button1" style="text-decoration: none;" 	href="blogapprove.php?f=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">Approve</a><!--  --></td><?php else: ?>
		<td>Approved</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;">
		<a   class="button2"  style="text-decoration: none;" href="blogreject.php?g=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">Reject</a></td>
	<?php endif; ?>
	</tr>
	<?php else: ?>

<tr style="background-color: #ff000042;" >
	<td><img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" style="height: 90px;width: 160px;"></td>
	<td><?php echo $this->_tpl_vars['b']['head']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['username']; ?>
<?php echo $this->_tpl_vars['b']['aname']; ?>
</td>
	<td><?php echo $this->_tpl_vars['b']['date']; ?>
</td><td><?php echo $this->_tpl_vars['b']['place']; ?>
</td><td style="width: 250px;"><?php echo $this->_tpl_vars['b']['content']; ?>
</td><td><a  class="button1" style="text-decoration: none;" 	href="p1blog.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">Read</a></td>
	<td>Rejected</td>
	<td style="border-right: hidden;border-top: hidden;border-bottom: hidden;background-color: white;">
	<a  class="button1" style="text-decoration: none;" 	href="blogapprove.php?f=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">Approve</a></td>

</tr>

	<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
			</table>

		</body>
</html>