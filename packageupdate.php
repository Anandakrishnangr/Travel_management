<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
$key=$_GET['v'];
$b1=$obj->selpackage($key);
$smartyObj->assign("view",$b1);
$key1=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['packagetype'])AND($_POST['packagetype'])!=null)
{
if(isset($_POST['packagename'])AND($_POST['packagename'])!=null)
{
if(isset($_POST['packageamount'])AND($_POST['packageamount'])!=null)
{
if(isset($_POST['packagedetails'])AND($_POST['packagedetails'])!=null)
{


$a=trim($_POST['packagetype']);
$b=trim($_POST['packagename']);
$c=trim($_POST['packageamount']);
$d=trim($_POST['packagedetails']);
$e=trim($_POST['days']);
$f=trim($_POST['start']);
$g=trim($_POST['destination']);
$h=trim($_POST['category']);
 

$obj->packageupdate($a,$b,$c,$d,$e,$f,$g,$h,$key,$_FILES['pimage']);



}
else
echo"<script>alert('packagedetails missing')</script>";
}
else
echo"<script>alert('packageamount is empty')</script>";
}
else
echo"<script>alert('packagename is empty')</script>";
}
else
echo"<script>alert('packagetype is empty')</script>";
}

$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("packageupdate.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?>