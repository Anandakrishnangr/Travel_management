<!DOCTYPE html>
<html lang="en">
{foreach from=$view item="s"}
<head>
  <meta charset="utf-8">
  <title>Welcome {$s.username}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="web/custom1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="web/custom1/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="web/custom1/lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="web/custom1/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

  <script src="web/custom1/lib/jquery/jquery.min.js"></script>
  <script src="web/custom1/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="web/custom1/lib/superfish/hoverIntent.js"></script>
  <script src="web/custom1/lib/superfish/superfish.min.js"></script>
  <script src="web/custom1/lib/morphext/morphext.min.js"></script>
  <script src="web/custom1/lib/wow/wow.min.js"></script>
  <script src="web/custom1/lib/stickyjs/sticky.js"></script>
  <script src="web/custom1/lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="web/custom1/js/custom.js"></script>

  <script src="web/custom1/contactform/contactform.js"></script>


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
  {literal}<style type="text/css">
    .circle {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  font-size: 13px;
  color: #fff;
  line-height: 14px;
  text-align: center;
  background: red;
}

  
  a{
    text-decoration: none;
  }
.noclick{
  color: white;
}

</style>




{/literal}
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="web/custom1/img/logo.png" alt="Imperial">
        </div>

        <h1>Welcome to Imperial Holidays</h1>
        <h2>We create <span class="rotating">beautiful trips, best package, all around the world</span></h2>
        <div class="actions">
          <a href="#nav-menu-container" class="btn-get-started">Get Strated</a>
         <!--  <a href="#services" class="btn-services">Our Services</a> -->
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="web/custom1/img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#">Home</a></li>
            <li ><a href="aboutus.php">About us</a></li>
            <li style="white-space: nowrap;"><a href="notifications.php" >Notification{foreach from=$not item="ar"}<div class="circle" style="float: left;">{$ar}</div>{/foreach}</a></li>
          <li class="menu-has-children"><a class="noclick" style="color: white;" >Blogs</a>
            <ul>
              <li><a href="blogupload.php">New blog</a></li>
              <li><a href="bloguserview.php">My Blogs</a></li>
        <!-- <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>  
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>  

             
              <li><a href="#">Budget Friendly</a></li>
              -->
              <li><a href="bloggridview.php">Blogs </a></li>
            </ul>
         </li>
          

  <li class="menu-has-children"><a style="display: block;color: white;" ><i class="fa fa-search fa-2x" style="float: left;" aria-hidden="true"></i>&nbsp;Find</a>
            <ul>
               
            <li class="menu-has-children"><a class="noclick">Agency</a>
                <ul>
                  <li><a href="useragencyview.php">Find Nearest</a></li>
              <li><a href="topratedagency.php">Top Rated </a></li>
              <li><a href="budgetfriendlyagency.php">Budget Friendly</a></li>
              <li><a href="premiumagency.php">Premium</a></li>
              <li><a href="imperialpickagency.php">Imperial's Pick</a></li>
                  
                </ul>
            </li>  

             <li class="menu-has-children"><a href="">Holiday Packages</a>
            <ul>
              <li><a href="latestpackages.php">Latest Packages</a></li>
               <li><a href="holidaypackages.php">Holiday Packages</a></li>           
              <li><a href="honeymoonpackages.php">Honeymoon Packages</a></li>
        <!-- <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>  
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
            </li>  
-->
             
              <li><a href="familypackage.php">Family Packages</a></li>
               <li><a href="cruisepackages.php">Cruise Packages</a></li>
              <li><a href="luxarypackages.php">Luxury Packages</a></li>
               <li><a href="adventurepackages.php">Adventure Packages</a></li>
               <li><a href="imperialpickpacks.php">Imperial's Pick</a></li>
            </ul>
         </li>
             
              

           </ul>
          </li>


          <li><a href="startchat.php">Chat</a></li>
         <li><a href="userbookingview.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true" style="float: left;"></i>&nbsp; Cart</a></li>
         

          <li class="menu-has-children"><a style="color: white;"><font style="font-style: bold;text-transform: capitalize;">{$s.username}</font></a>
            <ul>
               <li><a href="update.php">Update Profile</a></li>
            <li class="menu-has-children"><a style="color: black;">Complaints</a>
                <ul>
                  <li><a href="complaint.php">Register Complaint</a></li>
              <li><a href="usercomplaintview.php">View Complaints</a></li>
                  
                </ul>
            </li>  

             
              <li><a href="paymentinfo.php">Payment Informations</a></li>
                <li><a href="feedback.php">Feed Back</a></li>
                  <li><a href="aboutus.php#contact">Contact Us</a></li>
              <li><a href="logout.php">Logout</a></li>
           </ul>
          </li>
         
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>



      
     

      
    
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('web/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 ml-auto text-right" data-aos="fade-up">
              <h1>Explore, Discover The Nature</h1>
              <p>Explore and Discover the beauty of Nature.You will find beauty everywhere. "Nature always wears the colors of the spirit".</p>
              <p><a href="adventurepackages.php" class="btn btn-primary py-3 px-5">Explore</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('web/images/hero_2.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1>Enjoy The Ocean With Your Family</h1>
              <p>Explore the oceans with your family.We have a large number of packages for you.</p>
              <p><a href="cruisepackages.php" class="btn btn-primary py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>{/foreach}
    <!-- END slider -->