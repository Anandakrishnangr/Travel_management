<?php /* Smarty version 2.6.26, created on 2020-04-22 13:58:00
         compiled from blogcat.tpl */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="web/fonts/icomoon/style.css">

  <link rel="stylesheet" href="web/css/bootstrap.min.css">
  <link rel="stylesheet" href="web/css/jquery-ui.css">
  <link rel="stylesheet" href="web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="web/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="web/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="web/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="web/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="web/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="web/css/aos.css">
  <link href="web/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="web/css/style.css">


  <?php echo '

<style type="text/css">
  
  u{
    padding: 10px;
    color: black;
    text-decoration: none;
  }

u:hover {
  background-color: black;
  color: white;
  text-decoration: none;
}




</style>

'; ?>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  
    
    

      <div class="intro-section" style="background-image: url('web/images/<?php echo $this->_tpl_vars['cat']; ?>
.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1  style="text-transform: capitalize;"><?php echo $this->_tpl_vars['cat']; ?>
 Blog Posts</h1>
          <!-- <?php if ($this->_tpl_vars['cat'] == 'travel'): ?>    
              <p>We travel not to escape life but for life not to escape us.</p>
          <?php elseif ($this->_tpl_vars['cat'] == tech): ?>
              <p>It has become appallingly obvious that our technology has exceeded our humanity.</p>
              <?php endif; ?>
          <?php if ($this->_tpl_vars['cat'] == 'food'): ?>
              <p>Cooking is like love.</p>
          <?php elseif ($this->_tpl_vars['cat'] == creative): ?>
              <p>Creativity doesn't wait for that perfect moment.</p>
              <?php endif; ?>
          <?php if ($this->_tpl_vars['cat'] == news): ?>
              <p>It is the merit of a general to impart good news, and to conceal the truth. Sophocles Good Truth Good News General.</p>
          <?php elseif ($this->_tpl_vars['cat'] == adventure): ?>
              <p>Life is an adventure and that is best lived boldly..</p>
              <?php endif; ?> -->
            </div>
          </div>
        </div>  
      </div>

  


    <div class="site-section" style="background-image: url(web/images/<?php echo $this->_tpl_vars['cat']; ?>
x1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <div class="container">
            <div class="row">
             
                  <?php $_from = $this->_tpl_vars['viewcat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>

                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4" >
                    <div class="blog-entry" style="background-color: #ffffff;padding: 5px;">
                    <a href="blogview.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
" class="img-link">
                        <img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" style="height: 212px;width: 100%;" alt="Image" class="img-fluid">
                    </a>
                    <div  style="margin-top: -35px;">
                    <u class="fa fa-heart fa-1x" ></u><?php echo $this->_tpl_vars['b']['likes']; ?>


                      <u style="margin-top: 3px;" class="fa fa-comment fa-1x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['b']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
</div>
                    <div class="blog-entry-contents">
                        <h3 style="min-height: 64px;"><a href="blogview.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
"><?php echo $this->_tpl_vars['b']['head']; ?>
</a></h3>
                        <div class="meta"  style="font-size: 16px;">Posted by <a href=""  style="text-transform: capitalize;"><?php echo $this->_tpl_vars['b']['username']; ?>
<?php echo $this->_tpl_vars['b']['aname']; ?>
</a><!-- In <a href="">News</a>--></div>
                    </div>
                    </div>
                </div>
               
                    <?php endforeach; endif; unset($_from); ?>

           
            </div>
        </div>
    </div>



     <div class="site-section">
        <div class="container">
            <div class="row">
             
                  <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>

                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry" style="background-color: #b2a7a770;padding: 5px;">
                    <a href="blogview.php?k=<?php echo $this->_tpl_vars['c']['blogkey']; ?>
" class="img-link">
                        <img src="<?php echo $this->_tpl_vars['c']['pathpic']; ?>
" style="height: 212px;width: 100%;" alt="Image" class="img-fluid">
                    </a>

                    <div  style="margin-top: -35px;">
                      <u class="fa fa-heart fa-1x" ></u><?php echo $this->_tpl_vars['c']['likes']; ?>


                      <u style="margin-top: 3px;" class="fa fa-comment fa-1x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['c']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                    </div>
                    <div class="blog-entry-contents">
                        <h3 style="min-height: 64px;"><a   href="blogview.php?k=<?php echo $this->_tpl_vars['c']['blogkey']; ?>
"><?php echo $this->_tpl_vars['c']['head']; ?>
</a></h3>
                        <div class="meta"  style="font-size: 16px;">Posted by <a href="" style="text-transform: capitalize;"><?php echo $this->_tpl_vars['c']['aname']; ?>
</a><!-- In <a href="">News</a>--></div>
                    </div>
                    </div>
                </div>
               
                    <?php endforeach; endif; unset($_from); ?>

           
            </div>
        </div>
    </div>

    
    


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="web/js/jquery-3.3.1.min.js"></script>
  <script src="web/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="web/js/jquery-ui.js"></script>
  <script src="web/js/popper.min.js"></script>
  <script src="web/js/bootstrap.min.js"></script>
  <script src="web/js/owl.carousel.min.js"></script>
  <script src="web/js/jquery.stellar.min.js"></script>
  <script src="web/js/jquery.countdown.min.js"></script>
  <script src="web/js/bootstrap-datepicker.min.js"></script>
  <script src="web/js/jquery.easing.1.3.js"></script>
  <script src="web/js/aos.js"></script>
  <script src="web/js/jquery.fancybox.min.js"></script>
  <script src="web/js/jquery.sticky.js"></script>
  <script src="web/js/jquery.mb.YTPlayer.min.js"></script>




  <script src="web/js/main.js"></script>

</body>

</html>