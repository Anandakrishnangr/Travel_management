<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

//$key=$_COOKIE['loginkey'];
$key1=$_GET['f'];
$s=$obj->slusercomplaintupdate($key1);
$smartyObj->assign("view",$s);
if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	if (isset($_POST['subject'])AND ($_POST['subject'])!=null)
	{
		
		if (isset($_POST['complaint'])AND ($_POST['complaint'])!=null)
       {

	   	$a=trim($_POST['subject']);
	   	$b=trim($_POST['complaint']);
	   		$obj->usercomplaintupdate($a,$b,$key1);
	   }
	   else
	   	 echo"<script>alert('complaint is empty')</script>";
	 }
	    else
	   	 echo"<script>alert('subject is empty')</script>";
	}

	$smartyObj->display("usersubheader.tpl");


	$smartyObj->display("usercomplaintupdate.tpl");


	$smartyObj->display("footer.tpl");
	 
}
	else
	{	
		Header("location:login.php");
	}
 
?>






