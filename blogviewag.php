<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['k'];
$key1=$_COOKIE['loginkey'];
$s=$obj->blogviewag($key); 
$smartyObj->assign("view",$s);#any word can be used instead of view

$e=$obj->commentview($key); 
$smartyObj->assign("view1",$e);

if(isset($_POST['comment'])AND($_POST['comment'])!=null)
{
$a=trim($_POST['comment']);
$obj->postcomment($a,$key1,$key);
}


//$smartyObj->display("usersubheader.tpl");
//$smartyObj->display("blogview.tpl");
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("blogsingle.tpl");
	$smartyObj->display("footer.tpl");
	
}
	else
	{	
		Header("location:login.php");
	}

?>