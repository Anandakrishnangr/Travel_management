<?php /* Smarty version 2.6.26, created on 2020-04-10 09:02:26
         compiled from ratingupdate.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="rate/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <!--suppress JSUnresolvedLibraryURL -->
   <?php echo '


<style type="text/css">
    
a{
    text-decoration: none;
}

/*
table,th,td{
    border: 1px solid black;
}*/


</style>





    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="rate/js/star-rating.js" type="text/javascript"></script>
<body>
<div class="container">
    <div class="page-header">
        <!-- <h2>Bootstrap Star Rating Examples
            <small>&copy; Kartik Visweswaran, Krajee.com</small>
        </h2> -->
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
                \'size\': \'xs\',
                \'starCaptions\': {0: \'status:nix\', 1: \'status:wackelt\', 2: \'status:geht\', 3: \'status:laeuft\'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>'; ?>

</div>

<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
			
		
		<div style="margin-top: 10vh;">
		  <center><h1 style="font-size: 60px; word-spacing: 100px;">Review</h1></center>
            <hr width="45%" size="1" color="black"><br>

		<center>
            <form method="POST" action="" style="min-width: 70%;min-height: 630px;">
			    <table style="text-align: center;table-layout: fixed;width: 80%;">
				<input type="hidden" name="hide" value="h">
	<tr>
        <td>
            <label>Title</label></td>
        <td colspan="3">
            <input type="text" name="head" value="<?php echo $this->_tpl_vars['b']['head']; ?>
" placeholder="Heading(optional)" style="width: 100%;height: 60px;padding: 10px;"></td>
    </tr>

    <tr style="height: 200px;">
        <td>
            <label>Agency rating</label></td>
        <td style="width: 700px;">
            <input  id="kartik" name="arate" class="rating" data-stars="5" data-step="0.1" value="<?php echo $this->_tpl_vars['b']['arating']; ?>
" title=""/>
            <div class="form-group" style="margin-top:10px"></td>
           
        <td style="width: 70px;">
            <label>Package rating</label></td>
        <td>
            <input  id="kartik" name="rate" class="rating" data-stars="5" data-step="0.1"  value="<?php echo $this->_tpl_vars['b']['rating']; ?>
" title=""/>
            <div class="form-group" style="margin-top:10px"></td>
    </tr>

	<tr style="font-family: Georgia,serif; font-size: 15px;">
        <td>
            <label>Review</label></td>
        <td colspan="3">
            <textarea name="review" placeholder="Enter Review" style="padding: 10px;width: 100%;height: 400px;"><?php echo $this->_tpl_vars['b']['review']; ?>
</textarea></td>
    </tr>

    <tr>
        <td></td>
        <td  colspan="3">
            <input type="submit" class="btn btn-primary"  style="width: 200px;height: 70px;" value="rate"></td></div></div>
      
       
    </tr>
<?php endforeach; endif; unset($_from); ?>
   </table>


</form></center></div><br><br></body></head></html>