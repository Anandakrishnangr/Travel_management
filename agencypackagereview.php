<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$s=$obj->agencypackagereview($key);
$smartyObj->assign("view",$s);
$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("agencypackagerview.tpl");
$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?> 