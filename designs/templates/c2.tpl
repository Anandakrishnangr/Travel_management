<!DOCTYPE html>
<html>
<head>
	<title></title>

    <meta charset="UTF-8"/>
    
   <!--  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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

{literal}
<style type="text/css">
  a{
    text-decoration: none;
  }
</style>
{/literal}

</head>
<body  >

<form method="POST" action=""  enctype="multipart/form-data" style="width: 100%;">
<!--<table border="3">
	<tr><th>Package Name</th><th>Package Type</th>
		<th>Package Amount</th><th>Details</th></tr>

{foreach from=$view item="v"}

<tr><td>{$v.packagename}</td><td>{$v.packagetype}</td><td>{$v.packageamount}</td><td>{$v.packagedetails}</td></tr>

	{/foreach}


-->



<div style="height: 900px;background-image: url(web/images/s.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
      <div class="container"  >
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary" style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">LATEST PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe1 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
              	<small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>

<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="latestpackages.php?v=news">View More</a></div>

</div>
<!--  -->

<div style="height: 960px;background-image: url(web/images/palm-tree-sand-beach-sunny-day-beach.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
 <div class="container" style="height: 900px;">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary"  style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">HOLIDAY PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe2 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
                <small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>

<a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="holidaypackages.php">View More</a>
</div>


<!--  -->

<div style="height: 960px;background-image: url(web/images/504c257321d5a7985baac8d4c74e7fcc.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

 
 <div class="container" style="height: 900px;">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary"  style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">ADVENTURE PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe3 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
                <small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="adventurepackages.php">View More</a></div>
</div>
<!--  -->

<div style="height: 960px;background-image: url(web/images/sea-290025.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
 <div class="container" style="height: 900px;">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary"  style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">CRUISE PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe4 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
                <small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="cruisepackages.php">View More</a></div>
</div>
<!--  -->

<div style="height: 960px;background-image: url(web/images/83-838265_family-time-4k-wallpapers-silhouette-family-fishing-fishing.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<div class="container" style="height: 900px;">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary"  style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">FAMILY PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe5 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
                <small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="familypackage.php">View More</a></div>
</div>
<!--  -->


<div style="height: 960px;background-image: url(web/images/774030.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
 <div class="container" style="height: 900px;">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <span class="text-serif text-primary"  style="font-size: 30px;background-color: rgba(0, 0, 0, 0.5);padding: 5px;">LUXURY PACKAGES</span>
            <!-- <h3 class="heading-92913 text-black text-center" style="font-size: 28px;">Our Destinations</h3> -->
          </div>
        </div>
        <div class="row">
          {foreach from=$viewxe6 item="v"}
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="service-39381">
              <img src="{$v.pathpic}" alt="Image"   style="height: 220px;width: 100%;min-height: 160px;"   class="img-fluid">
              <div class="p-4" >
                <small><span style="font-size: 18px;">{$v.packagename} </span>&nbsp;<b style="color: blue;font-size: 12px;">From {$v.aname}</b></small><br>
                <small><a style="text-decoration: none;font-size: 12px;" href="packagedetails.php?k={$v.pkey}"><span class="icon-room mr-1 text-primary"></span> {$v.start} &mdash; {$v.destination}</a></small><div style="pointer-events:none;"><input type="text" style="width: 200px;" class="rating rating-loading" value="{$v.rating}" data-size="sm" title=""><small style="font-size: 12px;"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;{$v.ratecount}</small></div>
                <div class="d-flex">
                  <div class="mr-auto" style="font-size: 12px;">
                    <span class="icon-date_range"></span>
                    {$v.days} days
                  </div>
                  <div class="ml-auto price">
                    <span class="bg-primary"><a style="text-decoration: none;color: white;font-size: 12px;" href="packagedetails.php?k={$v.pkey}">${$v.packageamount}</a></span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
         
           

         {/foreach}
         
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
      </div>
<div ><a style="background-color: skyblue;color: white;text-align: center;width: 150px;padding: 10px;font-size: 20px;margin-bottom: 5px;margin-right: 15%;float: right;display: block;height: 45px;" href="luxarypackages.php">View More</a></div>
</div>
</table>


</form>

</body>
</html>