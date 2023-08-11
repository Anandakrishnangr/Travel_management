<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

echo "<script>alert('Bank rejected payment')</script>";
header('Refresh:3; URL=userhome.php');



$smartyObj->display("transcheck.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 


?>