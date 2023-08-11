<?php

include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();


if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$b=$obj->agencysel($key);
$smartyObj->assign("view",$b);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['aname'])AND($_POST['aname'])!=null)
{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['aname']))
	{
if(isset($_POST['address'])AND($_POST['address'])!=null)
{
if(isset($_POST['pin'])AND($_POST['pin'])!=null)
{
if(isset($_POST['dist'])AND($_POST['dist'])!=null)
{
if(isset($_POST['ph'])AND($_POST['ph'])!=null)
{
if(isset($_POST['regno'])AND($_POST['regno'])!=null)
{

$a=trim($_POST['aname']);
$b=trim($_POST['address']);
$c=trim($_POST['pin']);


$g=trim($_POST['ph']);	
$h=trim($_POST['dist']);
$e=trim($_POST['regno']);


$obj->agencyupdate($a,$b,$c,$g,$h,$e,$key,$_FILES['adp']);

}
else
echo"<script>alert('regno is empty')</script>";
}
else
echo"<script>alert('Contact Number is empty')</script>";
}
else
echo"<script>alert('District is empty')</script>";
}
else
echo"<script>alert('Pincode is empty')</script>";
}
else
echo"<script>alert('Address is empty')</script>";
}
else
echo"<script>alert('Name must be alphabet')</script>";
}
else
echo"<script>alert('Name is empty')</script>";
}
$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("agencyupdate.tpl");
$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>  