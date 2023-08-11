<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$ke=$_GET['k'];
$key=$_COOKIE['loginkey'];
if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	
		
		if (isset($_POST['notifi'])AND ($_POST['notifi'])!=null)
       {

	   	
	   	$a=trim($_POST['notifi']);
	   		$obj->notifi($a,$key,$ke);
	   }
	   else
	   	 echo"<script>alert('Notification is empty')</script>";
	
	}

	
  $id=keytoid("logintable","lkey",$key);
	$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }


  if ($rr==0) {
  	
  
	$smartyObj->display("adminsubheader.tpl");
	}
else if ($rr==1) {
	
	$smartyObj->display("agencysubheader.tpl");
}
  	
  
	
	

	$smartyObj->display("not.tpl");

	$smartyObj->display("footer.tpl");
	
}
	else
	{	
		Header("location:login.php");
	}


?>






