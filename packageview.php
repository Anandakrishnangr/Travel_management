<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
//$key=$_COOKIE['loginkey'];
$b=$obj->selpackage($key);
$smartyObj->assign("view",$b);
$key=$_COOKIE['loginkey'];
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
if(isset($_POST['pimage'])AND($_POST['pimage'])!=null)
{

$a=trim($_POST['packagetype']);
$b=trim($_POST['packagename']);
$c=trim($_POST['packageamount']);
$d=trim($_POST['packagedetails']);



$obj->updatepackage($a,$b,$c,$d,$e,$key,$_FILES['image']);


}
else
echo"<script>alert('image missing')</script>";
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


$smartyObj->display("packageupload.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>