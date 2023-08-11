<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();
 

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
  $cat=$_GET['v'];

$cat=trim($cat);

$smartyObj->assign("cat",$cat);
/*$s=$obj->bloggridview(); 
$smartyObj->assign("view",$s);#any word can be used instead of view
$sd=$obj->bloggridviewag();
$smartyObj->assign("view1",$sd);
*/

$c=$obj->blogcatview($cat);
$smartyObj->assign("viewcat",$c);


$xx=$obj->totalcommentsall();
$smartyObj->assign("viewx1",$xx);

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


  if ($rr==2) {
  
	$smartyObj->display("usersubheader.tpl");
	}
else if ($rr==1) {
	
	$smartyObj->display("agencysubheader.tpl");
}
elseif ($rr==0) {
  $smartyObj->display("adminsubheader.tpl");
}


$smartyObj->display("blogcat.tpl");
$smartyObj->display("footer.tpl");

}
  else
  { 
    Header("location:login.php");
  }

?>