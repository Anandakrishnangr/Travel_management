<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

	if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	$keyp=$_GET['k'];


	/*$b=$obj->tracker($key);
	$smartyObj->assign("view",$b)*/;
$s=$obj->blogview($keyp); 
$smartyObj->assign("view",$s);

	$smartyObj->display("adminsubheader.tpl");
	$smartyObj->display("p1blog.tpl");
	$smartyObj->display("footer.tpl");



}
	else
{	
	Header("location:login.php");
}

?>