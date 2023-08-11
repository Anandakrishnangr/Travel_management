<?php /* Smarty version 2.6.26, created on 2020-04-02 19:07:11
         compiled from agencychat.tpl */ ?>
<html>
<head>
<link rel="stylesheet" href="web/ak/css/chat.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="web/js/jquery-3.3.1.min.js"></script>


	
<?php echo '
<style type="text/css">

</style>

<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    $(\'html, div\').animate({
        scrollTop: $(\'#what\').offset().top
    }, \'fast\');
});

</script>

'; ?>


</head>
<body ><br><br><br><br><br><br><br><br>

<form method="POST" action=""  id="my_form">
	 <input  type="hidden" name="hide" value="h">

         










<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            
            <h1>hell <?php echo $this->_tpl_vars['l']; ?>
</h1>
            
          </div>
        </div>

        <div class="mesgs" id="messageBody">
          <div class="msg_history">
            
<?php $_from = $this->_tpl_vars['re']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['w']):
?>
<?php if ($this->_tpl_vars['l'] == $this->_tpl_vars['w']['receiverid']): ?>

            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img alt="propic" src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
              <div class="received_withd_msg">
                 
                  <p><?php echo $this->_tpl_vars['w']['chat']; ?>
 </p>
                  

              <span class="time_date"> <?php echo $this->_tpl_vars['w']['time']; ?>
</span></div>
              </div>
            </div>
<?php else: ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo $this->_tpl_vars['w']['chat']; ?>
</p>
                <span class="time_date"><?php echo $this->_tpl_vars['w']['time']; ?>
</span> </div>
            </div>

 <?php endif; ?>         
<?php endforeach; endif; unset($_from); ?><div id="what"></div>
          </div>
          <div class="type_msg" style="margin-top: 2px;">
            <div class="input_msg_write" style=" border:1px solid;border-color: #87ceeb">
              <input autocomplete="off" type="text" class="write_msg" name="name" style="box-shadow: none; outline: none;border: none;width: 550px;text-align: left;margin-left: 3px;" placeholder="Type a message" required >
              <?php echo '
<a style="float: right;" href="javascript:{}" onclick="document.getElementById(\'my_form\').submit();"><img src="web/ak/icon/msg.png" style="width: 45px;height: 40px;background-repeat: no-repeat;margin-top: 4px;margin-right: 2px;"></a>
'; ?>


<!-- <input type="submit" name="submit" style="background-image: url(web/ak/icon/msg.png);width: 100px;height: 60px;background-repeat: no-repeat;" value=""> -->
                            <!-- <button name="submit"  class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button> -->
            </div>
          </div>
        </div>

      </div>
      </div></div>
      

</form>  
      
   
      
    
    </body>
    </html>