<?php /* Smarty version 2.6.26, created on 2020-02-16 10:55:16
         compiled from blogview.tpl */ ?>

<br><br><br><br>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $this->_tpl_vars['s']['pathpic']; ?>
" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <span class="text-serif text-primary"><?php echo $this->_tpl_vars['s']['place']; ?>
</span>
            <h3 class="heading-92913 text-black"><?php echo $this->_tpl_vars['s']['date']; ?>
</h3>
            <p><?php echo $this->_tpl_vars['s']['content']; ?>
</p>
            
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    </div>
    
 <form method="POST" action="">


    <div>
      Comment<br>
      <textarea name="comment" placeholder="comment here"></textarea>
      <input type="submit" value="POST">
<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
<p><?php echo $this->_tpl_vars['e']['username']; ?>
  <?php echo $this->_tpl_vars['e']['date']; ?>
</p>
<p><?php echo $this->_tpl_vars['e']['comment']; ?>
</p>
    <?php endforeach; endif; unset($_from); ?>
    </div>

   </form>