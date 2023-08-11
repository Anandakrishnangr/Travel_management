<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$b1=$obj->selectluxarypackageview();
$smartyObj->assign("viewxe1",$b1);

$smartyObj->display("usersubheader.tpl");

$smartyObj->display("userpackageview.tpl");

$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>