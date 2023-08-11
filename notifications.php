<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$b2=$obj->notifiview($key);
$b1=$obj->usernotview($key);


$smartyObj->assign("view",$b1);


$ss=$obj->adminagencyview();
$smartyObj->assign("views",$ss);

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



$smartyObj->display("usernot.tpl");

$smartyObj->display("footer.tpl");

}
  else
  { 
    Header("location:login.php");
  }

?>