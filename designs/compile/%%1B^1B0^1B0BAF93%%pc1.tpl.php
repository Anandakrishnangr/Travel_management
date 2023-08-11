<?php /* Smarty version 2.6.26, created on 2020-09-17 19:19:33
         compiled from pc1.tpl */ ?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  
  
 
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
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

a{
    text-decoration: none;
  }


</style>

'; ?>

  
<?php echo '
<style type="text/css">
  a{
    text-decoration: none;
  }
</style>
'; ?>

</head>      
<body >
  
 
<section class="engine"></section><section class="features3 cid-rWC6tDaRqu" id="features3-c" style="background-image: url(web/images/1079103.jpg);background-repeat: no-repeat;background-attachment: fixed;">

<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">NEWS</div></center> 

<div class="container">
        <div class="media-container-row">
           <?php $_from = $this->_tpl_vars['views4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv1']):
?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo $this->_tpl_vars['vv1']['pathpic']; ?>
" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u><?php echo $this->_tpl_vars['vv1']['likes']; ?>
&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['vv1']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['head']; ?>
 <b style="text-transform: capitalize;">By <?php echo $this->_tpl_vars['vv1']['username']; ?>
<?php echo $this->_tpl_vars['vv1']['aname']; ?>
</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['content']; ?>

                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a  onclick="log()" href="blogview.php?k=<?php echo $this->_tpl_vars['vv1']['blogkey']; ?>
" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
           

            
    </div>


</div>


<div ><a  onclick="log()" style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=news">View More</a></div><br><br><br><br>
<!--  -->
   <center><div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">TRAVEL BLOGS</div></center> 

    
    <div class="container">
  <div class="media-container-row">
           <?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv']):
?> 
            <div class="card p-3 col-12 col-md-6 col-lg-4">     
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo $this->_tpl_vars['vv']['pathpic']; ?>
" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u><?php echo $this->_tpl_vars['vv']['likes']; ?>
&nbsp;&nbsp;<u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['vv']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv']['head']; ?>
 <b style="text-transform: capitalize;">By <?php echo $this->_tpl_vars['vv']['username']; ?>
<?php echo $this->_tpl_vars['vv']['aname']; ?>
</b>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv']['content']; ?>

                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a onclick="log()" href="blogview.php?k=<?php echo $this->_tpl_vars['vv']['blogkey']; ?>
" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
              </div><?php endforeach; endif; unset($_from); ?>
          
           

            
    </div>


</div>


<div ><a onclick="log()" style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=travel">View More</a></div><br><br><br><br>
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">TECH BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           <?php $_from = $this->_tpl_vars['views1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv1']):
?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo $this->_tpl_vars['vv1']['pathpic']; ?>
" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u><?php echo $this->_tpl_vars['vv1']['likes']; ?>
&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['vv1']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['head']; ?>
 <b style="text-transform: capitalize;">By <?php echo $this->_tpl_vars['vv1']['username']; ?>
<?php echo $this->_tpl_vars['vv1']['aname']; ?>
</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['content']; ?>

                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a onclick="log()" href="blogview.php?k=<?php echo $this->_tpl_vars['vv1']['blogkey']; ?>
" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
           

            
    </div>


</div>


<div ><a onclick="log()" style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=tech">View More</a></div><br><br><br><br>

<!--  -->
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">FOOD BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           <?php $_from = $this->_tpl_vars['views2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv1']):
?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo $this->_tpl_vars['vv1']['pathpic']; ?>
" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u><?php echo $this->_tpl_vars['vv1']['likes']; ?>
&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['vv1']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['head']; ?>
 <b style="text-transform: capitalize;">By <?php echo $this->_tpl_vars['vv1']['username']; ?>
<?php echo $this->_tpl_vars['vv1']['aname']; ?>
</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['content']; ?>

                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a onclick="log()" href="blogview.php?k=<?php echo $this->_tpl_vars['vv1']['blogkey']; ?>
" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
           

            
    </div>


</div>


<div ><a onclick="log()" style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=food">View More</a></div><br><br><br><br>

<!--  -->
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">CREATIVE BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           <?php $_from = $this->_tpl_vars['views3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vv1']):
?>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo $this->_tpl_vars['vv1']['pathpic']; ?>
" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u><?php echo $this->_tpl_vars['vv1']['likes']; ?>
&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u><?php $_from = $this->_tpl_vars['viewx1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['x1']):
?> 
<?php if ($this->_tpl_vars['vv1']['0'] == $this->_tpl_vars['x1']['0']): ?><?php echo $this->_tpl_vars['x1']['1']; ?>
<?php endif; ?>
                      <?php endforeach; endif; unset($_from); ?>
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['head']; ?>
 <b style="text-transform: capitalize;">By <?php echo $this->_tpl_vars['vv1']['username']; ?>
<?php echo $this->_tpl_vars['vv1']['aname']; ?>
</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $this->_tpl_vars['vv1']['content']; ?>

                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a onclick="log()" href="blogview.php?k=<?php echo $this->_tpl_vars['vv1']['blogkey']; ?>
" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
           

            
    </div>


</div>


<div ><a onclick="log()" style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=creative">View More</a></div><br><br><br><br>


</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>