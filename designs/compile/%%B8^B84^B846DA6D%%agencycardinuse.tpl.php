<?php /* Smarty version 2.6.26, created on 2020-09-23 15:29:28
         compiled from agencycardinuse.tpl */ ?>
<!DOCTYPE html>
<html>
		<head>
			<title></title>

<?php echo '

<style type="text/css">
	.akpmain{
		width: 60%;
		background: rgba(0, 0, 0, 0.5);
		border: 1px;
		height: 100%;
		padding: 10px;

	}



	.akphead{
		color: gold;
		width: 100%;
		background-color:#303030;
		height: 60px;
		font-size: 23px;
		text-align: left; 
		/*padding-bottom: 5px;
		padding-top: 5px;
		padding-left: 5px;
		padding-right: 10px;*/
		padding: 10px;
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
		height: auto;
		text-align: left;
		padding: 10px;
		border: 1px solid black;
		border-color: gold;
		color: white;
		width: 100%;

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

		width: 70%;
		padding: 20px;

	}
	td
	{

		padding: 10px;	
		font-size: 20px;
		height: 10px;
	}

	tr{
	height: 10px;
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
		
		<div class="akcontusedcard">
			<div class="akphead">CARD IN USE&nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i></div>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['s']):
?>
			<div class="akpc"><table style="table-layout: fixed;">
				<tr><td><p class="aknamep" style="text-transform: capitalize;">Name		 :<?php echo $this->_tpl_vars['s']['nameholder']; ?>
	</p></td></tr>
				<tr><td><p class="aknamep">Card Number  :<?php echo $this->_tpl_vars['s']['cardno']; ?>
		</p></td><td><p>Expire  :XX/XXXX</p></td></tr>
				<tr><td><p class="aknamep">Added On :<?php echo $this->_tpl_vars['s']['currentdate']; ?>
	</p></td><td><p>CCV  :XXX</p></td></tr>
				<tr><td><a style="display: block;background-color: black;color: gold;text-decoration: none;height: 56px;width: 140px;text-align: center;padding: 10px;float: left;" href="card.php">Change</a></td></tr>
			</div>
			</table>
			<?php endforeach; endif; unset($_from); ?>
		</div>			

	
	</form><br>
		</center>	<br><br><br><br><br><br>	<br><br><br><br><br><br>	<br><br><br><br><br><br>
	</body>
		
		
</html>