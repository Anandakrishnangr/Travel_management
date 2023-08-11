<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$key=$_GET['k'];
$key1=$_COOKIE['loginkey'];
$s=$obj->blogview($key); 
$smartyObj->assign("view",$s);#any word can be used instead of view

$e=$obj->commentview($key); 
$smartyObj->assign("view1",$e);

$ee=$obj->totallikes($key); 
$smartyObj->assign("viewe1",$ee);


$eee=$obj->totalcomments($key); 
$smartyObj->assign("viewe11",$eee);


$q=$obj->userlike($key,$key1); 
$smartyObj->assign("vie",$q);

$qa=$obj->countblogcategory(); 
$smartyObj->assign("viea",$qa);
 




/*print_r(array_values($qa));*/


if(isset($_POST['comment'])AND($_POST['comment'])!=null)
{
$a=trim($_POST['comment']);
$obj->postcomment($a,$key1,$key);
}


$id=keytoid("logintable","lkey",$key1);
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
else{
  $smartyObj->display("adminsubheader.tpl");
}

$smartyObj->display("blogsingle.tpl");
	$smartyObj->display("footer.tpl");
  
}
  else
  { 
    Header("location:login.php");
  }

?>