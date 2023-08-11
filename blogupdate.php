<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_GET['v'];
$b1=$obj->selblog($key);
$smartyObj->assign("view",$b1);
$key1=$_COOKIE['loginkey'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['place'])AND($_POST['place'])!=null)
{
if(isset($_POST['content'])AND($_POST['content'])!=null)
{
$a=trim($_POST['place']);
$b=trim($_POST['content']);
$d=trim($_POST['head']);
$t=trim($_POST['cat']);
$obj->blogupdate($a,$b,$d,$key,$_FILES['bimage'],$t,$key1);
}
else
echo"<script>alert('content is empty')</script>";
}
else
echo"<script>alert('place is empty')</script>";
}
$id=keytoid("logintable","lkey",$key1);
	$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }
 

  if ($rr==2) {
  	
  
	$smartyObj->display("usersubheader.tpl");
	}
else if ($rr==1) {
	
	$smartyObj->display("agencysubheader.tpl");
}


$smartyObj->display("blogupdate.tpl");
$smartyObj->display("footer.tpl");

}
  else
  { 
    Header("location:login.php");
  }

?>