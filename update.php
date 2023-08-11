<?php
include_once 'settings/settings.php';
include_once 'classes/userclass.php';
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['loginkey'];
$b=$obj->sel1($key);
$smartyObj->assign("view",$b);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if (isset($_POST['fname'])AND($_POST['fname'])!=null) 
	{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['fname']))
	{
	if (isset($_POST['lname'])AND($_POST['lname'])!=null) 
	{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['lname']))
	{
	if (isset($_POST['username'])AND($_POST['username'])!=null) 
	{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['username']))
	{				
		if (isset($_POST['addr'])AND($_POST['addr'])!=null) 
		{
			if (isset($_POST['pin'])AND($_POST['pin'])!=null) 
			{
			if (preg_match('/^[0-9]*$/', $_POST['pin']))
			{
			$no=strlen($_POST['pin']);
		if (isset($_POST['dist'])AND($_POST['dist'])!=null) 
	{
		if (isset($_POST['gender'])AND($_POST['gender'])!=null) 
	{
		if (isset($_POST['dob'])AND($_POST['dob'])!=null) 
	{
		
		if (isset($_POST['ph'])AND($_POST['ph'])!=null) 
	{	
		
			$a 	=trim($_POST['fname']);
			$aa	=trim($_POST['lname']);
			$ab	=trim($_POST['username']);
			$b	=trim($_POST['addr']);
			$c 	=trim($_POST['pin']);
			$d 	=trim($_POST['dist']);
			$e 	=trim($_POST['dob']);
			$f 	=trim($_POST['gender']);
			$f 	=strtolower($f);
			$h 	=trim($_POST['ph']);
			$k  =trim($_POST['uabout']);
			$obj->upd($a,$aa,$ab,$b,$c,$d,$e,$f,$h,$k,$key,$_FILES['userdp']);
		}
		else
		echo "<script>alert('contact is empty')</script>";
				}
		else
		echo "<script>alert('DOB is empty')</script>";
		}
		else
		echo "<script>alert('gender is empty')</script>";
		}
		else
		echo "<script>alert('district is empty')</script>";
		}
			else
			echo"<script>	alert('pin number must contain 6 characters')</script>";
			}
			else
			echo "<script>alert('pincode is empty')</script>";
		}
		else
		echo "<script>alert('address is empty')</script>";
	}
	else
	echo"<script>	alert('Please enter alphabets for user name')</script>";	  
	}
	else
	echo "<script>alert('user name is empty')</script>";
	}
	else
	echo"<script>	alert('Please enter alphabets for Last name')</script>";	  
	}
	else
	echo "<script>alert('last name is empty')</script>";
	}
	else
	echo"<script>	alert('Please enter alphabets for First name')</script>";	  
	}
	else
	echo "<script>alert('First name is empty')</script>";




}



$smartyObj->display("usersubheader.tpl");
$smartyObj->display("update.tpl");
$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?> 