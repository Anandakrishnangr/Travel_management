<?php /* Smarty version 2.6.26, created on 2020-10-31 15:18:22
         compiled from viewblog.tpl */ ?>
 <html>
<head>
	<title>My Blogs</title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body style="background-image: url(web/images/bg1.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;"><?php echo '
<script type="text/javascript">
$(document).ready(function(){
    var maxLength = 420;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(\' <a href="javascript:void(0);" class="read-more">read more...</a>\');
            $(this).append(\'<span class="more-text">\' + removedStr + \'</span>\');
        }
    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });
});
</script>
<style type="text/css">
    .show-read-more .more-text{
        display: none;
    }


    td,tr{
    	min-height: 815px;
    }


</style>'; ?>

<br><br><br><br><br><br><br><br><br><br>
	<center><h1>YOUR  BLOGS</h1><hr size="2" width="30%" style="background-color: white;"><br>
	<form enctype="multipart/form-data" action="" method="POST" style="background-color: #0000008c;max-width: 70%;">
		<table border="2" style="table-layout: fixed;width: 100%">
			<!-- <tr><th style="border-bottom: hidden;border-left: hidden;border-top: hidden;"></th><th>Place</th><th>Content</th><th>Date</th></tr> -->
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
			
<tr><td ><div style="align-content: right;"><a href="blogview.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
"><img src="<?php echo $this->_tpl_vars['b']['pathpic']; ?>
" width="350px" height="200px" style="float: left;margin-right: 10px;margin-bottom: 10px;"></a>
	
	<h1 style="text-transform: capitalize;padding: 3px;"><?php if ($this->_tpl_vars['b']['status'] == 1): ?><a href="blogview.php?k=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
"><?php echo $this->_tpl_vars['b']['head']; ?>
<?php else: ?><?php echo $this->_tpl_vars['b']['head']; ?>
<?php endif; ?></a></h1><br>
	<h2 style="text-transform: capitalize;padding: 3px;"><i class="fa fa-map-marker" style="font-size:36px;color:red;padding: 3px;"></i><?php echo $this->_tpl_vars['b']['place']; ?>
<br><i class="fa fa-calendar" style="font-size:36px"></i>
	<?php echo $this->_tpl_vars['b']['date']; ?>
</h2><br></div>
	<div class="show-read-more" style="font-size: 18px;"><p><?php echo $this->_tpl_vars['b']['content']; ?>
</p></div>
	
	
	
	<div style="float: right;">
<?php if ($this->_tpl_vars['b']['status'] == -1): ?>
		<a class="button1" style="width: 400px;" href="blogresubmit.php?v=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
" >Resubmit</a>
<?php endif; ?>
	<a class="button1" style="width: 400px;" href="blogupdate.php?v=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
" >EDIT</a>
	<a class="button2" href="blogdelete.php?v=<?php echo $this->_tpl_vars['b']['blogkey']; ?>
" >DELETE</a>
</div>
</td></tr>

<?php endforeach; endif; unset($_from); ?>
		</table>
	</form>
</center>
<br><br><br><br><br><br><br><br><br><br>



</body>
</html>