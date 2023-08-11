<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$key=$_COOKIE['loginkey'];
if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	
		
		if (isset($_POST['feedback'])AND ($_POST['feedback'])!=null)
       {

	   	
	   	$a=trim($_POST['feedback']);
	   		$obj->feedback($a,$key);
	   }
	   else
	   	 echo"<script>alert('feedback is empty')</script>";
	
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


  if ($rr==2) {
  	
  
	$smartyObj->display("usersubheader.tpl");
	}
else if ($rr==1) {
	
	$smartyObj->display("agencysubheader.tpl");
}
	$smartyObj->display("feedback.tpl");

	$smartyObj->display("footer.tpl");

	}
else
{	
	Header("location:login.php");
}

?>






