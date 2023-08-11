<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$date5=date('Y-m-d');
 $smartyObj->assign("date6",$date5);
// $smartyObj->assign("date",$s1);

$s=$obj->userbookingsview($key);
$smartyObj->assign("view",$s);

/*$s1=$obj->get_date($key);
$smartyObj->assign("date",$s1);*/

/*$s2=$obj->viewrateing($key,$p,$ag);
$smartyObj->assign("review",$s2);*/

$smartyObj->display("usersubheader.tpl");
$smartyObj->display("userbookingview.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?> 