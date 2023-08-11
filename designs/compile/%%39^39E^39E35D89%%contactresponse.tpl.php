<?php /* Smarty version 2.6.26, created on 2020-09-29 14:41:20
         compiled from contactresponse.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">

<?php echo '
<style type="text/css">
	
	td,th,tr{

border: 1px solid black;

	}

	td{

		font-size: 15px;
	}


</style>

'; ?>


<!--  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">


<link rel="stylesheet" href="web/ak/css/chat.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="web/js/jquery-3.3.1.min.js"></script>
<!--  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--  -->
<?php echo '
<style type="text/css">

*{margin:0px; padding:0px;font-family: Helvetica, Arial, sans-serif;}
#logout{width:60px; height:20px; position:absolute; top:6px; right:20px; margin-bottom:40px; text-align:center; color:#fff}
#container{width:75%; height:auto; position:relative; top:8px; margin:auto;}

#session-name{width:100%; height:36px; margin-bottom:30px; font-size:20px}
.session-text{width:300px; height:30px;padding:6px 10px;margin: 8px 0;border: 1px solid #ccc;border-radius: 4px;box-sizing: border-box; font-size:24px}

#result-wrapper{width:100%; margin:auto; height:450px;}
#result{height:450px; overflow:scroll;overflow-x: hidden;}

#form-container{width:100%; margin:auto; height:80px;}
.form-text{float:left; width:85%; height:80px;}
#comment{width:100%; height:79px; resize:none;}
.form-btn{float:right; width:80px; height:40px;}
#btn{border:none; height:40px; width:80px; }

.chats{width:100%; margin-bottom:6px;}
.chats strong{color:#6d84b4}
.chats p{ font-size:14px; color:#aaa; margin-right:10px}
</style>

<!-- refresh on submit --> <!-- <script type="text/javascript">

  var form = document.getElementById("my_form");
function handleForm(event) { event.preventDefault(); } 
form.addEventListener(\'submit\', handleForm);
</script>
 -->

<!-- scroll at div#what -->
<script type="text/javascript">
  function scron(){
$(document).ready(function () {
    // Handler for .ready() called.
    $(\'html, div\').animate({
        scrollTop: $(\'#what\').offset().top
    }, \'fast\');
});
}
</script> 

<!-- ajax -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
 
  var namee = document.getElementById("name").value;
  var id = document.getElementById("re").value;
  if( namee && id)
  { 
    $.ajax
    ({
      type: \'post\',
      url: \'demochatin.php\',
      data: 
      {
        re:id,
         name:namee
       
      },
      success: function (response) 
      {
      document.getElementById("name").value="";
      }
    });
  }
  
  return false;
}
</script>

<!-- auto refresh and load -->

<!-- <script>
 function autoRefresh_div()
 {
   var id = document.getElementById("re").value;
      $("#result").load("load.php?g=id").show();// a function which will load data from other file after x seconds
  }


 
  setInterval(\'autoRefresh_div()\', 1000);
</script>
 -->

<!-- Scroll down -->
<!-- <script type="text/javascript">
  

var chatHistory = document.getElementById("messageBody");
chatHistory.scrollTop = chatHistory.scrollHeight;

</script> -->


'; ?>

<!--  -->
</head>
<body  style="background-image: url(web/images/dove.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: black;">
	<br><br><br><br><br><br>

<br><br><br><br><br><br>
















<?php echo '

<style type="text/css">
	
.akcontainer{
 width: 60%;
 min-width: 800px;
  height: 1000px;
  padding: 40px;
  background-color: #ffffff4a;

}

.akconttop{
width: 100%;
height:150px;
background-color: #ffffff4a;
border: 1px solid black;

}

.akcont1{
width: 50%;
    height: 750px;
    float: left;
   background-color: #ffffff4a;
    border-collapse: collapse;
    border: 1px solid black;
    overflow: scroll;


}

.akcont2{
width: 50%;
    height: 750px;
    float: right;
    background-color: #ffffff4a;
    border-collapse: collapse;
    border: 1px solid black;
    overflow: scroll;


}

.noty{

height: 65px;
width: 100%;
background-color: #978c8c5e;

}
:hover.noty{

	background-color: #191717d6;
	color: white;
	 border-left: 2px red;
}
.akproimg{
	height: 55px;
	width: 50px;
	border-radius: 50%;
	float: left;
	margin-top: 5px;
	margin-bottom: 5px;
	margin-left: 5px;
}
.akname{

float: left;
font-size: 15px;
margin: 20px;
text-transform: capitalize;

}
.akheads{

	padding-top: 20px;
	margin-bottom: 0px;
	margin-left: 0px;
	font-weight: 300;
	height: 65px;
	width: 100%;
	color: white;



}
.akheadbg{
	margin-top: 20px;
	margin-top: 0px;
	background-color: black;
}

	

</style>

'; ?>

</center>

<center>

	<div class="akcontainer">
<h1 style="color: white;font-size: 30px;">Send Notification</h1>


    <center>
     <div  style="background-color: #66ccff;width: 80%;height: 80px;padding: 3px;margin-top: 20px;color: white;text-align: center;font-size: 45px;">
     SEND MAIL </div>
     <div style="background-color: #ffffff4a;width: 80%;height: 600px;">
       <form  action=""  method="post">
         
        <input  placeholder="Write subject" type="text" name="sub" style="margin-top: 40px;height: 50px;width: 80%;background-color: white;color: black;font-size: 20px;padding: 5px;"><br>
        <textarea type="text" name="con"  style="margin-top: 5px;width: 80%;min-height: 400px;background-color: white;color: black;font-size: 18px;padding: 5px;padding-top: 20px;" placeholder="Write subject"></textarea><br>
        <input type="submit" name="SEND" value="Send" style="display: block;width: 140px;height: 60px;background-color: green;color: white;font-size: 18px;border:hidden;">


       </form>
     </div>
    </center>
   <br><br><br><br>   
   <br><br><br><br>   
   <br><br><br><br>   
   <br><br><br><br>




</body>
</html> 