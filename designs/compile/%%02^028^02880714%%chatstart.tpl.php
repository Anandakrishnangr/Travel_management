<?php /* Smarty version 2.6.26, created on 2020-11-01 14:03:00
         compiled from chatstart.tpl */ ?>
<html>
<head>
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

    #circle {
      width: 5px;
      height: 5px;
      background: red;
      border-radius: 50%
    }
    svg{
      width: 15px;
      height: 15px;
      float: right;

    }
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
<!--  -->
<script type="text/javascript">
$(document).ready(function(){    
    //Check if the current URL contains \'#\'
    if(document.URL.indexOf("#")==-1){
        // Set the URL to whatever it was plus "#".
        url = document.URL+"#";
        location = "#";

        //Reload the page
        location.reload(true);
    }
});
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
      url: \'demonchatin.php\',
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

<script>
 function autoRefresh_div()
 {
   var id = document.getElementById("re").value;
      $("#result").load("load.php?g=id").show();// a function which will load data from other file after x seconds
  }


 
  setInterval(\'autoRefresh_div()\', 1000);
</script>


<!-- Scroll down -->
<!-- <script type="text/javascript">
  

var chatHistory = document.getElementById("messageBody");
chatHistory.scrollTop = chatHistory.scrollHeight;

</script> -->


'; ?>


</head>
<body onload="scron()"><br><br><br><br><br><br><br><br>






<div class="container" id="messageBody">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg" style="display: block;">
        <div class="inbox_people" style="width: 1110px;min-height: 800px;">
          
            
          <div class="inbox_chat" style="width: 1110px;min-height: 800px;">
         

            <?php $_from = $this->_tpl_vars['viewdq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
              
           <!--  <?php if ($this->_tpl_vars['o'] != $this->_tpl_vars['v']['loginid']): ?> -->
            <?php if ($this->_tpl_vars['v']['v'] == 1 && $this->_tpl_vars['v']['receiverid'] == $this->_tpl_vars['o']): ?>
            <!-- <h>test111<?php echo $this->_tpl_vars['v']['receiverid']; ?>
<?php echo $this->_tpl_vars['id']; ?>
</h>lastmessbysender -->
<a href="demonchat.php?g=<?php echo $this->_tpl_vars['v']['loginid']; ?>
">
            <div class="chat_list active_chat">
             <div class="chat_people">
                <div class="chat_img"> <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
"  style="border-radius: 20px;height: 43px;width: 43px;" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5 style="text-transform: capitalize;"><?php echo $this->_tpl_vars['v']['aname']; ?>
<?php echo $this->_tpl_vars['v']['username']; ?>
<span class="chat_date"><?php echo $this->_tpl_vars['v']['time']; ?>
</span></h5>
                  <p style="overflow: hidden;"><?php echo $this->_tpl_vars['v']['chat']; ?>
</p> 
                   <?php $_from = $this->_tpl_vars['oss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['os']):
?>
               <?php if ($this->_tpl_vars['v']['senderid'] == $this->_tpl_vars['os']['id']): ?><?php if ($this->_tpl_vars['os']['onlinestatus'] == 1): ?>
             
                <svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="green" />
</svg>
             <?php else: ?>
<svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="red" />
</svg>
               <?php endif; ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </div>
              </div>
            </div>
         </a>  
      <?php else: ?>
           <!-- <h>test2</h> <h>test111<?php echo $this->_tpl_vars['v']['receiverid']; ?>
ppp<?php echo $this->_tpl_vars['o']; ?>
</h> -->
         <a href="demonchat.php?g=<?php echo $this->_tpl_vars['v']['loginid']; ?>
">
            <div class="chat_list">
             <div class="chat_people">
                <div class="chat_img"> <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
"  style="border-radius: 20px;height: 43px;width: 43px;" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5 style="text-transform: capitalize;"><?php echo $this->_tpl_vars['v']['aname']; ?>
<?php echo $this->_tpl_vars['v']['username']; ?>
<span class="chat_date"><?php echo $this->_tpl_vars['v']['time']; ?>
</span></h5>
                  <p style="overflow: hidden;"><?php echo $this->_tpl_vars['v']['chat']; ?>
</p> <?php $_from = $this->_tpl_vars['oss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['os']):
?>
               <?php if ($this->_tpl_vars['v']['receiverid'] == $this->_tpl_vars['os']['id']): ?><?php if ($this->_tpl_vars['os']['onlinestatus'] == 1): ?>  <svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="green" />
</svg>
             <?php else: ?>
<svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="red" />
</svg><?php endif; ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </div>
              </div>
            </div>
         </a> 
         <?php endif; ?> 
      <!--    <?php endif; ?> -->
         
 <?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['qw']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
   
<a href="demonchat.php?g=<?php echo $this->_tpl_vars['v']['loginid']; ?>
">
            <div class="chat_list">
             <div class="chat_people">
                <div class="chat_img"> <img src="<?php echo $this->_tpl_vars['v']['pathpic']; ?>
"  style="border-radius: 20px;height: 43px;width: 43px;" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5  style="text-transform: capitalize;"><?php echo $this->_tpl_vars['v']['aname']; ?>
<?php echo $this->_tpl_vars['v']['username']; ?>
<span class="chat_date"></span></h5>
                  <p style="text-transform: capitalize;">Say hi to <?php echo $this->_tpl_vars['v']['aname']; ?>
<?php echo $this->_tpl_vars['v']['username']; ?>
  !</p> 
                    <?php $_from = $this->_tpl_vars['oss']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['os']):
?>
               <?php if ($this->_tpl_vars['v']['loginid'] == $this->_tpl_vars['os']['id']): ?><?php if ($this->_tpl_vars['os']['onlinestatus'] == 1): ?>  <svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="green" />
</svg>
             <?php else: ?>
<svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="5" cy="5" r="5" fill="red" />
</svg><?php endif; ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                </div>
              </div>
            </div>
         </a>   
          <?php endforeach; endif; unset($_from); ?> 
          </div>
          
        </div>

      

<?php echo '
<!-- 
<form method="post" action=""   onsubmit="return post();" id="my_form" name="my_form">
   <input  type="hidden" name="hide" value="h">

<div class="type_msg" style="margin-top: 2px;">
            <div class="input_msg_write" style=" border:1px solid;border-color: #87ceeb">
              <input  id="name" autocomplete="off" type="text" class="write_msg" name="name" style="box-shadow: none; outline: none;border: none;width: 550px;text-align: left;margin-left: 3px;" placeholder="Type a message" required >
           
<a style="float: right;" href="javascript:{}" onclick="document.getElementById(\'my_form\').submit(); post();"><img src="web/ak/icon/msg.png" style="width: 45px;height: 40px;background-repeat: no-repeat;margin-top: 4px;margin-right: 2px;"></a>
</div>
</div>
</form> -->


<!-- <input type="submit" name="submit" style="background-image: url(web/ak/icon/msg.png);width: 100px;height: 60px;background-repeat: no-repeat;" value=""> -->
                            <!-- <button name="submit"  class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> -->
    


   



     '; ?>
       
        </div>

      </div>
      </div>










      
   
      
    
    </body>
    </html>