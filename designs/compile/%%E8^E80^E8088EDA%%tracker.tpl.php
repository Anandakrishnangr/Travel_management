<?php /* Smarty version 2.6.26, created on 2020-04-11 12:46:49
         compiled from tracker.tpl */ ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>

<?php echo '
<style type="text/css">

form{
	width: 90%;
	text-align: center;
	min-height: 700px;
	font-size: 18px;
}

table{
	width: 100%;
	text-align: center;
}	

table,th,td,tr{
	border: 1px solid black;
	border-color: ;
}

th{
	color: white;
	background-color: black;
}
.akst{
	display: block;
	height: auto;
	width: 100%;
	min-width: 80px;

}
</style>


<script type="text/javascript">
function handleSelect(elm)
{
	if(elm!=null){
window.location ="savechange.php?p="+elm.value;
}
}
</script>

<script type="text/javascript">
	


function urlload(sd){ 
alert(sd); 
var nu =document.getElementById("chh").href;
var num =document.getElementById("sstt").value;
var las=nu.concat(num);

document.getElementById(sd).href=las;
 
} 


</script>
'; ?>


	</head>
		<body>
			<center><br><br><br><br><br><br><br><br>
				<form method="post" action="">
					<table>
	<tr>
		<th>Package Name 				</th>
		<th>Customer Name 	 			</th>
		<th>Package Type 	  			</th>
		<th>Package Category 			</th>
		<th>Start-Destination 			</th>
		<th>Days 						</th>
		<th>Status 						</th>
		<th>Update Status				</th>
	</tr>

				
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<tr>
		<td><?php echo $this->_tpl_vars['b']['packagename']; ?>
 			</td>
		<td><?php echo $this->_tpl_vars['b']['fname']; ?>
 					</td>
		<td><?php echo $this->_tpl_vars['b']['packagetype']; ?>
 			</td>
		<td><?php echo $this->_tpl_vars['b']['category']; ?>
 				</td>
		<td><?php echo $this->_tpl_vars['b']['start']; ?>
-<?php echo $this->_tpl_vars['b']['destination']; ?>
 </td>
		<td><?php echo $this->_tpl_vars['b']['days']; ?>
 					</td>
		
		<?php if ($this->_tpl_vars['b']['progress'] == 2): ?>
		<td style="background-color: #0CC3E8;color: white">	Completed					</td>
		<?php elseif ($this->_tpl_vars['b']['progress'] == 1): ?>
		<td style="background-color: green;color:  white">	In-Progress					</td>
		<?php elseif ($this->_tpl_vars['b']['progress'] == 0): ?>
		<td style="background-color: orange;color:  white">	Not Started					</td>
		<?php elseif ($this->_tpl_vars['b']['progress'] == -1): ?>
		<td style="background-color: red;color:  white">	Suspended					</td>
		<?php endif; ?>
		<td>

			<select onchange="javascript:handleSelect(this)" >
				<option value="none" selected disabled hidden> 
          Select an Option 
      </option>
				<option  value="<?php echo $this->_tpl_vars['b']['bkey']; ?>
&&k=2">Completed 	</option>
				<option  value="<?php echo $this->_tpl_vars['b']['bkey']; ?>
&&k=1">In-Progress 	</option>
				<option  value="<?php echo $this->_tpl_vars['b']['bkey']; ?>
&&k=0">Not Started 	</option>
				<option  value="<?php echo $this->_tpl_vars['b']['bkey']; ?>
&&k=-1">Suspend 		</option>
			</select></td>

		<!-- <td><a id="chh" class="ch" onclick="urlload(<?php echo $this->_tpl_vars['b']['id']; ?>
);" href="savechange.php?k=<?php echo $this->_tpl_vars['b']['bkey']; ?>
&&p=">Save Change</a></td> -->
	</tr>
		<?php endforeach; endif; unset($_from); ?>
					</table>
				</form>
			</center>
		</body>
</html>