<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj=new userclass();
session_start();


echo "workings";
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

	$key=$_COOKIE['loginkey'];
  $id2=keytoid("logintable","lkey",$key);

}
else
{
$id2=0;

}

if(isset($_POST['phone'])AND($_POST['phone'])!=null)
{
if(isset($_POST['email'])AND($_POST['email'])!=null)
{
if(isset($_POST['name'])AND($_POST['name'])!=null)
{
if(isset($_POST['message'])AND($_POST['message'])!=null)
{
$a=trim($_POST['name']);
$b=trim($_POST['phone']);
$c=trim($_POST['message']);
$d=trim($_POST['email']);





$obj->sub($a,$b,$c,$d,$id2);


}
else
echo"<script>alert('Message is empty')</script>";
}
else
echo"<script>alert('name is empty')</script>";
}
else
echo"<script>alert('Email is empty')</script>";
}
else
echo"<script>alert('Contact Number is empty')</script>";









//$smartyObj->display("agencysubheader.tpl");

//$smartyObj->display("footer.tpl");



?>