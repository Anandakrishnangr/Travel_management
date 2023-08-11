



<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<!-- <link rel="stylesheet" href="web/ak/css/mycssbutton.css"> -->
{literal}

<style type="text/css">
	
	.button1{
padding: 14px 40px;background-color: #00bfff;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 6px 2px;
  width: 150px;
  cursor: pointer;
}

.butto .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.butto:hover .tooltiptext {
  visibility: visible;
}

</style>

<script>

function hide(){
 var y = document.getElementById("my");
 // y.style.display = "block";
   var x = document.getElementById("myDIV");
 y.style.display = "none";

 document.getElementById("buttonq").value="AGENCY";

}

function buttontext() {

 document.getElementById("buttonq").value="USER";
 document.getElementById("buttonq").style="background-color:#ffff00;color:#000000;";

  var x = document.getElementById("myDIV");
   var y = document.getElementById("my");
  
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    document.getElementById("buttonq").value="AGENCY";
    document.getElementById("buttonq").style="background-color:#00bfff;color:#ffffff;"; 
  } else if(y.style.display === "none"){
  	 x.style.display = "none";
  	  y.style.display = "block";

    
   
  }
}
</script>
{/literal}
</head>
<body onload="hide()" style="background-image: url(web/images/feedbackbg.png);font-size: 16px;color: black;background-repeat: no-repeat;background-attachment: fixed;">


<br><br><br><br>
<br>
<div >
	<center><h1 style="font-size: 60px; word-spacing: 100px;">FeedBacks</h1></center><hr width="45%" size="1" color="black"><br><center>
		
		<div class="butto"><input style="background-color: ##00bfff;" class="button1" type="button" id="buttonq" value="" onclick="buttontext()"><span class="tooltiptext">Click to change</span></div></center><br>
		

		<div id="myDIV" style="background-color: transparent;">	<form method="POST" action="" style="background-color: transparent;">
	

			
		<table align="center" border="5" bgcolor="white" style="text-align: center;background-color: white;">
			
			<tr><th>Agency Name</th><th>Feedback</th><th>Date</th></tr>
			
			{foreach from=$view item="b"}

			<tr><td>{$b.aname}</td><td>{$b.feedback}</td><td>{$b.fdate}</td></tr>
			
			{/foreach}
	

			
		</table>

</form></div>

	<div id="my"><form method="POST" action="" style="background-color: transparent;">
		<table align="center" border="5" bgcolor="white" style="text-align: center;background-color: white;">
			
			<tr><th>User Name</th><th>Feedback</th><th>Date</th></tr>
			
			{foreach from=$views item="bs"}

			<tr><td>{$bs.fname}</td><td>{$bs.feedback}</td><td>{$bs.fdate}</td>
	
			</tr>
			
			{/foreach}
	

		</table>
</form>
	</div>


<div style="margin-top: 50px;">
<h1  style="text-align: center;">RECENT CONTACTS</h1>
	<form method="POST" action="" style="background-color: transparent;">
		<table align="center" border="5" bgcolor="white" style="text-align: center;background-color: white;">
			
			<tr><th>Name</th><th>Message</th><th>Date</th><th>Phone number</th><th>Email</th></tr>
			
			{foreach from=$viewss item="bss"}

			<tr><td>{$bss.name}</td><td>{$bss.message}</td><td>{$bss.date}</td><td>{$bss.phoneno}</td><td><a href="contactresponse.php?k={$bss.mail}">{$bss.mail}</a></td>
	
			</tr>
			
			{/foreach}
	

		</table>
</form>
	</div>

	</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
		</body>
</html>
