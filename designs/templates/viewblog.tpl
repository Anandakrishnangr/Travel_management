 <html>
<head>
	<title>My Blogs</title>
	<link rel="stylesheet" href="web/css/table1.css">
	<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body style="background-image: url(web/images/bg1.jpg);background-position: fixed;background-size: 100% 100%;background-repeat: no-repeat;background-attachment: fixed;color: white;">{literal}
<script type="text/javascript">
$(document).ready(function(){
    var maxLength = 420;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
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


</style>{/literal}
<br><br><br><br><br><br><br><br><br><br>
	<center><h1>YOUR  BLOGS</h1><hr size="2" width="30%" style="background-color: white;"><br>
	<form enctype="multipart/form-data" action="" method="POST" style="background-color: #0000008c;max-width: 70%;">
		<table border="2" style="table-layout: fixed;width: 100%">
			<!-- <tr><th style="border-bottom: hidden;border-left: hidden;border-top: hidden;"></th><th>Place</th><th>Content</th><th>Date</th></tr> -->
			{foreach from=$view item='b'}
			
<tr><td ><div style="align-content: right;"><a href="blogview.php?k={$b.blogkey}"><img src="{$b.pathpic}" width="350px" height="200px" style="float: left;margin-right: 10px;margin-bottom: 10px;"></a>
	
	<h1 style="text-transform: capitalize;padding: 3px;">{if $b.status==1}<a href="blogview.php?k={$b.blogkey}">{$b.head}{else}{$b.head}{/if}</a></h1><br>
	<h2 style="text-transform: capitalize;padding: 3px;"><i class="fa fa-map-marker" style="font-size:36px;color:red;padding: 3px;"></i>{$b.place}<br><i class="fa fa-calendar" style="font-size:36px"></i>
	{$b.date}</h2><br></div>
	<div class="show-read-more" style="font-size: 18px;"><p>{$b.content}</p></div>
	
	
	
	<div style="float: right;">
{if $b.status==-1}
		<a class="button1" style="width: 400px;" href="blogresubmit.php?v={$b.blogkey}" >Resubmit</a>
{/if}
	<a class="button1" style="width: 400px;" href="blogupdate.php?v={$b.blogkey}" >EDIT</a>
	<a class="button2" href="blogdelete.php?v={$b.blogkey}" >DELETE</a>
</div>
</td></tr>

{/foreach}
		</table>
	</form>
</center>
<br><br><br><br><br><br><br><br><br><br>



</body>
</html>