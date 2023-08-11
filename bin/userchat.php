<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
$did=$_GET['g'];
$key=$_COOKIE['loginkey'];

$id=keytoid("logintable","lkey",$key);
$e=$obj->retrivemess($key,$did);
$smartyObj->assign("re",$e);

$id=trim($id);

$smartyObj->assign("l",$id);

/*$msg=$obj->agencymsg($key,$did);
$smartyObj->assign("view",$msg);
$msg1=$obj->usermsg($key,$did);
$smartyObj->assign("view1",$msg1);*/

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			
			$b=trim($_POST['name']);
			$obj->chat($b,$key,$did);
		}
		else
		 echo "<script>alert('add message')</script>";
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("agencychat.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?>			 