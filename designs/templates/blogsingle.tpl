
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
 

    <div class="container" style="margin-top: 10px;">
        {foreach from=$viewe1 item="ee"} 

 {foreach from=$vie item="eq"} 
{if $eq==1}
<a  href="unlike.php?k={$s.blogkey}">
<u class="fa fa-heart fa-3x" style="color: red;"></u>
    </a>{$ee.likes}
   
    {else if $eq==-1}
    
      <a href="like.php?k={$s.blogkey}">
<u class="fa fa-heart fa-3x" ></u>
    </a>{$ee.likes}
{/if}

{/foreach}
{/foreach}
{foreach from=$viewe11 item="eee"} 
<a href="#comment" onclick="document.myform.comment.focus();"><u class="fa fa-comment fa-3x" ></u></a>{$eee}
{/foreach}



<a onclick="share()"><u class="fa fa-share fa-3x" ></u></a>

</div>

<input type="text"  id="myInput" class="akhide" style="border: hidden;color: white;height: 0px;width: 1px;">
{literal}


<script type="text/javascript">
  
function share() {
document.getElementById('myInput').value = window.location.href;
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the link to clipboard: " + copyText.value);
}

</script>


<!--  -->

<!-- 
<input type="hidden" value="Hello World" id="myInput">
<button onclick="myFunction()">Copy text</button>
<a onclick="myFunction()">ll</a>
<p>The document.execCommand() method is not supported in IE8 and earlier.</p>

<script>


function myFunction() {
document.getElementById('myInput').value = window.location.href;
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
 -->
<!--  -->

{/literal}








    <section class="site-section" style="padding: 10px;">
            <div class="container">
              <div class="row">
                <div class="col-md-8 blog-content">
                  <p class="lead" style="font-size: 18px;">

{$s.content}

                <!--  <div class="pt-5">
                    <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                  </div>
      -->
           {/foreach}

                  <div class="pt-5" id="comment" style="    padding-top: 1rem!important;background-color: #eaeaea;;padding: 30px;">
                    <h3 class="mb-5"  style="font-size: 2.65rem;"   >{foreach from=$viewe11 item="eee"} Comments({$eee}){/foreach}</h3>
   {foreach from=$view1 item="e"}                 <ul class="comment-list">
                      <li class="comment" style="background-color: #bebdbd1c;padding: 5px;" >
                        <div class="vcard bio">
                          {if $e.name==Admin}
                          <img src="{$e.pathpiccc}" style="height: 40px;width: 60px;margin-top: 20px;" alt="Image placeholder">
                          
                          {else}
                          <img src="{$e.pathpiccc}" style="margin-top: 15px;" alt="Image placeholder">
                          {/if}
                        </div>
                        <div class="comment-body">
                          <h3 style="text-transform: capitalize;">{$e.name}</h3>
                          <div class="meta">at {$e.cdate} </div>
                          <p>{$e.comment}</p>
                          
                        </div>
                      </li>
      
                      
                          
      {/foreach}
                      
                    <!-- END comment-list -->

                 

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
                    <!-- <p><a href="#" class="btn btn-primary btn-sm px-5 rounded-0">Read More</a></p> -->
                  </div>
        {/foreach}
                  <div class="sidebar-box">
                    <h3 class="text-black"></h3>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>

    
   
