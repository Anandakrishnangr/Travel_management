<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

	$key=$_COOKIE['loginkey'];
	$p=$_GET['f'];
	$ag=$_GET['k'];
	

	$id=keytoid("logintable","lkey",$key);
   $id2=keytoid("agency","akey",$ag);
    $id3=keytoid("packages","pkey",$p);
   $qry="select * from rating where loginid='".$id."' and packageid='".$id3."' and  agencyid='".$id2."'";
  $exe=mysql_query($qry);

   $ar=0;

    while($rr=mysql_fetch_array($exe))
{
    $ar=$rr['id'];
}









	if($ar==0)
	{

		if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
		{
	
		
		if (isset($_POST['review'])AND ($_POST['review'])!=null)
       	{
  
	   	
	   		$a=trim($_POST['review']);
	   		$r=trim($_POST['rate']);
	   		$ar=trim($_POST['arate']);
	   		$arr=trim($_POST['head']);
	   		$obj->rating($a,$key,$p,$ag,$r,$ar,$arr);
	   	}
	   else
	   echo"<script>alert('review is empty')</script>";
	
		}
	
			$smartyObj->display("usersubheader.tpl");
			$smartyObj->display("rating.tpl");
			$smartyObj->display("footer.tpl");

	}	
	else
	{

		$b=$obj->viewrateing($key,$p,$ag);
		$smartyObj->assign("view",$b);

if (isset($_POST['hide'])AND ($_POST['hide'])=='h')
{
	
		
		if (isset($_POST['review'])AND ($_POST['review'])!=null)
       {

	   	 
	   		$a=trim($_POST['review']);
	   		$r=trim($_POST['rate']);
	   		$ar=trim($_POST['arate']);
	   		$arr=trim($_POST['head']);
	   		$obj->updaterating($a,$key,$p,$ag,$r,$ar,$arr);
	   }
	   else
	   echo"<script>alert('review is empty')</script>";
	
	}
	
			$smartyObj->display("usersubheader.tpl");
			$smartyObj->display("ratingupdate.tpl");
			$smartyObj->display("footer.tpl");

	}

	 
}
	else
	{	
		Header("location:login.php");
	}
 

?>






