<?php 
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['email'])AND($_POST['email'])==!null)
{
	if(isset($_POST['pass'])AND($_POST['pass'])==!null)
{

	$a=trim($_POST['email']);
	$b=trim($_POST['pass']);

$obj->login($a,$b);


}
else
	echo "<script>password not found  </script>";
}
else
	echo "<script>email not found  </script>";
}

 

$smartyObj->display("login.tpl");
 ?>