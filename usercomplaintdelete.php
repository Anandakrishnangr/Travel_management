<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['g'];
$obj->usercomplaintdelete($key);
 
}
	else
	{	
		Header("location:login.php");
	}
 
?>