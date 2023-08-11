<html>
<head>
<link rel="stylesheet" href="web/css/table1.css">
<link rel="stylesheet" href="web/ak/css/mycssbutto.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{literal}
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<style>

  /* Style buttons */
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 100px;
  right: 35px;
  color: #f1f1f1;
  font-size: 60px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

td{
  text-align: center;
}
</style>
{/literal}
</head>

<body>


<br><br><br><br>
<br><br><br><br>

	<center>
    <h1 style="font-size: 60px; word-spacing: 100px;">Users</h1>
  </center><hr width="45%" size="1" color="black"></center>
  <br>
		<form method="POST" action="" style="width: 100%;">
			<table align="center" border="5" bgcolor="white" style="text-align: center;">
		<tr>
      <th>Name</th>
      <th>Address</th>
      <!-- <th>Register Number</th>
      <th>Proof</th> -->
      <th>Phone Number</th>
      <th>Status</th>
    </tr>
		{foreach from=$view item="b"}

		<tr style="height: 40px;">
    <td>{$b.username}</td>
    <td>{$b.address}</td>
    <td>{$b.ph}</td>
    <!-- <td>{$b.regno}</td> -->
   {if $b.status==2}
			 
    <td>Suspended</td>
    <td style="border-right: hidden;border-top: hidden;border-bottom: hidden;">
    <a  class="button1" style="text-decoration: none;" 	href="adminuserd.php?f={$b.loginid}&&k=1">Activate</a>
    </td>
    {else if $b.status==1}
	  <td>Active</td>
    <td style="border-right: hidden;border-bottom: hidden;border-top: hidden;">
    <a  class="button2"  style="text-decoration: none;" href="adminuserd.php?f={$b.loginid}&&k=2">Suspend</a></td>
	   {/if}
       </tr>
		{/foreach}
			</table>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<div style="height: 50px;margin: 20px;"></div>
		</body>
	{literal}	
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
{/literal}
</html>
