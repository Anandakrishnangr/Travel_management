<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['place'])AND($_POST['place'])!=null)
{
if(isset($_POST['content'])AND($_POST['content'])!=null)
{
$a=trim($_POST['place']);
$b=$_POST['content']; 
$d=trim($_POST['head']);
$t=trim($_POST['cat']);
$obj->blogupload($a,$b,$d,$key,$_FILES['bimage'],$t);
}
else
echo"<script>alert('content is empty')</script>";
}
else
echo"<script>alert('place is empty')</script>";
}

$smartyObj->display("agencysubheader.tpl");
$smartyObj->display("blogupload.tpl");
$smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?>