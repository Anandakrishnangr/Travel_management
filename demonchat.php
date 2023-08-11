<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();
  
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$did=$_GET['g'];
/*
$_SESSION["rec"]=$did;
if ($_SESSION['rec']) {

	echo$_SESSION['rec'];echo "set";exit;
	# code...
}*/

 setcookie("chat",$did);

/*$cookie_name = "chat";
$cookie_value = $did;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day*/



$key=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key);

setcookie("chatii",$id);

$e=$obj->retrivemess($key,$did);
$smartyObj->assign("re",$e);

$id=trim($id);

$qry="select count(id) from chat where  receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."')";
$e=mysql_query($qry);
    $kq=array();
while($kq=mysql_fetch_array($e))
    {

      $r=$kq['count(id)'];
       

    }
    setcookie("ccount",$r);



$smartyObj->assign("o",$did);

$qw=$obj->onlinechatactive($did);
$smartyObj->assign("viewes",$qw);

$ee=$obj->onlinechat($id,$did);
$smartyObj->assign("view",$ee);/**/

$ee1=$obj->onlinechat2($key,$did);
$smartyObj->assign("view2",$ee1);


$dq=$obj->prichatlist($key);
$smartyObj->assign("viewdq",$dq);/**/

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


$qrya="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exca=mysql_query($qrya);

$rra=null;
  while ($kaa=mysql_fetch_array($exca))
  {
    $rra=$kaa['usertype'];
  }


  if ($rra==2) {
  	/*list*/
	$li=$obj->userchatlist($id);
	$smartyObj->assign("qw",$li);
	/*listend*/	
  
	$smartyObj->display("usersubheader.tpl");
	}
else if ($rra==1) {
	/*list*/
	$li=$obj->agencychatlist($id);
	$smartyObj->assign("qw",$li);
	/*listend*/
	
	$smartyObj->display("agencysubheader.tpl");
}

$smartyObj->display("chatdem.tpl");
/*$smartyObj->display("footer.tpl");*/

}
else
{	
	Header("location:login.php");
}

?>			 