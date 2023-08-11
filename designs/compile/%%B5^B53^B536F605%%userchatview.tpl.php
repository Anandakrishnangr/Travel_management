<?php /* Smarty version 2.6.26, created on 2020-03-30 09:32:29
         compiled from userchatview.tpl */ ?>
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
<?php if ($this->_tpl_vars['view'] != null): ?>
<tr>
<td>Name</td>
</tr>
	
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<tr>
		<td><?php echo $this->_tpl_vars['v']['aname']; ?>
</td><td><a href="userchat.php?g=<?php echo $this->_tpl_vars['v']['loginid']; ?>
" class="btn btn-info">CHAT</a></td>
			
	
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	<?php endif; ?>
</form>            
</body>
</html>