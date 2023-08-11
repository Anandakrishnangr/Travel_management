<?php /* Smarty version 2.6.26, created on 2020-11-12 06:31:24
         compiled from agencypackagerview.tpl */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
	<?php echo '

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="rate/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
   

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="rate/js/star-rating.js" type="text/javascript"></script>
</head>
<body style="background-image: url(web/images/lens.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">
<div class="container">
    <div class="page-header">
        
    </div>

    <form method="post" action="">
        <input type="hidden" name="hide" value="h">
      
    </form>
    <hr>
    <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return \'high\';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return \'label label-danger\';
                    } else {
                        return \'label label-success\';
                    }
                },
                hoverOnClear: false
            });
            var $inp = $(\'#rating-input\');

            $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: \'lg\',
                showClear: false
            });

            $(\'#btn-rating-input\').on(\'click\', function () {
                $inp.rating(\'refresh\', {
                    showClear: true,
                    disabled: !$inp.attr(\'disabled\')
                });
            });


            $(\'.btn-danger\').on(\'click\', function () {
                $("#kartik").rating(\'destroy\');
            });

            $(\'.btn-success\').on(\'click\', function () {
                $("#kartik").rating(\'create\');
            });

            $inp.on(\'rating.change\', function () {
                alert($(\'#rating-input\').val());
            });


            $(\'.rb-rating\').rating({
                \'showCaption\': true,
                \'stars\': \'3\',
                \'min\': \'0\',
                \'max\': \'3\',
                \'step\': \'1\',
                \'size\': \'xss\',
                \'starCaptions\': {0: \'status:nix\', 1: \'status:wackelt\', 2: \'status:geht\', 3: \'status:laeuft\'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>
<style type="text/css">
		
		table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 60%;
}

th,td {
  padding: 15px;

}

th{
	font-size: 15px;
	text-align: center;

}



.a{
	
	display: block;
	color: white;
	text-align: center;	
	height: 45px;
	width: 90px;
	border-radius: 12px;
}
	</style>
    '; ?>

</div>


		<br><br><br> 
        <center>
		<div >
	
		<h1 style="font-size: 60px; word-spacing: 100px;">Reviews</h1>
	
	<hr width="45%" size="1" color="black"><br>
		
<center>
		<form method="POST" action="" style="padding: 30px;min-height: 700px;background-color: #e6e6e608;max-width: 80%;">
			
			<table align="center" border="5" bgcolor="white" style="text-align: center;width: 100%">
		
		<tr><th>Customer</th>
			<th>Package</th>
			<th>Package Rating</th>
			<th>Agency Rating</th>
			<th>Review</th>
			<th>Date</th>
		</tr>
		
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>

		<tr><td><?php echo $this->_tpl_vars['b']['username']; ?>
</td>
			<td><?php echo $this->_tpl_vars['b']['packagename']; ?>
</td>
			<td><div style="pointer-events:none;"><input  id="kartik" name="rate" class="rating" data-stars="5" data-step="0.1" value="<?php echo $this->_tpl_vars['b']['4']; ?>
" title=""/>
        		<div  style="pointer-events:none;" class="form-group" style="margin-top:5px"></td>
        	<td><div style="pointer-events:none;"><input style="pointer-events:none;"  id="kartik" name="rate" class="rating" data-stars="5" data-step="0.1" value="<?php echo $this->_tpl_vars['b']['arating']; ?>
" title=""/>
        		<div class="form-group" style="margin-top:5px"></td>
        	<td><?php echo $this->_tpl_vars['b']['review']; ?>
</td>
        	<td><?php echo $this->_tpl_vars['b']['rdate']; ?>
</td>
	</div>
		</tr>
		<?php endforeach; endif; unset($_from); ?>
			</table>
</form>
</center>
</div>
</center>
	<br><br>	

</body>
</html>