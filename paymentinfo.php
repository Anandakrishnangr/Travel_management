<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];




$b1=$obj->usedcards($key);
$smartyObj->assign("view",$b1);

$b2=$obj->orderhistory($key);
$smartyObj->assign("views",$b2);

$smartyObj->display("usersubheader.tpl");

$smartyObj->display("paymentinfo.tpl");

$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>