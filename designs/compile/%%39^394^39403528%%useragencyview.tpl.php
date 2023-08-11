<?php /* Smarty version 2.6.26, created on 2020-11-12 08:51:24
         compiled from useragencyview.tpl */ ?>
<html>
  <head>
    <!--  -->

    <!--  -->
    <title>View Agency</title>
    <link rel="stylesheet" href="web/css/table1.css">
<?php echo '

<style type="text/css">
  
th{
  font-size: 14px;
}

</style>


'; ?>


  </head>
    <!-- <body style="background-image: url(web/images/worldty.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;font-size: 16px;" ><br><br><br> -->
    
  <!DOCTYPE html>
<html>
<head>
  <title></title>

    <meta charset="UTF-8"/>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/rate/css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="assets/rate/css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="assets/rate/css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="assets/rate/css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/rate/js/star-rating.js" type="text/javascript"></script>
    <script src="assets/rate/js/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="assets/rate/js/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="assets/rate/js/themes/krajee-uni/theme.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="https://kit.fontawsome.com/797356307c.js"></script>

</head>
<body>
<form method="POST" action=""  enctype="multipart/form-data">
    
      <input  type="hidden" name="hide" value="h">>
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
<br><br><br><br>
 <div class="site-section bg-light" style="min-height: 900px;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary" style="font-size: 60px;">Find Agency</span><br>

           

              <input type="text" name="searchag" style="width: 370px;background-color: white;height: 35px;padding: 5px;margin-top: 15px;" required>
              <input type="submit" value="Search" style="border: none;background-color: green;color: white;font-size: 15px;padding: 5px;width: 77px;height: 35px;">
          
          </div>
        </div>
<br>  
        <div class="row">
        
          <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>


           <?php if ($this->_tpl_vars['v']['errormsg']): ?><div style="width: 100%;"><center><h1 style="text-align: center;margin-right:  40%;margin-left:  40%;"><?php echo $this->_tpl_vars['v']['errormsg']; ?>
</h1></center></div><?php endif; ?>

               <?php if ($this->_tpl_vars['v']['aname']): ?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" style="background-color: rgba(0, 0, 0, 0.2);">
                <small><span style="font-size: 18px;text-transform: capitalize;"><?php echo $this->_tpl_vars['v']['aname']; ?>
 </span>&nbsp;<b style="color: blue;"></b></small><br>
                <small><!-- Packages:<?php echo $this->_tpl_vars['v']['pc']; ?>
 --><a style="text-decoration: none;" href="packagedetails.php?k=<?php echo $this->_tpl_vars['v']['pkey']; ?>
"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:<?php echo $this->_tpl_vars['v']['ph']; ?>
"><?php echo $this->_tpl_vars['v']['ph']; ?>
 </a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="<?php echo $this->_tpl_vars['v']['arating']; ?>
" data-size="sm" title=""><small ><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<?php echo $this->_tpl_vars['v']['aratecount']; ?>
</small></div>
                <div class="d-flex">
                  <div class="mr-auto">
               
                    <?php echo $this->_tpl_vars['v']['address']; ?>
 
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;" href="userpackageview.php?k=<?php echo $this->_tpl_vars['v']['loginid']; ?>
">Explore</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        <?php endif; ?> 
         <?php endforeach; endif; unset($_from); ?>
        
      

          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
    </div>


</table>


</form>

</body>
</html>
</html>