<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
 
	if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
	{

 
		if (isset($_POST['searchag'])AND ($_POST['searchag'])!==null)
		{

			$a=trim($_POST['searchag']);
			
			$s=$obj->findagency($a);
            $smartyObj->assign("view",$s);


 
		}

		 else
	   	 echo"<script>alert('Fill something to search')</script>";

	/*if (isset($_POST['dist'])AND ($_POST['dist'])!=null)

	{
			$a=trim($_POST['dist']);
			
			$s=$obj->agencydistrictview($a);
            $smartyObj->assign("view",$s);
	
	}
		 else
	   	 echo"<script>alert('Select district')</script>";*/
}
$smartyObj->display("usersubheader.tpl");
$smartyObj->display("useragencyview.tpl");

$smartyObj->display("footer.tpl");
 
}
	else
	{	
		Header("location:login.php");
	}
 
?>

