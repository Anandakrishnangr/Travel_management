<?php /* Smarty version 2.6.26, created on 2020-11-14 14:15:52
         compiled from aboutus.tpl */ ?>
<!DOCTYPE html>
<html  >
<head>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php echo '

<style type="text/css">
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

</style>

<script>
$(document).ready(function()
    {
        $(document).bind(\'keypress\', function(e) {
            if(e.keyCode==13){
                 $(\'#my_form\').submit();
         $(\'#name\').val("");
             }
        });
  });
</script>


<!-- post -->

<script type="text/javascript">



function post()
{
  
  var name = document.getElementById("name").value;
  var message= document.getElementById("message").value;
  var phone = document.getElementById("phone").value;
  var email= document.getElementById("email").value;

  if( name )
  {  
    $.ajax
    ({
      type: \'post\',
      url: \'postsubscription.php\',
      data: 
      {
        message:message,
         name:name,
         phone:phone,
         email:email,
       
      },
      success: function (response) 
      {
      document.getElementById("name").value="";
      document.getElementById("message").value="";
      document.getElementById("phone").value="";
      document.getElementById("email").value="";
      alert(\'Posted\');

      }
    });
  }
  
  return false;
}
</script>





'; ?>









  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body style="font-size: 18px;">
  <section class="testimonials1 cid-rVnc8xP0g6" id="testimonials1-9">

    
<br><br>
    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    MEET OUR TEAM
                </h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5" style="font-size: 28px;">
                    
We are different. We were raised in various towns, in different families, we love different food. But we have a thing that is common. It is our corporation. We are its essence. We are a team, and also a family.
                </h3>
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/face1.jpg">
                        </div>
                        <!-- <p class="mbr-text mbr-fonts-style display-7">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                        </p> -->
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7" style="font-size: 1.5rem;">
                             Adwaith Mohan
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7" style="font-size: 1.5rem;">
                               Developer
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/face2.jpg">
                        </div>
                        <!-- <p class="mbr-text mbr-fonts-style display-7">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                        </p> -->
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7" style="font-size: 1.5rem;">
                             Alan K Mathew
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7"  style="font-size: 1.5rem;">
                               Developer
                        </small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/face3.jpg">
                        </div>
                        <!-- <p class="mbr-text mbr-fonts-style display-7">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.
                        </p> -->
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                            <font style="font-size: 1.5rem;">Ananda Krishnan GR</font> 
                        </div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7" style="font-size: 1.5rem;">
                               Developer
                        </small>
                    </div>
                </div>
            </div>

            

            

            
        </div>
    </div> 
    <br>  <br>  <br>  <br>  <br>  
</section>


<div  id="contact">
<section class="mbr-section form1 cid-rVnbyfyo0G" id="form1-4">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2" style="font-size: 4rem;">
                    CONTACT FORM
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5" style="font-size: 2rem;">
                    Easily add subscribe and we would contact you as soon as possible!
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="#" method="POST" onsubmit="return post();" id="my_form" name="my_form" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                  <input type="hidden" name="email" data-form-email="true" value="TU6cC3qj3hRmwo6B9fR3NugjrmDjyqGbtMvyZt3mQNcrxFSe7m05fh6orjHY0c5pEeMlHIIzJdqzzI/mwkMRdJ4GPBm9MLYba4OZFOQdalpvFh5TBPx9P6rbBr68OZdD">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-4" class="form-control-label mbr-fonts-style display-7" style="font-size: 1.5rem;">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-4" class="form-control-label mbr-fonts-style display-7"  style="font-size: 1.5rem;">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-4" class="form-control-label mbr-fonts-style display-7" style="font-size: 1.5rem;">Phone</label>
                            <input type="number"  name="phone" data-form-field="Phone" class="form-control display-7" id="phone" maxlength="12">
                        </div>
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-4" class="form-control-label mbr-fonts-style display-7"  style="font-size: 1.5rem;">Message</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" id="message" style="min-height:  350px;"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary btn-form display-4" style="font-size: 1.5rem;">SEND FORM</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

</div>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/as-pie-progress/jquery-as-pie-progress.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <!-- <script src="assets/formoid/formoid.min.js"></script> -->
  
  
</body>
</html>