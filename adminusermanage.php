<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$s=$obj->usermanage();
$smartyObj->assign("view",$s);

$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("agencyusernamage.tpl");
$smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}

?>