<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$d=$_GET['p'];
$de=$_GET['k'];


$sd=$obj->bookingstatus($d,$de);
$key=$_COOKIE['loginkey'];







}
else
{	
	Header("location:login.php");
}

?>			 