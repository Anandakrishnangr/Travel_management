<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$a=$_GET['k'];
$key=$_COOKIE['loginkey'];

$b=$obj->directpay($key,$a);
 
}
	else
	{	
		Header("location:login.php");
	}

?>