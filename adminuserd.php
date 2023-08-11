<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['f'];
$key1=$_GET['k'];
$obj->agencyuserdesc($key,$key1);

}
else
{	
	Header("location:login.php");
}

?>

