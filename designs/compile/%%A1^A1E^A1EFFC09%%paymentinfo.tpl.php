<?php /* Smarty version 2.6.26, created on 2020-04-22 14:19:15
         compiled from paymentinfo.tpl */ ?>
<!DOCTYPE html>
<html>
		<head>
			<title></title>

<?php echo '

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

'; ?>

		</head>
	<body style="background-image: url(web/images/city.jpg);background-position: center;background-repeat: no-repeat;background-attachment: fixed;">
		<br><br><br><br><br><br>
		<center>
	<form action="" method="post">
		<div class="akpmain">
		<div class="akcontusedcard" style="min-height: 400px;">
			<div class="akphead">USED CARDS&nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></div>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
			<div class="akpc" >
				<h3 class="aknamep" style="text-transform: capitalize;">Name		 :<?php echo $this->_tpl_vars['s']['nameholder']; ?>
	</h3>
				<h3 class="aknamep">Card Number  :<?php echo $this->_tpl_vars['s']['cardno']; ?>
		</h3>
				<h4 class="aknamep">Last Used On :<?php echo $this->_tpl_vars['s']['currentdate']; ?>
	</h4>
			</div>
			<?php endforeach; endif; unset($_from); ?>
		</div>			
		
<div class="akc2oh" style="min-height: 300px;">
	<div class="akphead2">Order History</div>
		<table>
			<tr>
				<th>Package Name</th>
				<th>Purchased On</th>
				<th>Amount		</th>
			</tr>

			<?php $_from = $this->_tpl_vars['views']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ss']):
?>
			<tr>
				<td><?php echo $this->_tpl_vars['ss']['packagename']; ?>
			</td>
				<td><?php echo $this->_tpl_vars['ss']['bdate']; ?>
			</td>
				<td><?php echo $this->_tpl_vars['ss']['packageamount']; ?>
			</td>
			</tr>

			<?php endforeach; endif; unset($_from); ?>
		</table>
</div>
		</div>
	</form><br>
		</center>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	
	</body>
</html>