<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">

<br><br><br><br><br><br>
 <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary">Blogs</span>
            <h3 class="heading-92913 text-black text-center">Our Blogs</h3>
          </div>
        </div>
        <div class="row">
          {foreach from=$view item="b"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$b.pathpic}"  alt="Image" class="img-fluid">
              <div class="p-4">
              	<h3><span ></span>{$b.place} </h3>
                <h3><span class="icon-room mr-1 text-primary"></span> Croatia &mdash; Columbia</a></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    {$b.date}
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;" href="blogview.php?k={$b.blogkey}">view more</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
          

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
    </div>


</table>


</form>

</body>
</html>