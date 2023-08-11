<?php /* Smarty version 2.6.26, created on 2020-04-05 08:46:42
         compiled from agencychatview.tpl */ ?>
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
<?php if ($this->_tpl_vars['view'] != null): ?>
<tr>
<td>Name</td>
</tr>
	
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<tr>
		<td><?php echo $this->_tpl_vars['v']['username']; ?>
</td><td><a href="agencychat.php?g=<?php echo $this->_tpl_vars['v']['loginid']; ?>
" class="btn btn-info">CHAT</a></td>
			
	
	</tr> 
	<?php endforeach; endif; unset($_from); ?>
	</table>
	<?php endif; ?>
</form>            
</body>
</html>