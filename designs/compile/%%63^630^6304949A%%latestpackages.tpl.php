<?php /* Smarty version 2.6.26, created on 2020-04-22 09:58:02
         compiled from latestpackages.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action=""  enctype="multipart/form-data">
<!--<table border="3">
	<tr><th>Package Name</th><th>Package Type</th>
		<th>Package Amount</th><th>Details</th></tr>

<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>

<tr><td><?php echo $this->_tpl_vars['v']['packagename']; ?>
</td><td><?php echo $this->_tpl_vars['v']['packagetype']; ?>
</td><td><?php echo $this->_tpl_vars['v']['packageamount']; ?>
</td><td><?php echo $this->_tpl_vars['v']['packagedetails']; ?>
</td></tr>

	<?php endforeach; endif; unset($_from); ?>
 

-->
<br><br><br><br><br><br>
 <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Destination</span>
            <h3 class="heading-92913 text-black text-center">Our Destinations</h3>
          </div>
        </div>
        <div class="row">
          <?php $_from = $this->_tpl_vars['vie1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
" alt="Image" class="img-fluid">
              <div class="p-4">
              	<h3><span ></span><?php echo $this->_tpl_vars['v']['packagename']; ?>
 </h3>
                <h3><a href="packagedetails.php?k=<?php echo $this->_tpl_vars['v']['pkey']; ?>
"><span class="icon-room mr-1 text-primary"></span> <?php echo $this->_tpl_vars['v']['start']; ?>
 &mdash; <?php echo $this->_tpl_vars['v']['destination']; ?>
</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    <?php echo $this->_tpl_vars['v']['days']; ?>
 days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;" href="packagedetails.php?k=<?php echo $this->_tpl_vars['v']['pkey']; ?>
">$<?php echo $this->_tpl_vars['v']['packageamount']; ?>
</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
          

         <?php endforeach; endif; unset($_from); ?>
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
    </div>


</table>


</form>

</body>
</html>