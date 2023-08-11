<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

// echo $m;exit;
$key=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['nameoncard'])AND($_POST['nameoncard'])!=null)
{
if(isset($_POST['cardno'])AND($_POST['cardno'])!=null)
{
if(isset($_POST['emonth'])AND($_POST['emonth'])!=null)
{
if(isset($_POST['eyear'])AND($_POST['eyear'])!=null)
{
if(isset($_POST['cvv'])AND($_POST['cvv'])!=null)
{

$a=trim($_POST['nameoncard']);
$b=trim($_POST['cardno']);
$c=trim($_POST['emonth']);
$d=trim($_POST['eyear']);
$e=trim($_POST['cvv']);
$f=$c."/".$d;


$obj->addcar($a,$b,$e,$f,$key);


}
else
echo"<script>alert('cvv password is empty')</script>";
}
else
echo"<script>alert('Expire year is empty')</script>";
}
else
echo"<script>alert('Expire month is empty')</script>";
}
else
echo"<script>alert('Card Number is empty')</script>";
}
else
echo"<script>alert('Name on card is empty')</script>";
}









//$smartyObj->display("usersubheader.tpl");
$smartyObj->display("card.tpl");
//$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?> 