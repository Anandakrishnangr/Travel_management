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
  
  {literal}

<style type="text/css">
  
  u{
    padding: 10px;
    color: black;
    text-decoration: none;
  }

u:hover {
 /* background-color: black;
  color: white;*/
  text-decoration: none;
}

a{
    text-decoration: none;
  }


</style>

{/literal}
  
{literal}
<style type="text/css">
  a{
    text-decoration: none;
  }
</style>
{/literal}
</head>      
<body >
  
 
<section class="engine"></section><section class="features3 cid-rWC6tDaRqu" id="features3-c" style="background-image: url(web/images/1079103.jpg);background-repeat: no-repeat;background-attachment: fixed;">

<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">NEWS</div></center> 

<div class="container">
        <div class="media-container-row">
           {foreach from=$views4 item='vv1'}
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{$vv1.pathpic}" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u>{$vv1.likes}&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u>{foreach from=$viewx1 item='x1'} 
{if $vv1.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            {$vv1.head} <b style="text-transform: capitalize;">By {$vv1.username}{$vv1.aname}</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {$vv1.content}
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="blogview.php?k={$vv1.blogkey}" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            {/foreach}
           

            
    </div>


</div>


<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=news">View More</a></div><br><br><br><br>
<!--  -->
   <center><div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">TRAVEL BLOGS</div></center> 

    
    <div class="container">
  <div class="media-container-row">
           {foreach from=$views item='vv'} 
            <div class="card p-3 col-12 col-md-6 col-lg-4">     
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{$vv.pathpic}" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u>{$vv.likes}&nbsp;&nbsp;<u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u>{foreach from=$viewx1 item='x1'} 
{if $vv.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            {$vv.head} <b style="text-transform: capitalize;">By {$vv.username}{$vv.aname}</b>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {$vv.content}
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="blogview.php?k={$vv.blogkey}" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
              </div>{/foreach}
          
           

            
    </div>


</div>


<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=travel">View More</a></div><br><br><br><br>
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">TECH BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           {foreach from=$views1 item='vv1'}
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{$vv1.pathpic}" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u>{$vv1.likes}&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u>{foreach from=$viewx1 item='x1'} 
{if $vv1.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            {$vv1.head} <b style="text-transform: capitalize;">By {$vv1.username}{$vv1.aname}</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {$vv1.content}
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="blogview.php?k={$vv1.blogkey}" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            {/foreach}
           

            
    </div>


</div>


<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=tech">View More</a></div><br><br><br><br>

<!--  -->
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">FOOD BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           {foreach from=$views2 item='vv1'}
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{$vv1.pathpic}" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u>{$vv1.likes}&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u>{foreach from=$viewx1 item='x1'} 
{if $vv1.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            {$vv1.head} <b style="text-transform: capitalize;">By {$vv1.username}{$vv1.aname}</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {$vv1.content}
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="blogview.php?k={$vv1.blogkey}" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            {/foreach}
           

            
    </div>


</div>


<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=food">View More</a></div><br><br><br><br>

<!--  -->
<center>
<div style="background-color: skyblue;color: white;text-align: left;width: 70%;padding: 5px;font-size: 20px;padding-left: 10px;">CREATIVE BLOGS</div></center> 

<div class="container">
        <div class="media-container-row">
           {foreach from=$views3 item='vv1'}
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{$vv1.pathpic}" height="220px;" alt="Mobirise">
                    </div>
                    <div class="card-box"><u class="fa fa-heart fa-2x" ></u>{$vv1.likes}&nbsp;&nbsp;

                      <u style="margin-top: 3px;" class="fa fa-comment fa-2x" ></u>{foreach from=$viewx1 item='x1'} 
{if $vv1.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                      
                        <h4 style="margin-top: -16px;" class="card-title mbr-fonts-style display-7">
                            {$vv1.head} <b style="text-transform: capitalize;">By {$vv1.username}{$vv1.aname}</b>
                        </h4><i class="far fa-comment-alt"></i>
                        <p class="mbr-text mbr-fonts-style display-7">
                            {$vv1.content}
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="blogview.php?k={$vv1.blogkey}" class="btn btn-primary-outline display-4">
                            Read More
                        </a></div>
                </div>
            </div>
            {/foreach}
           

            
    </div>


</div>


<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="blogcatview.php?v=creative">View More</a></div><br><br><br><br>


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