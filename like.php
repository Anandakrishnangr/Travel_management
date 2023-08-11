<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key1=$_COOKIE['loginkey'];
$key2=$_GET['k'];
$obj->like($key1,$key2); 


}
	else
	{	
		Header("location:login.php");
	}



?>