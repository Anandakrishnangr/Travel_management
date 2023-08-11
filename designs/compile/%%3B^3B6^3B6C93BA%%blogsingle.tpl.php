<?php /* Smarty version 2.6.26, created on 2020-10-31 12:19:54
         compiled from blogsingle.tpl */ ?>

<head>
  
  <link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="https://kit.fontawsome.com/797356307c.js"></script>
<?php echo '

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

'; ?>



</head>
<body>

<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>

  <div class="site-wrap">

    


    
   
    
    

      <div class="intro-section site-blocks-cover innerpage" style="background-image: url('<?php echo $this->_tpl_vars['s']['pathpic']; ?>
');background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-8 mt-5" data-aos="fade-up">
            <h1 style="font-size: 4rem;font-weight: 300;color: #fff;"><?php echo $this->_tpl_vars['s']['head']; ?>
</h1>
            <p class="text-white text-center" style="font-size: 34px;">
              <?php echo $this->_tpl_vars['s']['date']; ?>
 by <a href="#" style="text-decoration: none;text-transform: capitalize;"><?php echo $this->_tpl_vars['s']['username']; ?>
<?php echo $this->_tpl_vars['s']['aname']; ?>
</a>
            </p>
          </div>
        </div>
      </div>
    </div>
 

    <div class="container" style="margin-top: 10px;">
        <?php $_from = $this->_tpl_vars['viewe1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ee']):
?> 

 <?php $_from = $this->_tpl_vars['vie']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eq']):
?> 
<?php if ($this->_tpl_vars['eq'] == 1): ?>
<a  href="unlike.php?k=<?php echo $this->_tpl_vars['s']['blogkey']; ?>
">
<u class="fa fa-heart fa-3x" style="color: red;"></u>
    </a><?php echo $this->_tpl_vars['ee']['likes']; ?>

   
    <?php else: ?>
    
      <a href="like.php?k=<?php echo $this->_tpl_vars['s']['blogkey']; ?>
">
<u class="fa fa-heart fa-3x" ></u>
    </a><?php echo $this->_tpl_vars['ee']['likes']; ?>

<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['viewe11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eee']):
?> 
<a href="#comment" onclick="document.myform.comment.focus();"><u class="fa fa-comment fa-3x" ></u></a><?php echo $this->_tpl_vars['eee']; ?>

<?php endforeach; endif; unset($_from); ?>



<a onclick="share()"><u class="fa fa-share fa-3x" ></u></a>

</div>

<input type="text"  id="myInput" class="akhide" style="border: hidden;color: white;height: 0px;width: 1px;">
<?php echo '


<script type="text/javascript">
  
function share() {
document.getElementById(\'myInput\').value = window.location.href;
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
document.getElementById(\'myInput\').value = window.location.href;
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
 -->
<!--  -->

'; ?>









    <section class="site-section" style="padding: 10px;">
            <div class="container">
              <div class="row">
                <div class="col-md-8 blog-content">
                  <p class="lead" style="font-size: 18px;">

<?php echo $this->_tpl_vars['s']['content']; ?>


                <!--  <div class="pt-5">
                    <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
                  </div>
      -->
           <?php endforeach; endif; unset($_from); ?>

                  <div class="pt-5" id="comment" style="    padding-top: 1rem!important;background-color: #eaeaea;;padding: 30px;">
                    <h3 class="mb-5"  style="font-size: 2.65rem;"   ><?php $_from = $this->_tpl_vars['viewe11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eee']):
?> Comments(<?php echo $this->_tpl_vars['eee']; ?>
)<?php endforeach; endif; unset($_from); ?></h3>
   <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>                 <ul class="comment-list">
                      <li class="comment" style="background-color: #bebdbd1c;padding: 5px;" >
                        <div class="vcard bio">
                          <?php if ($this->_tpl_vars['e']['name'] == Admin): ?>
                          <img src="<?php echo $this->_tpl_vars['e']['pathpiccc']; ?>
" style="height: 40px;width: 60px;margin-top: 20px;" alt="Image placeholder">
                          
                          <?php else: ?>
                          <img src="<?php echo $this->_tpl_vars['e']['pathpiccc']; ?>
" style="margin-top: 15px;" alt="Image placeholder">
                          <?php endif; ?>
                        </div>
                        <div class="comment-body">
                          <h3 style="text-transform: capitalize;"><?php echo $this->_tpl_vars['e']['name']; ?>
</h3>
                          <div class="meta">at <?php echo $this->_tpl_vars['e']['cdate']; ?>
 </div>
                          <p><?php echo $this->_tpl_vars['e']['comment']; ?>
</p>
                          
                        </div>
                      </li>
      
                      
                          
      <?php endforeach; endif; unset($_from); ?>
                      
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
<?php $_from = $this->_tpl_vars['viea']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['qe']):
?><li><a href="blogcatview.php?v=<?php echo $this->_tpl_vars['qe']['category']; ?>
"><?php echo $this->_tpl_vars['qe']['category']; ?>
 <span><?php echo $this->_tpl_vars['qe']['1']; ?>
</span></a></li><?php endforeach; endif; unset($_from); ?>
                    </div>
                  </div>
                  <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
                  <div class="sidebar-box">
                    <img src="<?php echo $this->_tpl_vars['s']['pathpicc']; ?>
" style="height: 300px;width: 300px;" alt="Image placeholder" class="img-fluid mb-4">
                    <h3 class="text-black">About The Author</h3>
                    <p><?php echo $this->_tpl_vars['s']['about']; ?>
<?php echo $this->_tpl_vars['s']['uabout']; ?>
</p>
                    <!-- <p><a href="#" class="btn btn-primary btn-sm px-5 rounded-0">Read More</a></p> -->
                  </div>
        <?php endforeach; endif; unset($_from); ?>
                  <div class="sidebar-box">
                    <h3 class="text-black"></h3>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>

    
   