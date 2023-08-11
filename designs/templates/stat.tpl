
<html >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
   
   
<link href="web/stat/main.css" rel="stylesheet"></head>
{literal}

<style type="text/css">
	table{
		width: 100%;
	}
	tr{
		height: 30px;
		width: 200px;
		color: white;
		
		width: 100%;
		
	}
	
	table{
		 border-collapse: separate;
    border-spacing: 0 1em;


	}
	.button {
    display: block;
    width: 100%;
    height: 35px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    font-size: 20px;
    padding: 5px;
}
	.red{
		font-size: 20px;
		font-weight: bold;
		margin-bottom:1em;
		padding: 18px;
	
		height: 60px;	
		line-height: 25px;
	}
</style>
<!-- <script type="text/javascript">
alert("hello");	
var p=document.getElementById ( "{$jp}" ).innerText;
var pp=document.getElementById ( "{$jo}" ).innerText;
{$jp}.innerText = "public offers";
{$jo}.innerText = "public offers";



</script> -->
{/literal}

<body>
   <br><br> <br><br> <br><br>
   <center>	
                           <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                
                              
                                </div>    </div>
                        </div>          

                          <div class="row"  style="margin-left: 25%;">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white" style="width: 40%;">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"  style="font-size: 30px;">Total Orders</div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>{$i.0}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading" style="font-size: 30px;">Revenue</div>
                                            <!-- <div class="widget-subheading">Total Earnings</div> -->
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$ {$i.5}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Orders</div>
                                            <div class="widget-subheading">	</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>46%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                           
                        </div>
                      </div>
</center>
<div class="a" style="width: 90%;margin: 5%;min-height: 700px;border-style: solid;padding: 5px;">
	<div class="col-md-6"  style="width: 20%;background-color: yellow;border-style: solid;padding: 5px;float: left;height: 690px;">
		<h1 style="text-align: center;background-color: #4E9CAF;color: white;padding: 5px;">SELECT</h1>
		<table>
			<tr><td><a class="button" id="2019"  href="stat.php?k=01&&p=2019">	2019</a></td></tr>
			{if $jo==2020}
			<tr><td><a class="button" id="2020" href="stat.php?k=01&&p=2020">	2020</a></td></tr>
			{/if}
			<tr><td><a class="button"  id="1"  href="stat.php?k=01&&p={$jo}">	JAN</a></td></tr>
			<tr><td><a class="button" id="2" href="stat.php?k=02&&p={$jo}">	FEB</a></td></tr>
			<tr><td><a class="button" id="3" href="stat.php?k=03&&p={$jo}">	MAR</a></td></tr>
			<tr><td><a class="button" id="4" href="stat.php?k=04&&p={$jo}">	APR</a></td></tr>
			<tr><td><a class="button" id="5" href="stat.php?k=05&&p={$jo}">	MAY</a></td></tr>
			<tr><td><a class="button" id="6" href="stat.php?k=06&&p={$jo}">	JUN</a></td></tr>
			<tr><td><a class="button" id="7" href="stat.php?k=07&&p={$jo}">	JUL</a></td></tr>
			<tr><td><a class="button" id="8" href="stat.php?k=08&&p={$jo}">	AUG</a></td></tr>
			<tr><td><a class="button" id="9" href="stat.php?k=09&&p={$jo}">	SEP</a></td></tr>
			<tr><td><a class="button" id="10" href="stat.php?k=10&&p={$jo}">	OCT</a></td></tr>
			<tr><td><a class="button" id="11" href="stat.php?k=11&&p={$jo}">	NOV</a></td></tr>
			<tr><td><a class="button" id="12" href="stat.php?k=12&&p={$jo}">	DEC</a></td></tr>
			{if $jo==2019}
			<tr><td><a class="button" id="2020" href="stat.php?k=1&&p=2020">	2020</a></td></tr>
			{/if}
		</table>
	</div>
	<!-- /////////////////////////////////////////////////////////////////////////// -->
	<div class="col-md-6" style="width: 40%;background-color: white;border-style: solid;padding: 5px;height: 690px;float:  left;">
		
		<h1 style="text-align: center;background-color: #4E9CAF;color: white;padding: 5px;"> {$jp} {$jo}</h1>

<div class="red" style="text-align: left;">TOTAL ORDERS 			<div style="float: right;">{$i.0}		</div>		</div>
<div class="red" style="text-align: left;" >COMPLETED				<div style="float: right;">{$i.1}		</div>		</div>
<div class="red" style="text-align: left;" >CANCELLED				<div style="float: right;">{$i.2}		</div>		</div>
<div class="red" style="text-align: left;" >IN-PROGRESS				<div style="float: right;">{$i.3}		</div>		</div>
<div class="red" style="text-align: left;" >SUSPENDED				<div style="float: right;">{$i.4}		</div>		</div>
<div class="red" style="text-align: left;" >REVENUE THIS MONTH		<div style="float: right;">$ {$i.5}		</div>		</div>
<div class="red" style="text-align: left;" >REVENUE LAST MONTH		<div style="float: right;">$ {if $i.6==null }0{else}	{$i.7}  {/if}		</div>		</div>
<div class="red" style="text-align: left;" >PROFIT					<div style="float: right;">$ {$i.7}		</div>		</div>
	
	</div>
	<!-- /////////////////////////////////////////////////////////////////////////// -->

	<div class="col-md-6" style="width:40%;background-color: black;border-style: solid;padding: 5px;height: 690px;float: right;">
		<h1 style="text-align: center;background-color: #4E9CAF;color: white;padding: 5px;">{if $jo==$jy}THIS YEAR{else}{$jo}{/if}</h1>
		
<div class="red" style="text-align: left;">TOTAL ORDERS 			<div style="float: right;">{$io.0}		</div>		</div>
<div class="red" style="text-align: left;" >COMPLETED				<div style="float: right;">{$io.1}		</div>		</div>
<div class="red" style="text-align: left;" >CANCELLED				<div style="float: right;">{$io.2}		</div>		</div>
<div class="red" style="text-align: left;" >IN-PROGRESS				<div style="float: right;">{$io.3}		</div>		</div>
<div class="red" style="text-align: left;" >SUSPENDED				<div style="float: right;">{$io.4}		</div>		</div>
<div class="red" style="text-align: left;" >REVENUE THIS YEAR		<div style="float: right;">$ {$io.5}		</div>		</div>
<div class="red" style="text-align: left;" >REVENUE LAST YEAR		<div style="float: right;">$ {if $io.6==null }0{else}	{$io.7}  {/if}		</div>		</div>
<div class="red" style="text-align: left;" >PROFIT					<div style="float: right;">$ {$io.7}		</div>		</div>
	</div>
</div>

                  </body> 
                          
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="web/stat/assets/scripts/main.js"></script></body>
</html>
