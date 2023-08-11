<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
$key=$_COOKIE['loginkey'];

$s=$obj->adminuserview();
$smartyObj->assign("view",$s);

$ss=$obj->adminagencyview();
$smartyObj->assign("views",$ss);

 if (isset($_POST['sub'])AND ($_POST['sub'])!=null) 
 {
 if (isset($_POST['con'])AND ($_POST['con'])!=null) 
 {
 	$sub=trim($_POST['sub']);
 	$con=trim($_POST['con']);
	$obj->sendsub($sub,$con);
 }
 }

$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("adminnotificationsend.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?> 