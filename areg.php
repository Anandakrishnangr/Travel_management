<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();



if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=null)
{
if (preg_match('/^[A-Z a-z]*$/', $_POST['name']))
{
if(isset($_POST['addr'])AND($_POST['addr'])!=null)
{
if(isset($_POST['pin'])AND($_POST['pin'])!=null)
{	
if (preg_match('/^[0-9]*$/', $_POST['pin']))
{
	$no=strlen($_POST['pin']); 
if($no==6)
{
if (isset($_POST['regno'])AND($_POST['regno'])!==null) 
{
$no1=strlen($_POST['regno']);
if ($no1==8) 
{
if(isset($_POST['dist'])AND($_POST['dist'])!=null)
{  
if(preg_match('/^[0-9]*$/',$_POST['ph']))	
{
	$nm1=strlen($_POST['ph']);

if($nm1>=10 and $nm1<=12)
{
if(isset($_POST['ph'])AND($_POST['ph'])!=null)
{
if(isset($_POST['email'])AND($_POST['email'])!=null)
{
if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
 {
if(isset($_POST['password1'])AND($_POST['password1'])!=null)
{
if(isset($_POST['password2'])AND($_POST['password2'])!=null)
{
$a=trim($_POST['name']);
$b=trim($_POST['addr']);
$c=trim($_POST['pin']);
$d=trim($_POST['email']);
$f=trim($_POST['password1']);
$h=trim($_POST['ph']);	
$g=trim($_POST['dist']);
$e=trim($_POST['regno']);
$f=trim($_POST['about']);


 

$obj->areg($a,$b,$c,$d,$f,$g,$h,$e,$f,$_FILES);


}
else
echo"<script>	alert('Confirm password is empty')</script>";
}
else
echo"<script>	alert('Password is empty')</script>";
}
else
 echo"<script>	alert('Email id is not valid')</script>";
 }
else
echo"<script>	alert('Email is empty')</script>";
}
else
echo"<script>	alert('Phone number should be 10 digit or 12 digit')</script>";
}
else
echo"<script>	alert('Please enter number for contact')</script>";	
}
else
echo"<script>	alert('Contact Number is empty')</script>";
}
else
echo"<script>	alert('District is empty')</script>";
}
else
echo"<script>	alert('Register must be 8 digits')</script>";
}
else
echo"<script>	alert('Register number is empty')</script>";
}
else
echo"<script>	alert('Please enter numbers')</script>";
}
else
echo"<script>	alert('pincode must contain 6 digits')</script>";
}
else
echo"<script>	alert('Pincode is empty')</script>";
}
else
echo"<script>	alert('Address is empty')</script>";
}
else
echo"<script>	alert('Please enter alphabets for name')</script>";	  
}
else
echo"<script>	alert('Name is empty')</script>";
}


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


$smartyObj->display("publicsubheader.tpl");
$smartyObj->display("areg.tpl");
$smartyObj->display("footer.tpl");



?>

