<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
// $_SESSION['name']='ananda';
session_start();

/**/

$s=$obj->sel($key);
$smartyObj->assign("view",$s);#any word can be used instead of view
 
$xx=$obj->totalcommentsall();
$smartyObj->assign("viewx1",$xx);

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

/**/


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



/**/
$id=keytoid("logintable","lkey",$key);
    	$query="select count(vie) from notification where reciever='".$id."' and vie='1'";
    	//echo $query;exit;
    	$exe=mysql_query($query);
    	$ar=0;
    	while($x=mysql_fetch_array($exe))
    	 {
    		$ar=$x['count(vie)'];# code...
    	}
    	
    	if($ar>=1)
    	{
    		$smartyObj->assign("not",$ar);
    	}
//echo$ar;exit;
$smartyObj->display("usermainheader.tpl");
 $smartyObj->display("c1.tpl");
  $smartyObj->display("c2.tpl");

$smartyObj->display("footer.tpl");
 
}
    else
    {   
        Header("location:login.php");
    }
 
?>