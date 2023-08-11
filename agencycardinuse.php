<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

// echo $m;exit;
$key=$_COOKIE['loginkey'];

$sd=$obj->agencycardinuse($key,1);
$smartyObj->assign("view",$sd);



 

$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("agencycardinuse.tpl");
$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?> 