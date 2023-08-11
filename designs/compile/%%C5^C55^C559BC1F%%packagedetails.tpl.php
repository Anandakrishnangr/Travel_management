<?php /* Smarty version 2.6.26, created on 2020-11-03 02:43:18
         compiled from packagedetails.tpl */ ?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="https://kit.fontawsome.com/797356307c.js"></script>



<!--  -->

  <link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="https://kit.fontawsome.com/797356307c.js"></script>

    <meta charset="UTF-8"/>
    <title>Package</title>
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
<!--  -->
<?php echo '
  <style type="text/css">
    .ajmain{
      padding: 10px;
      max-width: 70%;
      
      color: black;
      background-color: #e8e5e5;
      text-align: center;
      margin-bottom: 5px;
      border-radius: 4px;
      


    }

.ajhead{
  width: 79%;
  padding: 5px;
  height: 72px;
  border: 2px solid black;
  border-color: white;
  border-radius: 13px;
  background-color:white;



}

.ajimg{
    width: 60px;
    height: 60px;
    float: left;
    border-radius: 15px;
  }

.ajname{
  
  font-size: 23px;
  color: black;
  float: left;
  padding: 3px;
  font-weight: 300px;
  text-transform: capitalize;
}

.ajcont{
  width: 79%;
  padding: 10px;
  
  min-height: 200px;
  
  text-align: left;
  background-color: white;
  border-radius: 13px;
}

.ajside{
  width: 20.5%;
  
  float: right;
  height: 272px;
  padding: 5px;
  padding-top: 4%;
  overflow: hidden;
}

.ajp{
  padding: 0px;
  line-height: 1.5;
}
  </style>
  '; ?>

</head>



<body>

<br><br><br><br>
<form method="POST" action=""  enctype="multipart/form-data">
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h3  style="font-size: 38px;font-family: sans-serif;"><?php echo $this->_tpl_vars['v']['packagename']; ?>
  </h3>
            <hr  width="100%" style="margin: 4px;">
            <span class="text-serif text-primary"><font size="6px">About Packages</font></span><br>
            <?php echo $this->_tpl_vars['v']['packagetype']; ?>
<br>
            <i class="fa fa-map-marker fa-2x" style="padding:10px;pointer-events:none;display: inline-block;" aria-hidden="true"></i><span  style="font-size:20px;text-transform: capitalize;">&nbsp;<?php echo $this->_tpl_vars['v']['start']; ?>
&mdash;<?php echo $this->_tpl_vars['v']['destination']; ?>
</span>
            <i class="fa fa-calendar fa-2x" style="padding:10px;display: inline-block;pointer-events:none;" aria-hidden="true"></i><span style="font-size: 20px;"><?php echo $this->_tpl_vars['v']['days']; ?>
 Days</span><br>
            <i class="fa fa-user fa-2x" style="padding:10px;display: inline-block;pointer-events:none;" aria-hidden="true"></i><span style="font-size: 20px;"><?php echo $this->_tpl_vars['v']['noc']; ?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-inr fa-2x" style="padding:10px;display: inline-block;pointer-events:none;" aria-hidden="true"></i><span style="font-size: 20px;"><?php echo $this->_tpl_vars['v']['packageamount']; ?>
</span><div style="pointer-events:none;width: 250px;"><input type="text" style="width: 200px;" class="rating rating-loading" value="<?php echo $this->_tpl_vars['v']['rating']; ?>
" data-size="sm" title=""><small style="float: right;margin-top: -25px;"><i class="fa fa-users" style="font-size: 15px;" aria-hidden="true"></i>&nbsp;<?php echo $this->_tpl_vars['v']['ratecount']; ?>
</small></div>
            <p><?php echo $this->_tpl_vars['v']['packagedetails']; ?>
</p>
            <p style="float: right;"><a href="booking.php?k=<?php echo $this->_tpl_vars['v']['pkey']; ?>
" class="btn btn-primary py-3 px-4">Book Now</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
    </div>
  
<br><br><br><br><br><br><br><br>

  <form method="POST" action=""  enctype="multipart/form-data" style="margin-top: 50px;min-height: 100%;">
    <center>
<?php if ($this->_tpl_vars['views']): ?><div style="color: white;font-size: 28px;display: block;background-color: skyblue;font-family: serif;width: 70%;text-align: left;padding-left: 10px;text-shadow: 2px 2px #000000;">Customer Reviews</div></center>
<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ss']):
?>
<center>

<div  class="ajmain">
  <div class="ajside">
Agency Rating 

      <center>
        <div style="pointer-events:none;width: 250px;margin-left: -40px;">
          <input type="text"  class="rating rating-loading" value="<?php echo $this->_tpl_vars['ss']['arating']; ?>
" data-size="sm" title="">
        </div>
      </center>
  <br>
Package Rating  

    <center>
      <div style="pointer-events:none;width: 250px;margin-left: -40px;">
        <input type="text"  class="rating rating-loading" value="<?php echo $this->_tpl_vars['ss']['rating']; ?>
" data-size="sm" title="">
      </div>
    </center>

  </div>

<div class="ajhead">
    <img  src="<?php echo $this->_tpl_vars['ss']['pathpic']; ?>
" class="ajimg">
    <span class="ajname"><?php echo $this->_tpl_vars['ss']['username']; ?>
</span> <br><br><br>
    <i class="fa fa-calendar" style="float: left;padding: 3px;margin-top: -19px;">&nbsp;<?php echo $this->_tpl_vars['ss']['rdate']; ?>
</i>
</div>


  <div class="ajcont">
<p  class="ajp">

<?php echo $this->_tpl_vars['ss']['review']; ?>

<!-- review -->



</p>
  </div>
</div>



</center>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
  </form></body>