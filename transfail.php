<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


header('Refresh:3; URL=userhome.php');


echo "<script>alert('You have insufficient  Balance')</script>";

$smartyObj->display("transfail.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 



?>