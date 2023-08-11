<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$key=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key);
echo "<script>alert'its working';</script>";




/*$e=$obj->retrivemess($key,$did);
$smartyObj->assign("re",$e);

$id=trim($id);

$smartyObj->assign("l",$id);*/


/*$msg=$obj->usermsg($key,$did);
$smartyObj->assign("view",$msg);
$msg1=$obj->agencymsg($key,$did);
$smartyObj->assign("view1",$msg1);*/



	if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			$did=$_POST['re'];
			$b=trim($_POST['name']);
			$obj->chat($b,$key,$did);
		}
		else
		 echo "<script>alert('add message')</script>";

// $smartyObj->display("agencysubheader.tpl");
$smartyObj->display("chatdem.tpl");
// $smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}

?>			 