<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['k'];
$key1=$_COOKIE['loginkey'];
$k1=$_GET['k1'];
$k2=$_GET['k2'];
$a=$_GET['k3'];

$obj->cancel($key,$a,$k1,$k2,$key1);

}
	else
	{	
		Header("location:login.php");
	}

?>