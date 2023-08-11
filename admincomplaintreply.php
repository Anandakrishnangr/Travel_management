<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['k'];
$s=$obj->adminselcomplaintreply($key);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['creply'])AND($_POST['creply'])!=null)
{
$r=trim($_POST['creply']);
$obj->complaintreply($key,$r);



}
else
echo"<script>alert('message is empty')</script>";
}

$smartyObj->assign("view",$s);
$smartyObj->display("adminsubheader.tpl");
$smartyObj->display("complaintreply.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>