<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
$key=$_GET['k'];
 
$b1=$obj->selectpackageview1($key);
$smartyObj->assign("view",$b1);

 
$bs=$obj->publicreviewview($key);
$smartyObj->assign("views",$bs);


$smartyObj->display("usersubheader.tpl");

$smartyObj->display("packagedetails.tpl");

$smartyObj->display("footer.tpl"); 

}
	else
	{	
		Header("location:login.php");
	}
 

?>