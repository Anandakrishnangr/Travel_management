<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass(); 

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$s=$obj->usercomplaint();
$smartyObj->assign("view",$s);
$smartyObj->display("usercomplaint.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?> 