<!DOCTYPE html>
<html>
	<head>
		<title></title>

{literal}
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
{/literal}

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

				
		{foreach from=$view item="b"}
	<tr>
		<td>{$b.packagename} 			</td>
		<td>{$b.fname} 					</td>
		<td>{$b.packagetype} 			</td>
		<td>{$b.category} 				</td>
		<td>{$b.start}-{$b.destination} </td>
		<td>{$b.days} 					</td>
		
		{if $b.progress==2}
		<td style="background-color: #0CC3E8;color: white">	Completed					</td>
		{elseif $b.progress==1}
		<td style="background-color: green;color:  white">	In-Progress					</td>
		{elseif $b.progress==0}
		<td style="background-color: orange;color:  white">	Not Started					</td>
		{elseif $b.progress==-1}
		<td style="background-color: red;color:  white">	Suspended					</td>
		{/if}
		<td>

			<select onchange="javascript:handleSelect(this)" >
				<option value="none" selected disabled hidden> 
          Select an Option 
      </option>
				<option  value="{$b.bkey}&&k=2">Completed 	</option>
				<option  value="{$b.bkey}&&k=1">In-Progress 	</option>
				<option  value="{$b.bkey}&&k=0">Not Started 	</option>
				<option  value="{$b.bkey}&&k=-1">Suspend 		</option>
			</select></td>

		<!-- <td><a id="chh" class="ch" onclick="urlload({$b.id});" href="savechange.php?k={$b.bkey}&&p=">Save Change</a></td> -->
	</tr>
		{/foreach}
					</table>
				</form>
			</center>
		</body>
</html>