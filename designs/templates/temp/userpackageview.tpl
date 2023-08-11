<!DOCTYPE html>
<html>
<head>
	<title></title>


</head>
<body>
<form method="POST" action=""  enctype="multipart/form-data">
<!--<table border="3">
	<tr><th>Package Name</th><th>Package Type</th>
		<th>Package Amount</th><th>Details</th></tr>

{foreach from=$view item="v"}

<tr><td>{$v.packagename}</td><td>{$v.packagetype}</td><td>{$v.packageamount}</td><td>{$v.packagedetails}</td></tr>

	{/foreach}


-->
<br><br><br><br>
 <div class="site-section bg-light" style="min-height: 900px;">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary" style="font-size: 60px;">Destinations</span>
            <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-6 col-lg-4 mb-4">
            {foreach from=$view item="v"}
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image" style="height: 220px;width: 100%;min-height: 160px;" class="img-fluid">
              <div class="p-4">
              	<h3><span ></span>{$v.packagename} </h3>
                <h3><a href="packagedetails.php?k={$v.pkey}" style="text-decoration: none;"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a><div style="pointer-events:none;"><input type="text" style="pointer-events:none;" class="rating rating-loading" value="4.3" data-size="sm" title=""></div></h3>
                <div class="d-flex">
                  <div class="mr-auto">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
               {/foreach}
            </div>
          </div>
         
            
            
     

        


    </form>
</div>

        
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
    </div>


</table>


</form>

</body>
</html>