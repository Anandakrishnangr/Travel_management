<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
	//////////////
$key1=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key1);
	$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$qrr=null;
  while ($qk=mysql_fetch_array($exc))
  {
    $qrr=$qk['usertype'];
  }



	///////////


	$o=$_GET['k'];
	$oq=$_GET['p'];
	/**/
if ($o==1) {
	$ot='JAN';
}

elseif ($o==2) {
	# code...
		$ot='FEB';
}
elseif ($o==3) {
	# code...
		$ot='MAR';
}
elseif ($o==4) {
	# code...
		$ot='APR';
}
elseif ($o==5) {
	# code...
		$ot='MAY';
}
elseif ($o==6) {
	# code...
		$ot='JUN';
}
elseif ($o==7) {
	# code...
		$ot='JUL';
}
elseif ($o==8) {
	# code...
		$ot='AUG';
}
elseif ($o==9) {
	# code...
		$ot='SEP';
}
elseif ($o==10) {
	# code...
	$ot='OCT';
}

elseif ($o==11) {
	# code...
		$ot='NOV';
}
elseif ($o==12) {
	# code...
		$ot='DEC';
}
	/**/

$year = date("Y");  
$smartyObj->assign("jy",$year);

$smartyObj->assign("jp",$ot);
$smartyObj->assign("jo",$oq);

 $key=$_COOKIE['loginkey'];



  if ($qrr==0) {
  	$s=$obj->arevn($o,$oq);
$smartyObj->assign("i",$s);

$so=$obj->arevn2($oq);
$smartyObj->assign("io",$so);
  
	$smartyObj->display("adminsubheader.tpl");
	}
else if ($qrr==1) {
	$s=$obj->revn($key,$o,$oq);
$smartyObj->assign("i",$s);

$so=$obj->revn2($key,$oq);
$smartyObj->assign("io",$so);
	$smartyObj->display("agencysubheader.tpl");
}




$smartyObj->display("stat.tpl");
 $smartyObj->display("footer.tpl");

}
	else
	{	
		Header("location:login.php");
	}

?> 