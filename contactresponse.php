<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
//$key=$_COOKIE['loginkey'];
$key1=$_GET['k'];
/*$s=$obj->slusercomplaintupdate($key1);
$smartyObj->assign("view",$s);*/

if (isset($_POST['sub'])AND ($_POST['sub'])!=null) 
 {
 if (isset($_POST['con'])AND ($_POST['con'])!=null) 
 {
 	$sub=trim($_POST['sub']);
 	$con=trim($_POST['con']);
	$obj->sendsub1($sub,$con,$key1);
 }
 }

	$smartyObj->display("adminsubheader.tpl");
	$smartyObj->display("contactresponse.tpl");
	$smartyObj->display("footer.tpl");

	}
	else
	{	
		Header("location:login.php");
	}


?>






