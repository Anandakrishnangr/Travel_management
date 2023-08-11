<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$s=$obj->agencybookingsview($key);
$smartyObj->assign("view",$s);

$year = date("Y");  
$smartyObj->assign("jy",$year);

$year1 = date("m");  
$smartyObj->assign("jy1",$year1);

$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("agencybookingsview.tpl");
$smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}

?>