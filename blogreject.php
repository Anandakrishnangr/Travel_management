<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{


$keyk=$_COOKIE['loginkey'];
$qrt="select lkey from logintable where lkey ='".$keyk."'";
$ed=mysql_query($qrt);

while ($rr1=mysql_fetch_array($ed)) {
	$keyk1=$rr1['lkey'];
}
//echo $qrt;exit;


$keyi=$_GET['g'];


    $key=keytoid("blog","blogkey",$keyi);

$qry="select loginid,head from blog where id='".$key."' ";
//echo "$qry";exit;
$exe=mysql_query($qry);

while ($rr=mysql_fetch_array($exe)) {
	$ar=$rr['loginid'];
	$arr=$rr['head'];
}



$a="Your blog ".$arr." has been rejected due to violation of terms.You can try again after editing blog ";
//echo$qry;exit;
$obj->blogreject($key);
	   		$obj->notifi($a,$keyk1,$ar);



}
	else
	{	
		Header("location:login.php");
	}

?>