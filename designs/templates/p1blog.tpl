
<head>
  
  <link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="https://kit.fontawsome.com/797356307c.js"></script>
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
<body>

{foreach from=$view item="s"}

  <div class="site-wrap">

    


    
   
    
    

      <div class="intro-section site-blocks-cover innerpage" style="background-image: url('{$s.pathpic}');background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-8 mt-5" data-aos="fade-up">
            <h1 style="font-size: 4rem;font-weight: 300;color: #fff;">{$s.head}</h1>
            <p class="text-white text-center" style="font-size: 34px;">
              {$s.date} by <a href="#" style="text-decoration: none;text-transform: capitalize;">{$s.username}{$s.aname}</a>
            </p>
          </div>
        </div>
      </div>
    </div>
 


<input type="text"  id="myInput" class="akhide" style="border: hidden;color: white;height: 0px;width: 1px;">









    <section class="site-section" style="padding: 10px;">
            <div class="container">
              <div class="row">
                <div class="col-md-8 blog-content">
                  <p class="lead" style="font-size: 18px;min-height: 0;text-align: justify;">

{$s.content}

                <!--  <div class="pt-5">
                    <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                  </div>
      -->
        

                  
                    <!-- END comment-list -->

                 <!-- 

                    <div class="comment-form-wrap pt-5" style="padding-top: 1rem!important;">
                      <h3 class="mb-5"  style="font-size: 2.65rem;"   >Leave a comment</h3>
                      <form action="" name="myform" method="post" class="p-5 bg-light">
                        
      
                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn btn-primary">
                        </div>
      
                      </form>
                    </div>

                  </div>
      
                </div>
                <div class="col-md-4 sidebar">
                  <div class="sidebar-box">
                    
                  </div>
                  
                  <div class="sidebar-box">
                    <div class="categories">
                      <h3 class="text-black">Categories</h3>
{foreach from=$viea item="qe"}<li><a href="blogcatview.php?v={$qe.category}">{$qe.category} <span>{$qe.1}</span></a></li>{/foreach}
                    </div>
                  </div>
                  {foreach from=$view item="s"}
                  <div class="sidebar-box">
                    <img src="{$s.pathpicc}" style="height: 300px;width: 300px;" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-black">About The Author</h3>
                    <p>{$s.about}{$s.uabout}</p>
                  <p><a href="#" class="btn btn-primary btn-sm px-5 rounded-0">Read More</a></p> -->
                 <!--  </div>
        {/foreach}
                  <div class="sidebar-box">
                    <h3 class="text-black"></h3>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
 --> 
      </section><!-- <h1>{$s.status}</h1> -->
      <center>{if $s.status==1}
        <a   class="button2"  style="text-decoration: none;display: inline-block;background-color: red;color: white;height: 50px;width: 150px;padding: 15px;text-align: center;border-radius: 20px;" href="blogreject.php?g={$s.blogkey}">Reject</a>

 {else}
  <a  class="button1" style="text-decoration: none;display: inline-block;background-color: green;color: white;height: 50px;width: 150px;padding: 15px;text-align: center;border-radius: 20px;"   href="blogapprove.php?f={$s.blogkey}">Approve</a>
 
</center>
{/if}
   {/foreach}
   <br><br>