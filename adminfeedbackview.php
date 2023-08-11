<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$s=$obj->adminfeedbackview();
$smartyObj->assign("view",$s);
$ss=$obj->adminfeedbackview2();
$smartyObj->assign("views",$ss);

$sss=$obj->contactview();
$smartyObj->assign("viewss",$sss);

$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("adminfeedbackview.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}

?> 