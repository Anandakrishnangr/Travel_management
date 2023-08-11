<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$key=$_GET['k'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['reply'])AND($_POST['reply'])!=null)
{
$r=trim($_POST['reply']);
$obj->bookingreply($key,$r);



}
else
echo"<script>alert('message is empty')</script>";
}

$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("bookingreply.tpl");
$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>