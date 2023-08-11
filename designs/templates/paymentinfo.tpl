<!DOCTYPE html>
<html>
		<head>
			<title></title>

{literal}

<style type="text/css">
	.akpmain{
		width: 80%;
		background: rgba(0, 0, 0, 0.5);
		border: 1px;
		height: 100%;
		padding: 10px;

	}
.akphead2{
		color: gold;
		width: 100%;
		background-color:#303030;
		height: 50px;
		font-size: 23px;
		text-align: left; 
		padding-bottom: 5px;
		padding-top: 5px;
		padding-left: 5px;
		font-family:"Times New Roman";

		 position: relative;
 		animation-name: exampl;
  		animation-duration: 5s;
 		animation-iteration-count: infinite ;
 		animation-direction: alternate; 	

	}




	.akphead{
		color: gold;
		width: 100%;
		background-color:#303030;
		height: 50px;
		font-size: 23px;
		text-align: left; 
		padding-bottom: 5px;
		padding-top: 5px;
		padding-left: 5px;
		font-family:"Times New Roman";

		position: relative;
 		animation-name: example;
  		animation-duration: 5s;
 		animation-iteration-count: infinite ;
 		animation-direction: alternate; 	
	

	}

	@keyframes example {
  0%   {background-color:gold;color:white;}
  
  100% {background-color:#303030;}
}


	.akpc{
		background-color: #888888;
		height: 90px;
		text-align: left;
		padding: 10px;
		border: 1px solid black;
		border-color: gold;
		color: white;

		position: relative;
 		animation-name: examplee;
  		animation-duration: 5s;
 		animation-iteration-count: infinite ;
 		animation-direction: alternate; 
	}

	@keyframes examplee {
  0%   {border-color: gold;}
  
  100% {border-color: #303030;}
}

	.aknamep{
		font-family: "Times New Roman";


	}
	.akcontusedcard{

		width: 50%;
		padding: 20px;

	}
	tr
	{
		background-color: black;
		color: white;

	}
	th{
		font-size: 22px;
		width: 40px;
		padding: 15px;
		text-align: center;
	}
	td{
		font-size:18px;
		padding: 15px; 
	}
	table{
		width: 100%;
		padding: 10px;
	}

	tr,td,th,table{
		border: 1px solid black;
		border-color: #ffffff99;
		position: relative;
 		animation-name: examplee;
  		animation-duration: 5s;
 		animation-iteration-count: infinite ;
 		animation-direction: alternate; 

		
	}
.akc2oh{


		position: relative;
 		animation-name: exampl;
  		animation-duration: 5s;
 		animation-iteration-count: infinite ;
 		animation-direction: alternate; 

}
@keyframes exampl {
  0%   {background-color:gold;color:white;}
  
  100% {background-color:#303030;}
}

</style>

{/literal}
		</head>
	<body style="background-image: url(web/images/city.jpg);background-position: center;background-repeat: no-repeat;background-attachment: fixed;">
		<br><br><br><br><br><br>
		<center>
	<form action="" method="post">
		<div class="akpmain">
		<div class="akcontusedcard" style="min-height: 400px;">
			<div class="akphead">USED CARDS&nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></div>
			{foreach from=$view item="s"}
			<div class="akpc" >
				<h3 class="aknamep" style="text-transform: capitalize;">Name		 :{$s.nameholder}	</h3>
				<h3 class="aknamep">Card Number  :{$s.cardno}		</h3>
				<h4 class="aknamep">Last Used On :{$s.currentdate}	</h4>
			</div>
			{/foreach}
		</div>			
		
<div class="akc2oh" style="min-height: 300px;">
	<div class="akphead2">Order History</div>
		<table>
			<tr>
				<th>Package Name</th>
				<th>Purchased On</th>
				<th>Amount		</th>
			</tr>

			{foreach from=$views item="ss"}
			<tr>
				<td>{$ss.packagename}			</td>
				<td>{$ss.bdate}			</td>
				<td>{$ss.packageamount}			</td>
			</tr>

			{/foreach}
		</table>
</div>
		</div>
	</form><br>
		</center>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	</body>
</html>