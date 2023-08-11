<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
// $_SESSION['name']='ananda';
session_start();

$s=$obj->sel($key);
$smartyObj->assign("view",$s);#any word can be used instead of view
 
$xx=$obj->totalcommentsall();
$smartyObj->assign("viewx1",$xx);



$ss=$obj->homeblogtravel(4);
$smartyObj->assign("views",$ss);

$ss1=$obj->homeblogtech(4);
$smartyObj->assign("views1",$ss1);

$ss2=$obj->homeblogfood(4);
$smartyObj->assign("views2",$ss2);

$ss3=$obj->homeblogcr(4);
$smartyObj->assign("views3",$ss3);

$ss4=$obj->homeblognew(4);
$smartyObj->assign("views4",$ss4);


$smartyObj->display("adminmainheader.tpl");
$smartyObj->display("c1.tpl");
$smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}

?>