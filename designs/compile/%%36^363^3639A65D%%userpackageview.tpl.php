<?php /* Smarty version 2.6.26, created on 2020-11-03 03:15:58
         compiled from userpackageview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

    <meta charset="UTF-8"/>
    <title>Krajee JQuery Plugins - &copy; Kartik</title>
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
            <span class="text-serif text-primary" style="font-size: 60px;">Destination</span>
            <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3>
          </div>
        </div>
        <div class="row">
          <?php $_from = $this->_tpl_vars['viewxe1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
              	<small><span style="font-size: 18px;"><?php echo $this->_tpl_vars['v']['packagename']; ?>
 </span>&nbsp;<b style="color: blue;">From <?php echo $this->_tpl_vars['v']['aname']; ?>
</b></small><br>
                <small><a style="text-decoration: none;" href="packagedetails.php?k=<?php echo $this->_tpl_vars['v']['pkey']; ?>
"><span class="icon-room mr-1 text-primary"></span> <?php echo $this->_tpl_vars['v']['start']; ?>
 &mdash; <?php echo $this->_tpl_vars['v']['destination']; ?>
</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="<?php echo $this->_tpl_vars['v']['rating']; ?>
" data-size="sm" title=""><small ><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<?php echo $this->_tpl_vars['v']['ratecount']; ?>
</small></div>
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