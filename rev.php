<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];

session_start();
$year = date("Y");  
$smartyObj->assign("jy",$year);

$year1 = date("m");  
$smartyObj->assign("jy1",$year1);

 $xx=$obj-> rev1();
$smartyObj->assign("viewx1",$xx);

$xx2=$obj-> rev2();
$smartyObj->assign("viewx2",$xx2);  


    $smartyObj->display("adminsubheader.tpl");

    $smartyObj->display("rev.tpl");

    $smartyObj->display("footer.tpl");
 
}
    else 
    {   
        Header("location:login.php");
    }
 
?>