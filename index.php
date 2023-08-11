<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj=new userclass();

//$s=$obj->asel();
//$smartyObj->assign("view",$s);#any word can be used instead of view
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


	$key1=$_COOKIE['loginkey'];

	$id=keytoid("logintable","lkey",$key1);
	$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }

  if ($rr==1) {
  	Header("location:agencyhome.php");
  }
  elseif ($rr==0) {
  	Header("location:adminhome.php");
  }
  elseif ($rr==2) {
  	Header("location:userhome.php");
  }





}

		
	


$ss=$obj->homeblogtravel(4);
$smartyObj->assign("views",$ss);

$ss1=$obj->homeblogtech(4);
$smartyObj->assign("views1",$ss1);

$ss2=$obj->homeblogfood(4);
$smartyObj->assign("views2",$ss2);

$ss3=$obj->homeblogcr(4);
$smartyObj->assign("views3",$ss3);

$ss4=$obj->homeblognew(4);
$smartyObj->assign("views4",$ss4);


$b1=$obj->selectlatestpackageviewx1();
$smartyObj->assign("viewxe1",$b1);

$b2=$obj->selectholidaypackageviewx1();
$smartyObj->assign("viewxe2",$b2);

$b3=$obj->selectadventurepackageviewx1();
$smartyObj->assign("viewxe3",$b3);

$b4=$obj->selectcruisepackageviewx1();
$smartyObj->assign("viewxe4",$b4);

$b5=$obj->selectfamilypackageviewx1();
$smartyObj->assign("viewxe5",$b5);

$b6=$obj->selectluxurypackageviewx1();
$smartyObj->assign("viewxe6",$b6);

  
$smartyObj->display("publicmainheader.tpl");
$smartyObj->display("pc1.tpl");
 $smartyObj->display("pc2.tpl");
$smartyObj->display("footer.tpl");
?>