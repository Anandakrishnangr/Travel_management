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


  {literal}

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

{/literal}

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  
    
    

      <div class="intro-section" style="background-image: url('web/images/{$cat}.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
              <h1  style="text-transform: capitalize;">{$cat} Blog Posts</h1>
          <!-- {if $cat=='travel'}    
              <p>We travel not to escape life but for life not to escape us.</p>
          {elseif $cat==tech}
              <p>It has become appallingly obvious that our technology has exceeded our humanity.</p>
              {/if}
          {if $cat=='food'}
              <p>Cooking is like love.</p>
          {elseif $cat==creative}
              <p>Creativity doesn't wait for that perfect moment.</p>
              {/if}
          {if $cat==news}
              <p>It is the merit of a general to impart good news, and to conceal the truth. Sophocles Good Truth Good News General.</p>
          {elseif $cat==adventure}
              <p>Life is an adventure and that is best lived boldly..</p>
              {/if} -->
            </div>
          </div>
        </div>  
      </div>

  


    <div class="site-section" style="background-image: url(web/images/{$cat}x1.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
        <div class="container">
            <div class="row">
             
                  {foreach from=$viewcat item="b"}

                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4" >
                    <div class="blog-entry" style="background-color: #ffffff;padding: 5px;">
                    <a href="blogview.php?k={$b.blogkey}" class="img-link">
                        <img src="{$b.pathpic}" style="height: 212px;width: 100%;" alt="Image" class="img-fluid">
                    </a>
                    <div  style="margin-top: -35px;">
                    <u class="fa fa-heart fa-1x" ></u>{$b.likes}

                      <u style="margin-top: 3px;" class="fa fa-comment fa-1x" ></u>{foreach from=$viewx1 item='x1'} 
{if $b.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
</div>
                    <div class="blog-entry-contents">
                        <h3 style="min-height: 64px;"><a href="blogview.php?k={$b.blogkey}">{$b.head}</a></h3>
                        <div class="meta"  style="font-size: 16px;">Posted by <a href=""  style="text-transform: capitalize;">{$b.username}{$b.aname}</a><!-- In <a href="">News</a>--></div>
                    </div>
                    </div>
                </div>
               
                    {/foreach}

           
            </div>
        </div>
    </div>



     <div class="site-section">
        <div class="container">
            <div class="row">
             
                  {foreach from=$view1 item="c"}

                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="blog-entry" style="background-color: #b2a7a770;padding: 5px;">
                    <a href="blogview.php?k={$c.blogkey}" class="img-link">
                        <img src="{$c.pathpic}" style="height: 212px;width: 100%;" alt="Image" class="img-fluid">
                    </a>

                    <div  style="margin-top: -35px;">
                      <u class="fa fa-heart fa-1x" ></u>{$c.likes}

                      <u style="margin-top: 3px;" class="fa fa-comment fa-1x" ></u>{foreach from=$viewx1 item='x1'} 
{if $c.0==$x1.0}{$x1.1}{/if}
                      {/foreach}
                    </div>
                    <div class="blog-entry-contents">
                        <h3 style="min-height: 64px;"><a   href="blogview.php?k={$c.blogkey}">{$c.head}</a></h3>
                        <div class="meta"  style="font-size: 16px;">Posted by <a href="" style="text-transform: capitalize;">{$c.aname}</a><!-- In <a href="">News</a>--></div>
                    </div>
                    </div>
                </div>
               
                    {/foreach}

           
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