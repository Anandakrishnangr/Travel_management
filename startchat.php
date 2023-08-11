<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();
  
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	
/*
$_SESSION["rec"]=$did;
if ($_SESSION['rec']) {

	echo$_SESSION['rec'];echo "set";exit;
	# code...
}*/

  

/*$cookie_name = "chat";
$cookie_value = $did;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day*/



$key=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key);

/*setcookie("chatii",$id);*/


$id=trim($id);



$did=0;

	$smartyObj->assign("o",$id);
/*
	$qw=$obj->onlinechatactive($did);
	$smartyObj->assign("viewes",$qw);
/*
	$ee=$obj->onlinechat($id,$did);
	$smartyObj->assign("view",$ee);*/

	/*$ee1=$obj->onlinechat2($key,$did);
	$smartyObj->assign("view2",$ee1);
*/

$dq=$obj->prichatlist($key);
$smartyObj->assign("viewdq",$dq);
$os=$obj->onlinestastus();
$smartyObj->assign("oss",$os);

/*$msg=$obj->usermsg($key,$did);
$smartyObj->assign("view",$msg);
$msg1=$obj->agencymsg($key,$did); 
$smartyObj->assign("view1",$msg1);*/

/*
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			
			$b=trim($_POST['name']);
			$obj->chat($b,$key,$did);
		}
		else
		 echo "<script>alert('add message')</script>";
}*/
// $smartyObj->display("agencysubheader.tpl");
$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }


  if ($rr==2) {
  /*list*/
	$li=$obj->userchatlist($id);
	$smartyObj->assign("qw",$li);
	/*listend*/	
  
	/*$smartyObj->display("usersubheader.tpl");*/
	}
else if ($rr==1) {

	/*list*/
	$li=$obj->agencychatlist($id);
	$smartyObj->assign("qw",$li);
	/*listend*/
	
	$smartyObj->display("agencysubheader.tpl");
}
$smartyObj->display("chatstart.tpl");
$smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}

?>			 