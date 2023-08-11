<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	if (isset($_POST['subject'])AND ($_POST['subject'])!=null)
	{
		
		if (isset($_POST['complaint'])AND ($_POST['complaint'])!=null)
       {

	   	$a=trim($_POST['subject']);
	   	$b=trim($_POST['complaint']);
	   		$obj->complaint($a,$b,$key);
	   }
	   else
	   	 echo"<script>alert('complaint is empty')</script>";
	 }
	    else
	   	 echo"<script>alert('subject is empty')</script>";
	}

	$smartyObj->display("agencysubheader.tpl");
	$smartyObj->display("complaint.tpl");
	$smartyObj->display("footer.tpl");

	}
	else
	{	
		Header("location:login.php");
	}

?>






