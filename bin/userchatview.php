<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$obj= new userclass();
$s=$obj->onlinechat1();
$smartyObj->assign("view",$s);
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("userchatview.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?>