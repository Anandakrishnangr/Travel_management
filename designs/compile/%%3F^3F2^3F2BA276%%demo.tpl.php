<?php /* Smarty version 2.6.26, created on 2020-03-30 15:52:17
         compiled from demo.tpl */ ?>
<html>
<body>
	
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<?php if ($this->_tpl_vars['b']['vie'] == 1): ?>

	<b>value<?php echo $this->_tpl_vars['b']['vie']; ?>
</b>

<?php else: ?>

	<b>value</b>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>



</body>


</html>