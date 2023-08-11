<?php /* Smarty version 2.6.26, created on 2020-02-19 15:49:54
         compiled from bloggridview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">

<br><br><br><br><br><br>
 <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Blogs</span>
            <h3 class="heading-92913 text-black text-center">Our Blogs</h3>
          </div>
        </div>
        <div class="row">
          <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
"  alt="Image" class="img-fluid">
              <div class="p-4">
              	<h3><span ></span><?php echo $this->_tpl_vars['b']['place']; ?>
 </h3>
                <h3><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    <?php echo $this->_tpl_vars['b']['date']; ?>

                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;" href="blogview.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
">view more</a></span>
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