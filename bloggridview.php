<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();
 

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$s=$obj->bloggridview(); 
$smartyObj->assign("view",$s);#any word can be used instead of view
$sd=$obj->bloggridviewag();
$smartyObj->assign("view1",$sd);

$xx=$obj->totalcommentsall();
$smartyObj->assign("viewx1",$xx);

/**/



$ss=$obj->homeblogtravel(6);
$smartyObj->assign("su",$ss);

$ss1=$obj->homeblogtech(6);
$smartyObj->assign("views1",$ss1);

$ss2=$obj->homeblogfood(6);
$smartyObj->assign("views2",$ss2);

$ss3=$obj->homeblogcr(6);
$smartyObj->assign("views3",$ss3);

$ss4=$obj->homeblognew(6);
$smartyObj->assign("views4",$ss4);

/**/



$key=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key);
	$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }

/*echo($rr);exit;*/
  if ($rr==2) {
  	
  
	$smartyObj->display("usersubheader.tpl");
	}
else if ($rr==1) {
	
	$smartyObj->display("agencysubheader.tpl");
}
else if ($rr==0) {
  
  $smartyObj->display("adminsubheader.tpl");
}


$smartyObj->display("bloggridviews.tpl");
$smartyObj->display("footer.tpl");

}
  else
  { 
    Header("location:login.php");
  }

?>