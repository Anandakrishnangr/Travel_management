<?php
class userclass
{
  
  //REGISTERATION
  function areg($a,$b,$c,$d,$f,$g,$h,$e,$f,$arr)
{
  // 
$xs="select * from agency where regno='".$e."'";
// echo "$xs";
$xsexe=mysql_query($xs);
if (mysql_num_rows($xsexe)!=0) {
  echo"<script> alert('Agency with this register number is already registered');
   window.location.href='areg.php';  </script>";exit;
}
  //
$sqry="select id,status from logintable where email='".$d."' ";
$sexe=mysql_query($sqry);
$ss=array();
$ss1=array();
while ($sx=mysql_fetch_array($sexe)) {

    $ss=$sx['id'];
    $ss1=$sx['status'];
  
}
if ($ss&&$ss1==1) {
  echo"<script> alert(' Email already registered');
   window.location.href='areg.php';  </script>";exit;
}
elseif($ss&&$ss1==0){
  echo"<script> alert(' waiting for admin approve');
   window.location.href='areg.php';  </script>";exit;

}
elseif ($ss&&$ss1==2) {
   echo"<script> alert(' Account registered usning this email is suspended');
   window.location.href='areg.php';  </script>";exit;
}


  // 

  $enc=md5($f);
$key1=uniquekey("logintable","lkey");
$qry1="insert into logintable(lkey,email,password,usertype) values('".$key1."','".$d."','".$enc."','1')" ;
//echo $qry1;exit;
$exe1=mysql_query($qry1);
$key=uniquekey("agency","akey");
$id=keytoid("logintable","lkey",$key1);
$qry="insert into agency(akey,loginid,aname,address,pin,dist,ph,regno,about) values('".$key."','".$id."','".$a."','".$b."','".$c."','".$g."','".$h."','".$e."','".$f."')" ;
// echo $qry;exit;
 $s="uploads/".$key;
$exe=mysql_query($qry);
// echo "hi";exit;
// $arr=array();
$num=1;
  
 mkdir($s);
 foreach($arr as $a)
          {  
            /*echo "hii";exit;*/
           if($num==1) {
             $qryt="update agency set agencydp='".$a['name']."' where akey='".$key."'";
            // echo$qryt;exit;
          }
          else{
             $qryt="update agency set proof='".$a['name']."' where akey='".$key."'";

          }
              
            $res2=mysql_query($qryt);
            
       
      move_uploaded_file($a["tmp_name"],$s."/".$a["name"]);
      $num++;
    }
 /*   
foreach($arr as $a)
          { 
            if($num==1){

                          }
            // echo "hi";exit;
              $qry="update agency set agencydp".$num."='".$a['name']."' where akey='".$key."'";
            $res2=mysql_query($qry);
            
            if($res2)
            {
              move_uploaded_file($a["tmp_name"],$s."/" . $a["name"]);
            }
            $num++;
            
          }*/


  /*
foreach($arr as $a)
          {  
            echo "hii";exit;
           if($num==1) {
             $qryt="update agency set agencydp='".$a['name']."' where akey='".$key."'";
            echo$qryt;exit;
          }
          else{
             $qryt="update agency set proof='".$a['name']."' where akey='".$key."'";

          }
              
            $res2=mysql_query($qryt);
            $num++;
           
       mkdir($s);
      
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
      $num++;
    }*/
       if($exe&&$exe1)
{
echo"<script> alert('registration successfull')</script>";
header('Refresh:1; URL=login.php');
}
else
echo"<script> alert('registration unsuccessfull')</script>";
            
          

}
	/*function areg($a,$b,$c,$d,$f,$g,$h,$e,$f,$file=null,$file=null)
{
	$enc=md5($f);
$key1=uniquekey("logintable","lkey");
$qry1="insert into logintable(lkey,email,password,usertype) values('".$key1."','".$d."','".$enc."','1')" ;
//echo $qry1;exit;
$exe1=mysql_query($qry1);
$key=uniquekey("agency","akey");
$id=keytoid("logintable","lkey",$key1);
$qry="insert into agency(akey,loginid,aname,address,pin,dist,ph,regno,about,agencydp,proof) values('".$key."','".$id."','".$a."','".$b."','".$c."','".$g."','".$h."','".$e."','".$f."','".$file["name"]."','".$file["name"]."')" ;
//echo $qry;exit;
 $s="uploads/".$key;
$exe=mysql_query($qry);


if($exe&&$exe1)
{
       mkdir($s);
       //pending
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
echo"<script> alert('registration successfull')</script>";
//header('Refresh:1; URL=login.php');
}
else
echo"<script> alert('registration unsuccessfull')</script>";
}
*/
	
function reg2($a,$aa,$ab,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$file=null)
{

  // 
$sqry="select id,status from logintable where email='".$i."' ";
// echo$sqry;exit;
$sexe=mysql_query($sqry);
$ss=array();
$ss1=array();
while ($sx=mysql_fetch_array($sexe)) {

    $ss=$sx['id'];
    $ss1=$sx['status'];
  
}
if ($ss&&$ss1==1) {
  echo"<script> alert(' Email already registered');
   window.location.href='userreg.php';  </script>";exit;
}
elseif($ss&&$ss1==0){
  echo"<script> alert(' waiting for admin approve');
   window.location.href='userreg.php';  </script>";exit;

}
elseif ($ss&&$ss1==2) {
   echo"<script> alert(' Account registered usning this email is suspended');
   window.location.href='userreg.php';  </script>";exit;
}


  // 

	$enc =md5($j);
	
	$ki=uniquekey("logintable","lkey");
	$qry1 ="insert into logintable(lkey,email,password,usertype,status)
	value('".$ki."','".$i."','".$enc."','2','1')";
	// echo $qry1;exit;
  // echo$k;exit;
	$ex=mysql_query($qry1);
	$key =uniquekey("user","ukey");
	$id=keytoid("logintable","lkey",$ki);
  // echo$ki;exit;
	$qry ="insert into user(ukey,fname,lname,username,address,pin,dist,dob,gender,ph,loginid,uabout,userdp)
	value('".$key."','".$a."','".$aa."','".$ab."','".$b."','".$c."','".$d."','".$e."','".$f."','".$h."','".$id."','".$k."','".$file["name"]."')";
	//echo $qry;exit;
  $s="uploads/".$key;
	$exe =mysql_query($qry);

	if($exe&&$ex)
	{
    mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
	echo "<script>alert('registration success')</script>";
		header('Refresh:1; URL=login.php');
	}
	else{

	echo "<script>alert('registration failed')</script>";
 	}
}


function del($key)
{    $id=keytoid("user","ukey",$key);
   $qry="delete from user where id='".$id."'";
   $exe=mysql_query($qry);
   header("location:table.php");
}
  

   function sel($key)
    {
       $id=keytoid("logintable","lkey",$key);
    	$query="select *from user
inner join logintable on logintable.id = user.loginid where loginid='".$id."'";
    	//echo $query;exit;
    	$exe=mysql_query($query);
    	$ar = array();
    	while($x=mysql_fetch_array($exe))
    	 {
    		$ar[]=$x;# code...
    	}
    	return $ar;
    }



    function asel($key)
    {
      $id=keytoid("logintable","lkey",$key);
    	$query="select *from agency
inner join logintable on logintable.id = agency.loginid where loginid='".$id."'";
    	//echo $query;exit;
    	$exe=mysql_query($query);
    	$ar = array();
    	while($x=mysql_fetch_array($exe))
    	 {
    		$ar[]=$x;# code...
    	return $ar;
    }
}


 function sel1($key)
    {
      $id=keytoid("logintable","lkey",$key);
      $qry="select * from user  where loginid='".$id."'";
     //echo $qry;exit;
      $exe=mysql_query($qry);
      $ar=array();
      $path=0;
      
         
        
      while($r=mysql_fetch_array($exe))
      {
        $path="uploads/".$r['ukey']."/".$r["userdp"];
        $r['pathpic']=$path;
        $ar[]=$r;
      }
      return $ar;
    }





 function login($a,$b)
    {
         $enc=md5($b);
         $qry="select lkey,status,usertype from logintable where email='".$a."' and password='".$enc."'";
        // echo $qry;exit;
         $exe=mysql_query($qry);
         $key=null;
         $c=0;
    while($rr=mysql_fetch_array($exe))
    {
      $key=$rr['lkey'];
      $key1=$rr['status'];
      $key2=$rr['usertype'];
       $c=$c+1;
    }
    if($c>0)
    {


      if($key1==1)
      {
      setcookie("loginkey",$key);
      setcookie("logined",1);
      session_start();
      $id=keytoid("logintable","lkey",$key);
       $qryy="update logintable set onlinestatus='1' where id='".$id."'";
                   $exee=mysql_query($qryy);

      if($key2==0)
      header("location:adminhome.php");
    else if($key2==1)
      header("location:agencyhome.php");
    else if($key2==2)
      header("location:userhome.php");
    
    }
    elseif($key1==0) {
     
      echo "<script>alert('waiting for admin approval ')</script>";
    }
    elseif($key1==2) {
     
      echo "<script>alert('Account suspended or rejected')</script>";
    }
}
    else
    {
      echo"<script>alert('Unauthorised  user')</script>";
    }
  }   
  
function logout($key)
    {
      $id=keytoid("logintable","lkey",$key);
      $qry="update logintable set onlinestatus='0' where id='".$id."'";
      $exe=mysql_query($qry);
      header("location:index.php");
    }
//UPDATE INFO

function upd($a,$aa,$ab,$b,$c,$d,$e,$f,$h,$k,$key,$file=null)
{
 $id=keytoid("logintable","lkey",$key);
 $qry="update user set fname='".$a."',lname='".$aa."',username='".$ab."',address='".$b."',gender='".$f."',dist='".$d."',dob='".$e."',ph='".$h."',pin='".$c."' ,uabout='".$k."'  where loginid='".$id."' ";
 // echo $qry;exit;


if ($file["name"]) {

$qryy="update user set userdp='".$file["name"]."' where loginid='".$id."'";
$exd=mysql_query($qryy);
$qr="select ukey from user where loginid='".$id."'";
$ex=mysql_query($qr);

$ar=array();
      while($r=mysql_fetch_array($ex))
      {
        $a=$r['ukey'];
      }




$s="uploads/".$a;

   // mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
}


 
  
 $exe=mysql_query($qry);


 
  
  
 if (!$exe) 
 {
    echo "<script> alert('updation UNsuccessfull')</script>";

  } 
  else
    {  
    echo "<script> alert('updation successfull')</script>";
    header('location:update.php');
  } 
  
}

function agencyupdate($a,$b,$c,$g,$h,$e,$key,$file=null)
	{
$id=keytoid("logintable","lkey",$key);
 $qry="update agency set aname='".$a."',address='".$b."',pin='".$c."',dist='".$h."',ph='".$g."',regno='".$e."' where loginid='".$id."'";
 //echo $qry;exit;

if ($file["name"]) {

$qryy="update agency set agencydp='".$file["name"]."' where loginid='".$id."'";
$exd=mysql_query($qryy);
$qr="select akey from agency where loginid='".$id."'";
$ex=mysql_query($qr);

$ar=array();
      while($r=mysql_fetch_array($ex))
      {
        $a=$r['akey'];
      }




 $s="uploads/".$a;

   // mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
}






 $exe=mysql_query($qry);
 if (!$exe) 
 {
  	echo "<script> alert('updation UNsuccessfull')</script>";
  } 
  else
  	{
  	echo "<script> alert('updation successfull')</script>";
   
  } 
		
     header('location:agencyupdate.php');
	}
  //
function agencyuserdesc($key,$key1){
 $key0=uniquekey("notification","nkey");
   $qry="update logintable set status='".$key1."' where id='".$key."'";

    //echo $qry;exit;
      $exe=mysql_query($qry);
$qry2="update blog set status='-1' where loginid='".$key."'";
  $exe1=mysql_query($qry2);

if ($key1==2) {
  $a="Your account has been suspended and your blogs has been taken down";
  $qry3="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key0."','".$a."','1','".$key."','1')";
  $exe2=mysql_query($qry3);
 
 }
 elseif ($key1==1) {
  $a="Your account has been activated now you can request to activate your blogs";
   $qry3="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key0."','".$a."','1','".$key."','1')";
  $exe2=mysql_query($qry3);
 }


      if ($exe) {
      header('location:adminusermanage.php');
       echo "<script> alert('successfull')</script>";
      }
      else{
  header('location:adminusermanage.php');
   echo "<script> alert('failed')</script>";
      }
}

//
  function usermanage(){

    $qry="select * from user inner join logintable where logintable.id=user.loginid order by logintable.id desc";

    //echo $qry;exit;
      $exe=mysql_query($qry);
      $ar=array();
      while($r=mysql_fetch_array($exe)) 
      {
         $path="uploads/".$r['ukey']."/".$r["userdp"];
        $r['pathpic']=$path;
        $ar[]=$r;
      }
      return $ar;

  }

//AGENCY APPROVE

  function agencyadminaproval() //bug

  {

    $qry="select * from agency inner join logintable where logintable.id=agency.loginid order by logintable.id desc";

    //echo $qry;exit;
      $exe=mysql_query($qry);
      $ar=array();
      while($r=mysql_fetch_array($exe)) 
      {
         $path="uploads/".$r['akey']."/".$r["proof"];
        $r['pathpic1']=$path;
        $ar[]=$r;
      }
      return $ar;


    }

function agencyapprove($key) 
  {
    $id=$key;//keytoid("logintable","lkey",$key);
    $qry="update logintable set status='1' where id='".$id."'";
      //echo $qry;exit;
    $exe=mysql_query($qry);
    
    
     header("location:agencyadminaproval.php");
    if($exe)
    {
      echo"<script>alert('approved successful')</script>";
    }
    else
      echo"<script>alert('approved unsuccessful')</script>";

  }
  function agencyreject($key) //bug
  {
    $id=$key;//keytoid("agency","akey",$key);
    $qry="update logintable set status='2' where id='".$id."'";
    $exe=mysql_query($qry);
   // echo $qry;exit;
    
    header("location:agencyadminaproval.php");
    if($exe)
    {
      echo"<script>alert('rejected successful')</script>";
    }
    else
      echo"<script>alert('rejected unsuccessful')</script>";

  }

    function agencysel($key)
    {
      $id=keytoid("logintable","lkey",$key);
      $qry="select * from agency inner join logintable on logintable.id=agency.loginid where logintable.id='".$id."'";
      //echo $qry;exit;
      $exe=mysql_query($qry);
      $ar=array();
      $path=0;
      while($r=mysql_fetch_array($exe))
      {
         $path="uploads/".$r['akey']."/".$r["agencydp"];
        $r['pathpic']=$path;
        $ar[]=$r;
      }
      return $ar;
    }

    ///COMPLAINT

    function complaint($a,$b,$key)
  {

    $id=keytoid("logintable","lkey",$key);
    $key1=uniquekey("complaint","ckey");
    $date1=date('Y-m-d');
    $qry="insert into complaint(ckey,subject,complaint,date,loginid) values('".$key1."','".$a."','".$b."','".$date1."','".$id."')";
    //echo $qry;exit;

    $exe=mysql_query($qry);

$qry="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qry);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }

    if($exe)
    {
      echo"<script>alert('complaint submited')</script>";
     if($rr==2)
{
       header("location:usercomplaintview.php");
   }
   else if($rr==1) 
   {
    header("location:agencycomplaintview.php");
   }

    }
    else
   {
      echo"<script>alert('complaint not submited')</script>";
   }
}
function usercomplaint()
  {
     $qry="select * from user inner join logintable on logintable.id=user.userid inner join complaint on logintable.id=complaint.loginid";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }
function slusercomplaintupdate($key1)  
  {
    $id=keytoid("complaint","ckey",$key1);
    $qry="select * from complaint where id='".$id."'";
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }
 function usercomplaintupdate($a,$b,$key1)
  {
    $id=keytoid("complaint","ckey",$key1);
    $qry="update complaint set subject='".$a."',complaint='".$b."'
     where id='".$id."'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
if($exe)
    {
      echo"<script>alert('Edit successful')</script>";
      header('Refresh:0');
    }
    else
      echo"<script>alert('Edit unsuccessful')</script>";

  }
  function usercomplaintview($key)
  {
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from complaint where loginid='".$id."' order by date desc";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }
  function usercomplaintdelete($key)
  {
  
    $id=keytoid("complaint","ckey",$key);
    $qry="delete from complaint where id='".$id."'";
  // echo $qry;exit;
    $exe=mysql_query($qry);
    header("Refresh:1");

  }

function adminusercomplaintview()//bug
  {
  
    $qry="select * from complaint inner join logintable on logintable.id=complaint.loginid inner join user on user.loginid=complaint.loginid where usertype='2'";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }

 function agencyaddnotview($key)//ananda
{

  
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from bookings inner join packages on packages.id=bookings.packageid  inner join user on user.loginid=bookings.loginid  where packages.loginid='".$id."' order by bdate desc ";
    //echo $qry;exit;
   $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;


}

function adminuserview(){

$qry="select * from user where 1=1";
$exe=mysql_query($qry);
   $ar=array();
   $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      $path="uploads/".$rr['ukey']."/".$rr["userdp"];
        $rr['pathpic']=$path;
      $ar[]=$rr;

    }
    return $ar;


}

function adminagencyview(){

$qry="select * from agency where 1=1";
$exe=mysql_query($qry);
   $ar=array();
   $path=0;
    while($rr=mysql_fetch_array($exe))
    {
       $path="uploads/".$rr['akey']."/".$rr["agencydp"];
        $rr['pathpic']=$path;
      $ar[]=$rr;
    }
    return $ar;


}


  function adminagencycomplaintview()//bug
  {
  
    $qry="select * from complaint inner join logintable on logintable.id=complaint.loginid inner join agency on agency.loginid=complaint.loginid where usertype='1'";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }

  function adminselcomplaintreply($key)
  {


       $id=keytoid("complaint","ckey",$key);
       $qry="select * from complaint where id='".$id."' ";
        //echo $qry;exit;
       $exe=mysql_query($qry);
    $ar=array();
    $rr=0;
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;



  }

function complaintreply($key,$r)
  {
     $id=keytoid("complaint","ckey",$key);
      $qry="update complaint set creply='".$r."' where id='".$id."' ";
       $exe=mysql_query($qry);
       if(!$exe)
       {
        echo "<script>alert('Reply not send')</script>";

       }
       else
       {
        echo "<script>alert('Reply  send')</script>";
        header("location:admincomplaintview.php"); 
       }

  }


///PACKAGES
function agencycheck($key,$a)
{

  $id=keytoid("logintable","lkey",$key);
  $qry="select loginid from card where loginid='".$id."'";
  $exe=mysql_query($qry);
  // echo$qry;exit;
  $arp=0;
  while ($sp=mysql_fetch_array($exe)) {
    $arp=$sp;  
    # code...
  } 
  if(mysql_num_rows($exe)==0){
if($a==1)
{
   header("location:card.php");
}
else{
$arp='s';
  return $arp;
  }
}
 
}
function newpackage($a,$b,$c,$d,$e,$f,$g,$h,$key,$file=null,$i)
{
  $id=keytoid("logintable","lkey",$key);
  $key=uniquekey("packages","pkey");
  $date=date('Y-m-d');
  $qry="insert into packages(pkey,packagetype,packagename,packageamount,packagedetails,pimage,loginid,date,start,destination,days,category,noc) values('".$key."','".$a."','".$b."','".$c."','".$d."','".$file["name"]."','".$id."','".$date."','".$f."','".$g."','".$e."','".$h."','".$i."')" ;
  //echo $qry;exit;
    $s="uploads/".$key;

$exe=mysql_query($qry);
  

if($exe)
{
      mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
      echo "<script>alert(' Package uploaded')</script>";
}
else
{
  echo "<script> alert('Package upload Failed')</script>";
}
}
function selectpackage()
    {
      
      $query="select *from packages
inner join logintable on logintable.id = packages.loginid ";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
         $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['pkey']."/".$x["pimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }

    function selectagencypackage($key)
    {
       $id=keytoid("logintable","lkey",$key);
      $query="select *from packages
inner join logintable on logintable.id = packages.loginid where packages.loginid='".$id."'";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
       $path=0;
      while($x=mysql_fetch_array($exe))
       {
         $path="uploads/".$x['pkey']."/".$x["pimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }
 function selpackage($key)//bug
    {
      $id=keytoid("packages","pkey",$key);
      $query="select *from packages
inner join logintable on logintable.id = packages.loginid where packages.id='".$id."'";
     // echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
         $path="uploads/".$x['pkey']."/".$x["pimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }

function packageupdate($a,$b,$c,$d,$e,$f,$g,$h,$key,$file=null)
{
 $id=keytoid("packages","pkey",$key);

 $qry="update packages set packagetype='".$a."',packagename='".$b."',packageamount='".$c."',packagedetails='".$d."',days='".$e."',category='".$h."',start='".$f."',destination='".$g."' where id='".$id."'";
  //echo $qry;exit;
  $s="uploads/".$key;
 $exe=mysql_query($qry);


if ($file["name"]) {

$qryy="update packages set pimage='".$file["name"]."' where id='".$id."'";
// echo$qryy;exit;
$exd=mysql_query($qryy);





$s="uploads/".$key;

   mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
}






 if (!$exe) 
 {  
    echo "<script> alert('updation UNsuccessfull')</script>";
  } 
  else
    {
      
      
    echo "<script> alert('updation successfull')</script>";
      header("location:agencypackageview.php");
  } 
  
}
function packagedel($key)
{    $id=keytoid("packages","pkey",$key);
   $qry="delete from packages where id='".$id."'";
  // echo $qry;exit;
   $exe=mysql_query($qry);
   header("location:viewpackage.php");

}

function agencydistrictview($a)
   {
    $qry="select * from agency inner join logintable on logintable.id=agency.loginid where dist='".$a."'" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
   }

function findagency($a){

  $qry="select agency.loginid,akey,aname,address,arating,aratecount,ph,pin,dist,regno,agencydp from agency  where aname like '%".$a."%' or ph like '%".$a."%' or address like '%".$a."%' or regno like '%".$a."%' or pin like '%".$a."%' or dist like '%".$a."%' ";
     // echo$qry;exit;
  $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path;
        /*$count=$rr['count(packagename)'];
        $rr['pc']=$count;*/
      $ar[]=$rr;

    }
    if (mysql_num_rows($exe)==0) {
 $rt['errormsg']='NO DATA FOUND';
 $ar[]=$rt;

}
    // print_r($ar);
    return $ar;
}

function selectpackageview($key)
   {
    //$id=keytoid("agency","akey",$key);
    $qry="select * from packages inner join agency on agency.loginid=packages.loginid where agency.loginid='".$key."' order by packages.id desc" ;
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
     $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
      $ar[]=$rr;

    }
      // print_r($ar);exit;
    return $ar;

   }
   function selectpackageview1($key) //bug
   {
    $id=keytoid("packages","pkey",$key);
    $qry="select * from packages inner join agency on agency.loginid=packages.loginid where packages.id='".$id."'" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;
   }


function topratedagency()
{
$qry="select * ,count(packagename) from agency  inner join packages on packages.loginid=agency.loginid  order by aratecount limit 12  ";
//echo$qry;exit;
 $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path;
        $count=$rr['count(packagename)'];
        $rr['pc']=$count;
        $ar[]=$rr;

    }
    return $ar;
}

function bfagency(){

$qry="select * ,count(packagename) from agency  inner join packages on packages.loginid=agency.loginid where  packages.packageamount<20000 order by arating  ";
//echo$qry;exit;
 $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path;
        $count=$rr['count(packagename)'];
        $rr['pc']=$count;
        $ar[]=$rr;

    }
    return $ar;

}

function imperialagencypick(){


$qry="select * ,count(packagename) from agency  inner join packages on packages.loginid=agency.loginid where arating>4.5 order by arating  ";
//echo$qry;exit;
 $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path;
        $count=$rr['count(packagename)'];
        $rr['pc']=$count;
        $ar[]=$rr;

    }
    return $ar;

}

function premiumagency(){



$qry="select * ,count(packagename) from agency  inner join packages on packages.loginid=agency.loginid where packages.packageamount>200000 order by arating  ";
//echo$qry;exit;
 $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path;
        $count=$rr['count(packagename)'];
        $rr['pc']=$count;
        $ar[]=$rr;

    }
    return $ar;

}


function selectlatestpackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid order by date desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}

function selectholidaypackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where category='holidays' order by date desc" ;
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    // print_r($ar);
        return $ar;



}

function selectfamilypackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where category='family' order by date desc" ;
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;



}

function selectluxarypackageview()
{
$qry="select * from packages  inner join agency on packages.loginid=agency.loginid where category='luxury' order by date desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;



}

function selecthoneymoonpackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where category='honeymoon' order by date desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;



}

function selectadventurepackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where category='adventure' order by date desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;



}

function selectcruisepackageview()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where category='cruise' order by date desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;



}

function selectimperialpickpack(){

$qry="select * from packages inner join  agency on packages.loginid=agency.loginid where rating>4  order by packageamount desc" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}


///BOOKING PACKAGE

   function booking($key,$a)
   {
    
   $key2=uniquekey("bookings","bkey");
   
   $id2=keytoid("logintable","lkey",$key);
   $id3=keytoid("packages","pkey",$a);
   $m="select packageamount,loginid from packages where packages.id='".$id3."'";
   $exe1=mysql_query($m);
   $rr=null;
   $r=null;
   while($k=mysql_fetch_array($exe1))
   {
    $rr=$k['packageamount'];
    $r=$k['loginid'];
   }
   // echo $rr;exit;
   $date1 = date("Y-m-d",strtotime(date("Y-m-d", strtotime("+5 day"))));
   $qry= "insert into bookings(bkey,packageid,loginid,cldate) values('".$key2."','".$id3."','".$id2."','".$date1."')";
    //echo $qry;exit;
  
   $exe=mysql_query($qry);
    if(!$exe)
    {
      echo "<script>alert('BOOKING FAILED')</script>";
    }
  else{
    echo "<script>alert('Package Added');

    window.location.href='payment.php?k=$rr&&s=$r';
    </script>";//ananda
      // header('Refresh:1; URL=payment.php?k=$rr');
   
    }  }  


// subscription
  function sub($a,$b,$c,$d,$id2){

$key1=uniquekey("subscription","subkey");
   
 

   $qry="insert into subscription(subkey,loginid,mail,message,name,phoneno) values('".$key1."','".$id2."','".$d."','".$c."','".$a."','".$b."')";
   $exe=mysql_query($qry);

   if($exe){


 echo "<script>alert('Message Sended')</script>";
}
else{
  echo "<script>alert('Message not Sended')</script>";

}

  }








function directpay($key,$a){
    
   $key2=uniquekey("bookings","bkey");
   
   $id2=keytoid("logintable","lkey",$key);
   $id3=keytoid("packages","pkey",$a);
   $m="select packageamount,loginid from packages where packages.id='".$id3."'";
   //echo $m;exit;
   $exe1=mysql_query($m);
   $rr=null;
   $r=null;
   while($k=mysql_fetch_array($exe1))
   {
    $rr=$k['packageamount'];
    $r=$k['loginid'];
   }
   // echo $rr;exit;
   $date1=date('Y-m-d');
  
    //echo $qry;exit;
  
   
    if(!$exe1)
    {
      echo "<script>alert('Payment Failed')</script>";
    }
  else{
    echo "<script>

    window.location.href='payment.php?k=$rr&&s=$r';
    </script>";//ananda
      // header('Refresh:1; URL=payment.php?k=$rr');
   
    }    

   }

   function bookingreply($key,$r)
{
  $id=keytoid("bookings","bkey",$key);

  $qry="update bookings set reply='".$r."' where bookings.id='".$id."'";
  //echo $qry;exit;
  $exe=mysql_query($qry);
if($exe)
 { header('Refresh:1; URL=agencybookingsview.php');
echo "<script>alert('Message Sent')";
}
else
{
echo "<script>alert('Message Not Sent')";
}

}
// BOOKINGS VIEW
  function agencybookingsview($key) //bug
{
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from bookings inner join packages on packages.id=bookings.packageid  inner join user on user.loginid=bookings.loginid  where packages.loginid='".$id."' order by bdate desc ";
    //echo $qry;exit;
   $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;

}

function usernotview($key){
$id=keytoid("logintable","lkey",$key);
    $qry="select * from notification where reciever='".$id."' order by  id desc";
    // echo $qry;exit;
   $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;

}



function userbookingsview($key) //bug
{ 
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from bookings inner join packages on packages.id=bookings.packageid  inner join user on user.loginid=bookings.loginid inner join agency on agency.loginid=packages.loginid where bookings.loginid='".$id."' order by  date desc";
    // echo $qry;exit;
   $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;

}
function get_date($key)
    {
       $id=keytoid("logintable","lkey",$key);
       
    $qry1="select bdate from bookings where loginid='".$id."'";
    // echo$qry1;exit;
     $e2=mysql_query($qry1);
    $r=null;
    while($kk=mysql_fetch_array($e2))
    {
     $r=$kk['bdate'];
   
    // $date1=date('Y-m-d');
     $qry1="select date_add('".$r."', INTERVAL +2 DAY) AS date";
   //  echo $qry1;exit();
     $e2=mysql_query($qry1);
    $r1=null;
    while($kk1=mysql_fetch_array($e2))
    {
      $r1=$kk1['date'];
     // echo$r1;exit;
    }
     }
    return $r1;
    }


function removefromkart($key)
{
  $id=keytoid("bookings","bkey",$key);

$qr="delete from bookings where id='".$id."'";
$e2=mysql_query($qr);

if ($e2) {
 echo"<script> alert('Removed from cart')</script>";
}
   header(' URL=userbookingsview.php');
}








   function notifi($a,$key,$ke){
    //$id2=keytoid("user","ukey",$ke);
    // $qry1="select loginid from user where id='".$ke."'";
     //echo $qry1;exit();
     /*$e2=mysql_query($qry1);
    $r1=null;
    while($kk1=mysql_fetch_array($e2))
    {
      $r1=$kk1['loginid'];
    }*/
$id=keytoid("logintable","lkey",$key);

$qryy="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qryy);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }


  if ($rr==0) {
    
          if($ke==-1){

            $qr1="select loginid from  user where 1=1";
            $ex1=mysql_query($qr1);
            //echo$qr1;exit;
            $rr1=array();;
            while ($k1=mysql_fetch_array($ex1))
            {
            $rr1[]=$k1['loginid'];
            
            }
            //echo$l1;exit;
           foreach ($rr1 as &$v) {
    


              $key1=uniquekey("notification","nkey");
              
              $qry="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$id."','".$v."','1')";
              $e2=mysql_query($qry);
            
            }
            
          echo"<script> alert('Notification Sended To Users')</script>";

            }
            else if ($ke==-2) {

            $qr2="select loginid from agency where 1=1";

            //echo$qr2;exit;
            $ex2=mysql_query($qr2);



            $rr2=array();
            while ($k2=mysql_fetch_array($ex2))
            {
            $rr2[]=$k2['loginid'];
            
            }

            foreach ($rr2 as &$v) {
              
            

              $key1=uniquekey("notification","nkey");
              
              $qry="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$id."','".$v."','1')";
              $e2=mysql_query($qry);
              }
                  echo"<script> alert('Notification Sended To Agencies')</script>";

            }

            else if ($ke==-3) {

            $qr2="select id from logintable where 1=1";

            //echo$qr2;exit;
            $ex2=mysql_query($qr2);



            $rr2=array();
            while ($k2=mysql_fetch_array($ex2))
            {
            $rr2[]=$k2['id'];
            
            }

            foreach ($rr2 as &$v) {
              
            

              $key1=uniquekey("notification","nkey");
              
              $qry="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$id."','".$v."','1')";
              $e2=mysql_query($qry);
              }
              echo"<script> alert('Notification Sended To All')</script>";
            }

              else{
                    $key1=uniquekey("notification","nkey");
   
                    $qry="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$id."','".$ke."','1')";
                    $e2=mysql_query($qry);
                    if($e2){
                        echo"<script> alert('Notification Sended ')</script>";
                        header('Refresh:1; URL=notificationsend.php');
                    }
                    else{
                        echo"<script> alert('Notification Send failed ')</script>";
                        header('Refresh:1; URL=notificationsend.php');
                  }
              
            }

  
   header('Refresh:1; URL=adminnotificationsend.php');
  }

else
{







   $key1=uniquekey("notification","nkey");
   
   $qry="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$id."','".$ke."','1')";
$e2=mysql_query($qry);
if($e2){
  echo"<script> alert('Notification Sended ')</script>";
   header('Refresh:1; URL=notificationsend.php');
}
else{
  echo"<script> alert('Notification Send failed ')</script>";
  header('Refresh:1; URL=notificationsend.php');
}

}


   }

function notifiview($key){
  $id=keytoid("logintable","lkey",$key);
  $qry="update notification set vie=1 where reciever='".$id."'";
  
  //echo $qry;exit;
  $e=mysql_query($qry);

// header("location:usernot.php");

}

function cancel($key,$a,$k1,$k2,$key1)
{

//ananda
$id=keytoid("bookings","bkey",$key);
$id1=keytoid("logintable","lkey",$key1);
$qry="update bookings set cancelstatus='1' where id='".$id."'";
 $k1=substr($k1, 0, -9);
 $exe=mysql_query($qry);
$q="select cardno from card where loginid='".$id1."' and currentdate='".$k1."' and amount='".$a."'";
 // echo $q;exit;
$e=mysql_query($q);
$rr=null;
while($k=mysql_fetch_array($e))
{
  $rr=$k['cardno'];
}


// echo $a;exit;
$qq="select packageid from bookings where id='".$id."'";
$ee=mysql_query($qq);
$rr11=null;
while($k=mysql_fetch_array($ee))
{
  $rr11=$k['packageid'];
}
$qqq="select loginid from packages where id='".$rr11."'";
$eee=mysql_query($qqq);
$rr111=null;
while($k=mysql_fetch_array($eee))
{
  $rr111=$k['loginid'];
}
$qqq1="select * from card where loginid='".$rr111."'";
$eee1=mysql_query($qqq1);
$rr112=null;
while($k=mysql_fetch_array($eee1))
{
  $rrc=$k['cardno'];
}




//
$val=$a-($a*(40/100));
$q1="update bank set totalamount=totalamount+'".$val."' where cardno='".$rr."'";
$q2="update bank set totalamount=totalamount-'".$val."' where cardno='".$rrc."'";
 // echo $q1;exit;
$e1=mysql_query($q1);
$ee1=mysql_query($q2);


  header("location:userbookingview.php");

}

//CARD




function addcard($a,$b,$e,$f,$key,$m,$sa)
{
  // echo $m;exit;
   $id=keytoid("logintable","lkey",$key);
   $key1=uniquekey("card","cardkey");
   $date=date('Y-m-d');
   $qry="insert into card(nameholder,cardno,cvv,expiredate,currentdate,loginid,cardkey,amount)
     value('".$a."','".$b."','".$e."','".$f."','".$date."','".$id."','".$key1."','".$m."')";
     // echo $qry;exit;
     $exe=mysql_query($qry);
  if($exe)
  {
    //echo"<script> alert('Card added ')</script>";
      $qry="select totalamount from bank where accountholder='".$a."' and cardno='".$b."' and expiredate='".$f."' and cvv='".$e."'  ";
  // echo $qry;exit;
      $exc=mysql_query($qry);
      $rr=null;
if (mysql_num_rows($exc)==0) {
  echo"<script> alert('Payment unsuccessful invalid creditails ')</script>";

}
else
{
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['totalamount'];
  }

               if($rr>=$m)
               {
                     $bal=$rr-$m;
                     $qryy="update bank set totalamount='".$bal."' where accountholder='".$a."' and cardno='".$b."' and expiredate='".$f."' and cvv='".$e."' ";
                     $excc=mysql_query($qryy);
                     $qry1="update bookings set paymentstatus='1' where bookings.loginid='".$id."'";
             
                 //ananda
                     $qry12="select * from card where loginid='".$sa."'";
             
                     $exce=mysql_query($qry12);
                     $rrr=null;
                while ($kk=mysql_fetch_array($exce))
              { 
                   $rrr=$kk['nameholder'];
                   $rrr1=$kk['cardno'];
                   $rrr2=$kk['cvv'];
                   $rrr3=$kk['expiredate'];
              }
                     $com=$m*20/100;
                     $ag=$m-$com;
             
                     $qry2="update bank set totalamount=totalamount+'".$ag."' where accountholder='".$rrr."' and cardno='".$rrr1."' and expiredate='".$rrr3."' and cvv='".$rrr2."' ";
                 //becho $qry2;exit;
                    $excc2=mysql_query($qry2);
                    $qry3="update bank set totalamount=totalamount+'".$com."' where accountholder='jadayu' and accno='81119662942255' ";
                    $excc3=mysql_query($qry3);
                    $key0=uniquekey("card","cardkey");
                    $date0=date('Y-m-d');
                    $cqry="insert into comissions (comkey,date,amount,agencyloginid,userloginid) values('".$key0."','".$date0."','".$com."','".$sa."','".$id."')";// a
                    $excc13=mysql_query($cqry);
                //echo $cqry;exit;
             
                $excc1=mysql_query($qry1);
                echo "<script>alert('Payment successful')</script>";
                header("location:transsuccess.php");
             
                }
                else
                {
                  echo "<script>alert('You have insufficient  Balance')</script>";
                  header("location:transfail.php");
                }
    
  }

}
  else
  {
  echo"<script> alert('Payment unsuccessful ')</script>";
  header("location:transcheck.php");
  }

  }

function addcar($a,$b,$e,$f,$key)
{
  // echo $m;exit;
   $id=keytoid("logintable","lkey",$key);
   $key1=uniquekey("card","cardkey");
   $date=date('Y-m-d');
   $qry="insert into card(nameholder,cardno,cvv,expiredate,currentdate,loginid,cardkey)
     value('".$a."','".$b."','".$e."','".$f."','".$date."','".$id."','".$key1."')";
     //echo $qry;exit;
     $exe=mysql_query($qry);
     
  if ($exe) 
  {
   echo"<script> alert('added card')</script>";
   header('location:agencycardinuse.php');
  }
      else{
    echo"<script> alert('Failed to add card')</script>";

}
  }

function agencycardinuse($key)
{


$id=keytoid("logintable","lkey",$key);
$qry="select * from card where loginid='".$id."' order by id desc limit 1";
//echo$qry;exit;
$exe=mysql_query($qry);
$rr=null;
  while ($k=mysql_fetch_array($exe))
  {
    $rr[]=$k;
  }
return $rr;


}
//BLOG

function blogupload($a,$b,$d,$key,$file=null,$t)
{

$id=keytoid("logintable","lkey",$key);
  $key=uniquekey("blog","blogkey");
  $date=date('Y-m-d');
  $qry="insert into blog(blogkey,place,content,loginid,date,status,bimage,head,category) values('".$key."','".$a."','".$b."','".$id."','".$date."','0','".$file["name"]."','".$d."','".$t."')" ;
  // echo $qry;exit;
    $s="uploads/".$key;

$exe=mysql_query($qry);
  

if($exe)
{
      mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
      echo "<script>alert(' Blog uploaded')</script>";
    

  $qryyq="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qryyq);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }


  if ($rr==2) {
    
  
  header("location:bloguserview.php");
  }
else if ($rr==1) {
  
  header("location:blogagencyview.php");
}
      

}
else
{
  echo "<script> alert('Blog upload Failed')</script>";
}

}

function selblog($key)
    {
      $id=keytoid("blog","blogkey",$key);
      $query="select *from blog
inner join logintable on logintable.id = blog.loginid where blog.id='".$id."'";
     // echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      // print_r($ar)
            return $ar;
    }

function blogupdate($a,$b,$d,$key,$file=null,$t,$key1)//bug image update
{
 $id=keytoid("blog","blogkey",$key);
 $ie=keytoid("logintable","lkey",$key1);
 // echo$ie;exit;

 $qry="update blog set place='".$a."',content='".$b."',head='".$d."',category='".$t."' where id='".$id."'";
  //echo $qry;exit;
  $s="uploads/".$key;
 $exe=mysql_query($qry);




if ($file["name"]) {

if (file_exists($s."/".$file["name"])) {

  $qryyy="update blog set bimage='".$file["name"]."' where id='".$id."'";
// echo$qryy;exit;
$exde=mysql_query($qryyy);
  // echo "<script> alert('exist')</script>";
  goto end;
  exit;

}
else
{


array_map('unlink', array_filter( 
            (array) array_merge(glob($s))));



$qryy="update blog set bimage='".$file["name"]."' where id='".$id."'";
// echo$qryy;exit;
$exd=mysql_query($qryy);





$s="uploads/".$key;

   mkdir($s);
      move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
    }
}




 if (!$exe) 
 {  
    echo "<script> alert('updation UNsuccessfull')</script>";
  } 
  else
    {
      end:
      //mkdir($s);
      // move_uploaded_file($file["tmp_name"],$s."/".$file["name"]);
    echo "<script> alert('updation successfull')</script>";
   


    $qryyq="select * from logintable where id='".$ie."'  ";
  // echo $qryyq;exit;
  $exc=mysql_query($qryyq);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }


  if ($rr==2) {
    
  
  header("location:bloguserview.php");
  }
else if ($rr==1) {
  
  header("location:blogagencyview.php");
}
   


  } 
  
}
function blogdel($key)
{    $id=keytoid("blog","blogkey",$key);
   $qry="delete from blog where id='".$id."'";
  // echo $qry;exit;
   $exe=mysql_query($qry);
   header("location:bloguserview.php");
}

 function selectblog($key) //bug
    {
       $id=keytoid("logintable","lkey",$key);
      $query="select *from blog where blog.loginid='".$id."'";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;

        $ar[]=$x;# code...
      }
      return $ar;
    }

    function blogresubmitt($key){

      $qry="update blog set status='0' where blogkey='".$key."' ";
      $exe=mysql_query($qry);
      echo "<script> alert('Re-Submitted')</script>";
      header('location:bloguserview.php');
    }

function blogadminaproval() 

  {
    $qr="select loginid,id from blog order by id desc ";
$ari=array();
    $ex=mysql_query($qr);
    $arr=array();
    while ($r1=mysql_fetch_array($ex)) {
      $pd=$r1['id'];
      $pdi=$r1['loginid'];
      # code...
    

$qr1="select usertype from logintable where id='".$pdi."'";
// echo"<br>$qr1";
$ex1=mysql_query($qr1);
$ar1=array();
$ar=array();
while ($r1=mysql_fetch_array($ex1)) {
  $ar1=$r1['usertype'];

  
if ($ar1==1) {
   $qry="select * from blog inner join agency on agency.loginid=blog.loginid where blog.id='".$pd."' order by blog.id desc";
 // echo$qry;
   /* echo $qry;exit;*/
      $exe=mysql_query($qry);
      
      while($r=mysql_fetch_array($exe))
      {
        $path="uploads/".$r['blogkey']."/".$r["bimage"];
        $r['pathpic']=$path;


        $pos=strpos($r['content'], ' ', 45);
        $r['content']=substr($r['content'],0,$pos ); 
        $ar[]=$r;
      }
  
}
elseif ($ar1==2) {
   $qry="select * from blog  inner join user on user.loginid=blog.loginid where blog.id='".$pd."' order by blog.id desc";
 // echo$qry;
   /* echo $qry;exit;*/
      $exe=mysql_query($qry);
      
      while($r=mysql_fetch_array($exe))
      {
        $path="uploads/".$r['blogkey']."/".$r["bimage"];
        $r['pathpic']=$path;
             $pos=strpos($r['content'], ' ', 45);
        $r['content']=substr($r['content'],0,$pos ); //ak
        $ar[]=$r;
      }
  
}
$ari=array_merge($ari,$ar);

unset($ar);
 }  
      

}

return $ari;
    }


function blogapprove($key) 
  {
    $id=$key;//keytoid("logintable","lkey",$key);
    $qry="update blog set status='1' where id='".$id."'";
      // echo $qry;exit;
    $exe=mysql_query($qry);
   
     
    if($exe)
    {
      echo"<script> alert('approved successful'); </script>";
       header('location:blogadminaproval.php');
    }
    else
echo"<script> alert('approve unsuccessful'); </script>";
     header('location:blogadminaproval.php');

  }
  function blogreject($key) 
  { 
    $id=$key;//keytoid("agency","akey",$key);
    $qry="update blog set status='-1' where id='".$id."'";
    $exe=mysql_query($qry);
    /*echo $exe;exit;*/
 
    if($exe)
    {

      echo"<script>alert('rejected successful')</script>";
       header('location:blogadminaproval.php');
    }
    else
      echo"<script> alert('rejected unsuccessful');</script>";
     header('location:blogadminaproval.php');

  }

function bloggridview() //bug
    {
       
      $query="select *from blog inner join logintable on logintable.id=blog.loginid inner join user on blog.loginid=user.loginid where logintable.usertype='2' and blog.status='1' order by date desc limit 6";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }

function bloggridviewag() //bug
    {
       
      $query="select *from blog inner join logintable on logintable.id=blog.loginid inner join agency on blog.loginid=agency.loginid where logintable.usertype='1' and blog.status='1' order by date desc limit 6";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }


    /*function blogview($key) //bug
    {
       $id=keytoid("blog","blogkey",$key);
      $query="select *from blog inner join user on user.loginid = blog.loginid  where blog.id='".$id."'";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;
    }*/



    function blogview($key) //bug
    {
       $id=keytoid("blog","blogkey",$key);
      $query="select *from blog where blog.id='".$id."'";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        /*$path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $path="uploads/".$x['akey']."/".$x["agencydp"];
        $x['pathpicc']=$path;
        $ar[]=$x;# code...*/
        $ar=$x['loginid'];
// echo$ar;exit;
         $qr="select usertype from logintable where id='".$ar."'";
       // echo $qr;exit;
      $exxe=mysql_query($qr);
      $arrr=array();

      while($rrr=mysql_fetch_array($exxe))
      {
        $a=$rrr['usertype'];
// echo $a;exit;
        if ($a==0) 
      {
        $u="Admin";
        return $ar;
  
      }
        else if ($a==1)
      {
        $qq="select * from blog inner join agency on blog.loginid=agency.loginid where blog.id='".$id."' ";
        // echo $qq;exit;
        $ee=mysql_query($qq);
        $aa=array();
        $path=0;
        while ($rr1=mysql_fetch_array($ee)) 
      {
        $path="uploads/".$rr1['blogkey']."/".$rr1["bimage"];
        $rr1['pathpic']=$path;
        $path="uploads/".$rr1['akey']."/".$rr1["agencydp"];
        $rr1['pathpicc']=$path;
        $aa[]=$rr1;

      }
        return $aa;

      }
        else if ($a==2) 
      {
        $qqq="select * from blog inner join user on blog.loginid=user.loginid where blog.id='".$id."'";
        //echo$qqq;exit;
        $eee=mysql_query($qqq);
        $aaa=array();
        $path=0;
        while ($rr1=mysql_fetch_array($eee)) 
      {
        $path="uploads/".$rr1['blogkey']."/".$rr1["bimage"];
        $rr1['pathpic']=$path;
        $path="uploads/".$rr1['ukey']."/".$rr1["userdp"];
        $rr1['pathpicc']=$path;
        //echo$rr1['pathpicc'];exit;
        $aaa[]=$rr1;
      }
          return $aaa;


      }

      }
      



      }
      
    }
function commentview($key)
{
$id=keytoid("blog","blogkey",$key);
/*$qry="select * from blog inner join user on blog.loginid=user.loginid  inner join comment on comment.blogid=blog.id where blog.id='".$id."'order by comment.id desc limit 0,4 ";
    //echo $qry;exit;
   $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;*/
 $ca=array();
  $qryy="select * from comment  where blogid='".$id."'order by comment.cdate desc limit 0,4 ";
  //echo $qryy;exit;
  $exe=mysql_query($qryy);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;
      $cid=$rr['id'];
      // echo$cid;exit;
      
      $p=$rr['loginid'];
// echo$p;exit;
      $qr="select usertype from logintable where id='".$p."'";
      // echo $qr;exit;
      $exxe=mysql_query($qr);
      $arrr=array();

      while($rrr=mysql_fetch_array($exxe))
      {
        $a=$rrr['usertype'];
// echo $a;exit;
        if ($a==0) 
      {
          $qq="select * from comment where comment.loginid='".$p."' and comment.id='".$cid."' order by comment.cdate desc limit 0,4";
        //echo $qq;exit;
        $ee=mysql_query($qq);
        $aaa=array();
        $path=0;
        $l=0;
        while ($rr1=mysql_fetch_array($ee)) 
      {
        $path="uploads/admin/admin.png";
        $rr1['pathpiccc']=$path;
        $aaa[]=$rr1;
        

      }
        
$ca=array_merge($ca,$aaa);
unset($aaa);
        
  
      }
        else if ($a==1)
      {
        /*$qq="select * from blog inner join comment on comment.blogid=blog.id inner  join agency on comment.loginid=agency.loginid where blog.id='".$id."' order by comment.cdate desc limit 0,4";*/
        $qq="select * from comment inner  join agency on comment.loginid=agency.loginid where comment.loginid='".$p."' and comment.id='".$cid."' order by comment.cdate desc limit 0,4";
        //echo $qq;exit;
        $ee=mysql_query($qq);
        $aaa=array();
        $path=0;
        $l=0;
        while ($rr1=mysql_fetch_array($ee)) 
      {
        $path="uploads/".$rr1['akey']."/".$rr1["agencydp"];
        $rr1['pathpiccc']=$path;
        $aaa[]=$rr1;
        

      }
        
$ca=array_merge($ca,$aaa);
unset($aaa);
      }
        else if ($a==2) 
      {
        /*$qqq="select * from blog inner join comment on comment.blogid=blog.id inner join user on comment.loginid=user.loginid where blog.id='".$id."' order by comment.cdate desc limit 0,4";*/
        $qqq="select * from comment inner  join user on comment.loginid=user.loginid where comment.loginid='".$p."' and comment.id='".$cid."' order by comment.cdate desc limit 0,4";
        //echo$qqq;exit;
        $eee=mysql_query($qqq);
        $aa=array();
        $l=0;
        while ($rr1=mysql_fetch_array($eee)) 
      {
        $path="uploads/".$rr1['ukey']."/".$rr1["userdp"];
        $rr1['pathpiccc']=$path;
        $aa[]=$rr1;
        $l=$l+1;
      }
        $ca=array_merge($ca,$aa); 


      }

      }

    }
     // echo$l;exit;
       return $ca; 
    

}

 function postcomment($a,$key1,$key)

 {
$id=keytoid("logintable","lkey",$key1);

$q="select usertype from logintable where id='".$id."'";
//echo $q;exit;
$e=mysql_query($q);
$ar=array();
while ($r=mysql_fetch_array($e)) {

  $ar=$r['usertype'];
}

if ($ar==0) {
  $u="Admin";
  
}
else if ($ar==1) {
  $qq="select aname from agency where loginid='".$id."'";
  $ee=mysql_query($qq);
  $aa=array();
  while ($rr=mysql_fetch_array($ee)) {

     $aa=$rr['aname'];
  }
  $u=$aa;

}
else if ($ar==2) {

   $qqq="select username from user where loginid='".$id."'";
  $eee=mysql_query($qqq);
  $aaa=array();
  while ($rr=mysql_fetch_array($eee)) {

     $aaa=$rr['username'];
  }
  $u=$aaa;
// echo$u;exit;

}



if ($u) {
  




$key2=uniquekey("comment","commentkey");
//$id2=keytoid("logintable","lkey",$key2);
$id3=keytoid("blog","blogkey",$key);
$qry="insert into comment (commentkey,loginid,comment,blogid,name) values('".$key2."','".$id."','".$a."','".$id3."','".$u."')";
 //echo $qry;exit;
  $exe=mysql_query($qry);
 header('Refresh:1');
  }



else
{
  echo "<script>alert('comment not post')</script>"; 
}
  }

//FEEDBACK

function feedback($a,$key)
  {

    $id=keytoid("logintable","lkey",$key);
    $key1=uniquekey("feedback","fbkey");
    $date1=date('Y-m-d');
    $qry="insert into feedback(fbkey,feedback,fdate,loginid) values('".$key1."','".$a."','".$date1."','".$id."')";
   // echo $qry;exit;
    $exe=mysql_query($qry);
    $qryy="select * from logintable where id='".$id."'  ";
 // echo $qry;exit;
  $exc=mysql_query($qryy);

$rr=null;
  while ($k=mysql_fetch_array($exc))
  {
    $rr=$k['usertype'];
  }

    if($exe)
    {
      echo"<script>alert('Thank you for letting us know about this')</script>";
      if($rr==2)
      {
      header('Refresh:1; URL=userhome.php');
      }
      else
      {
        header('Refresh:1; URL=agencyhome.php');
      }
    }
    else
   {
      echo"<script>alert('feedback not submited try again')</script>";
   }


  }
   function adminfeedbackview()
  {
     $qry="select * from feedback inner join agency on feedback.loginid=agency.loginid ";
     //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;

  }

function adminfeedbackview2()
  {
     $qry="select * from feedback inner join user on feedback.loginid=user.loginid ";
     //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
    
  }

  function seluserfeedbackupdate($key)
  {
    $id=keytoid("login","loginkey",$key);
    $qry="select * from feedback where loginid='".$id."'";
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }
  function userfeedbackupdate($a,$key1)
  {
    $id=keytoid("feedback","fbkey",$key1);
    $qry="update feedback set feedback='".$a."'
     where id='".$id."'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
if($exe)
    {
      echo"<script>alert('Edit successful')</script>";
    }
    else
      echo"<script>alert('Edit unsuccessful')</script>";

  }
  function userfeedbackview($key)
  {
    $id=keytoid("login","loginkey",$key);
    $qry="select * from feedback where loginid='".$id."'";
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
    {
      $ar[]=$rr;

    }
    return $ar;
  }
   function userfeedbackdelete($key)
  {
  
    $id=keytoid("feedback","feedbackkey",$key);
    $qry="delete from feedback where id='".$id."'";
  // echo $qry;exit;
    $exe=mysql_query($qry);
    header("location:donorfeedbackview.php");

  }

 function unlike($key1,$key2){

  $b=keytoid("blog","blogkey",$key2);
  $id=keytoid("logintable","lkey",$key1);
  $qry="update likes set likes='-1' where blogid='".$b."' and loginid='".$id."' ";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $qry2="update blog set likes=likes-'1'where id='".$b."'"; 
  //echo $qry2;exit;
  $ex=mysql_query($qry2);
  header("location:blogview.php?k={$key2}");  

  }

function like($key1,$key2)
{ 
  $b=keytoid("blog","blogkey",$key2);
  $id=keytoid("logintable","lkey",$key1);
  $key=uniquekey("likes","likekey");
  $qry="insert into likes (blogid,loginid,likekey,likes) values('".$b."','".$id."','".$key."','1') ";
  //echo $qry;exit;
$exe=mysql_query($qry);
  $qry2="update blog set likes=likes+'1'where id='".$b."'"; 
 // echo $qry2;exit;;
$ex=mysql_query($qry2);
header("location:blogview.php?k={$key2}");

}

function totallikes($key)
{
$b=keytoid("blog","blogkey",$key);
$qry="select likes from blog where id='".$b."'";
// echo$qry;exit;

$exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;


}

function totalcomments($key){

$b=keytoid("blog","blogkey",$key);
$qry="select count(comment) from comment where blogid='".$b."'";
 // echo$qry;exit;

$exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar=$rr['count(comment)'];
}
return $ar;

}


function totalcommentsall(){


$qry="select blogid,count(comment) from comment group by blogid  ";
 // echo$qry;exit;

$exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
// print_r($ar);

return $ar;

}

function userlike($key,$key1){

    $bd=keytoid("blog","blogkey",$key);
    $id=keytoid("logintable","lkey",$key1);

    $qry="select * from likes where blogid='".$bd."' and loginid='".$id."' ";
    // echo$qry;exit;
    $exe=mysql_query($qry);
    $ar=array();

    while($rr=mysql_fetch_array($exe))
{
    $ar=$rr['likes'];
}
if ($ar==1) {
  $ar=$ar;
}
else{
  $ar=-1;
}
    return $ar;

}

function countblogcategory(){
  $qry="select category, COUNT( * ) from blog group by category";
  $exe=mysql_query($qry);
    $ar=array();

    while($rr=mysql_fetch_array($exe))
{

    
    $ar[]=$rr;
    
}
    return $ar;

}

//ananda
function prichatlist($key)
{  
  $id=keytoid("logintable","lkey",$key);
  $qry="select distinct senderid,receiverid from chat where receiverid='".$id."' or senderid='".$id."' order by dateee desc";
  //echo$qry;exit;
  $exe=mysql_query($qry);
  $ca=array();
  $art=array();
  $artt=array();
 while($rr=mysql_fetch_array($exe))
{    
  if($rr['receiverid']!==$id)
  {
    $art[]=$rr['receiverid'];
   }
   if($rr['senderid']!==$id)
   {
    $artt[]=$rr['senderid'];
  }
}
// 


$crt=array_merge($art,$artt);
$crt=array_unique($crt);
// print_r($crt);
foreach ($crt as $keyy => $value) {
  
  $ar=$value;
// echo$ar;
        $qry1="select usertype from logintable where id='".$ar."' ";
        //echo$qry1;
        $exe1=mysql_query($qry1);
        while($rr1=mysql_fetch_array($exe1))
        {
          $ar1=$rr1['usertype'];
        // echo$ar1; 
          if ($ar1==1) 
          {
            $qry2="select * from chat where chat.senderid in ('".$ar."','".$id."') and chat.receiverid in ('".$ar."','".$id."') order by time desc limit 1 ";
                $exe2=mysql_query($qry2);
              while($rr2=mysql_fetch_array($exe2))
                 {  
                    $ar2=$rr2['senderid'];    
                 }

                 if($ar2==$id)
                 {
                   $qry6="select * from chat inner join agency on chat.receiverid=agency.loginid where receiverid='".$ar."' and senderid='".$id."' order by time desc limit 1 ";
                   $exe6=mysql_query($qry6);
              while($rr6=mysql_fetch_array($exe6))
                 {  
                    $path="uploads/".$rr6['akey']."/".$rr6["agencydp"];
                    $rr6['pathpic']=$path; 
                    if(strlen($rr6['chat'])>40)
                    {
                      $rry=$rr6['chat'];

                      $rest['chat'] = substr($rry, 0, 45); 
                      $rest['chat'] = "".$rest['chat']."...";
                      $rr6['chat']=$rest['chat'];
                    } 
                    $ar6[]=$rr6;    
                 }

                 }
                 elseif($ar2==$ar)
                 {
                  $qry7="select * from chat inner join agency on chat.senderid=agency.loginid where receiverid='".$id."' and senderid='".$ar."' order by time desc limit 1 ";
                   $exe7=mysql_query($qry7);
              while($rr7=mysql_fetch_array($exe7))
                 { 
                    $path="uploads/".$rr7['akey']."/".$rr7["agencydp"];
                    $rr7['pathpic']=$path; 
                    if(strlen($rr7['chat'])>40)
                    {
                      $rry=$rr7['chat'];

                      $rest['chat'] = substr($rry, 0, 45); 
                      $rest['chat'] = "".$rest['chat']."...";
                      $rr7['chat']=$rest['chat'];
                    }     
                    $ar6[]=$rr7;    
                 }
                 }
                 $ca=array_merge($ca,$ar6);
                 unset($ar6);
            //echo$qry2;exit;
          }
          elseif($ar1==2)
          {
            $qry3="select *  from chat where chat.senderid in ('".$ar."','".$id."') and chat.receiverid in ('".$ar."','".$id."') order by time desc limit 1";
              //śecho$qry3;exit;
             $exe3=mysql_query($qry3);
              while($rr3=mysql_fetch_array($exe3))
                 {    
                   $ar3=$rr3['senderid'];    
                 }
                 

                 if($ar3==$id)
                 {
                  $qry4="select * from chat inner join user on chat.receiverid=user.loginid where receiverid='".$ar."' and senderid='".$id."' order by time desc limit 1 ";
                   $exe4=mysql_query($qry4);
              while($rr4=mysql_fetch_array($exe4))
                 {    
                   $path="uploads/".$rr4['ukey']."/".$rr4["userdp"];
                   $rr4['pathpic']=$path;
                   if(strlen($rr4['chat'])>40)
                    {
                      $rry=$rr4['chat'];

                      $rest['chat'] = substr($rry, 0, 45); 
                      $rest['chat'] = "".$rest['chat']."...";
                      $rr4['chat']=$rest['chat'];
                    } 
                   $ar4[]=$rr4;    
                 }

                 }
                 elseif($ar==$ar3)
                  {
                    $qry5="select * from chat inner join user on chat.senderid=user.loginid where receiverid='".$id."' and senderid='".$ar."' order by time desc limit 1 ";
                   $exe5=mysql_query($qry5);
              while($rr4=mysql_fetch_array($exe5))
                 {    
                      $path="uploads/".$rr4['ukey']."/".$rr4["userdp"];
                      $rr4['pathpic']=$path; 
                      if(strlen($rr4['chat'])>40)
                    {
                      $rry=$rr4['chat'];

                      $rest['chat'] = substr($rry, 0, 45); 
                      $rest['chat'] = "".$rest['chat']."...";
                      $rr4['chat']=$rest['chat'];
                    } 
                      $ar4[]=$rr4;    
                 }


                  }

                 $ca=array_merge($ca,$ar4);
                 unset($ar4);
          }

        }




}
 // print_r ($ca);exit;
return $ca;

}

function onlinechat($key,$did)
{

$qry2="select distinct  senderid from chat where receiverid='".$key."' ";
$exe2=mysql_query($qry2);
$arr2=array();
$arr21=array();
$ak=array();
while($rr2=mysql_fetch_array($exe2)) {
  
  $arr21[]=$rr2['senderid'];

}

$qry3="select distinct receiverid from chat where senderid='".$key."' ";
$exe3=mysql_query($qry3);
while($rr3=mysql_fetch_array($exe3)) {


$arr2[]=$rr3['receiverid'];

}


// print_r($arr2);
$arr2=array_unique($arr2);
$arr21=array_unique($arr21);

$arr2=array_merge($arr2,$arr21);
// print_r($arr2);
$str=0;
$dm=",";

foreach ($arr2 as $keey => $value) 
{
 
$str="".$str."".$dm."".$value."";

}

$qry4="select id,usertype from logintable where id not in(".$str.") and status='1'";
// echo$qry4;exit;
$exe4=mysql_query($qry4);
while($rr4=mysql_fetch_array($exe4)) 
{
  $arr3=$rr4['id'];
  $arr31=$rr4['usertype'];

  if($arr31==1)

{
   $qry="select * from agency inner join logintable on logintable.id=agency.loginid where loginid='".$arr3."' and loginid not in(".$did.",".$key.") order by onlinestatus desc";
   //echo$qry10;
   $exe=mysql_query($qry);
   $ar=array();
      while($rr=mysql_fetch_array($exe))
  {
      $path="uploads/".$rr['akey']."/".$rr["agencydp"];
      $rr['pathpic']=$path; 
      $ar[]=$rr;
  }
$ak=array_merge($ak,$ar);
unset($ar);
}
  else if ($arr31==2)
  {
      $qry10="select * from user inner join logintable on logintable.id=user.loginid where loginid='".$arr3."' and loginid not in(".$did.",".$key.") order by onlinestatus desc";
      $exe10=mysql_query($qry10);
      $ar10=array();
      while($rr10=mysql_fetch_array($exe10))
    {
      $path="uploads/".$rr10['ukey']."/".$rr10["userdp"];
      $rr10['pathpic']=$path;  
      $ar10[]=$rr10;
    }
    $ak=array_merge($ak,$ar10);
    unset($ar);
  }
}



    
return $ak;
}




function agencychatlist($id){

  $qry="select distinct(bookings.loginid) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."'";
  // echo$qry;exit;
  $exe=mysql_query($qry);
  $ab=array();
  while ($r=mysql_fetch_array($exe)) {
    # code...
    $a=$r['loginid'];
  

// echo$a;exit;
/*  echo$a['start'];exit;*/
/*print_r($a);*/

$qry1="select id from chat where senderid='".$id."' and receiverid='".$a."' or senderid='".$a."' and receiverid='".$id."'   ";
$exe1=mysql_query($qry1);
if (mysql_num_rows($exe1)==0) { 
$qry2="select * from user where user.loginid='".$a."'";
$exe2=mysql_query($qry2);
while ($rr=mysql_fetch_array($exe2)) {
  $path="uploads/".$rr['ukey']."/".$rr["userdp"];
  $rr['pathpic']=$path;  
  $ab[]=$rr;
}

 }



}
if($ab){
/*print_r($ab);exit;*/
return $ab;}
}

function onlinestastus(){
  $qry="select  * from logintable";
  $exe=mysql_query($qry);
  while ($r=mysql_fetch_array($exe)) {
    $ar[]=$r;
    # code...
  }

  return $ar;
}

function userchatlist($id){

  $qry="select distinct(packages.loginid) from bookings inner join packages on packages.id=bookings.packageid where bookings.loginid='".$id."'";
   // echo$qry;exit;
  $exe=mysql_query($qry);
  $ab=array();
  while ($r=mysql_fetch_array($exe)) {
    # code...
    $a=$r['loginid'];
  

// echo$a;exit;
/*  echo$a['start'];exit;*/
/*print_r($a);*/

$qry1="select id from chat where senderid='".$id."' and receiverid='".$a."' or senderid='".$a."' and receiverid='".$id."'   ";
$exe1=mysql_query($qry1);
if (mysql_num_rows($exe1)==0) { 
$qry2="select * from agency  where agency.loginid='".$a."'";//chec
$exe2=mysql_query($qry2);
while ($rr=mysql_fetch_array($exe2)) {
  $path="uploads/".$rr['akey']."/".$rr["agencydp"];
  $rr['pathpic']=$path;  
  $ab[]=$rr;
}

 }



}
if($ab){
/*print_r($ab);exit;*/
return $ab;}
}



function onlinechat2($key,$did)
{
     //$id=keytoid("chat","chkey");
    $qry="select * from logintable inner join agency on agency.loginid=logintable.id  where logintable.onlinestatus='1' and lkey!='".$key."' and logintable.id!='".$did."'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;
}



function onlinechatactive($id)
{
  $qry="select usertype from logintable where id='".$id."'";

  $exe=mysql_query($qry);

    while($rr=mysql_fetch_array($exe))
  {
    $ar=$rr['usertype'];
  }
    if($ar==1)
    {
    $qryr="select * from  agency  where loginid='".$id."'";

    $exe=mysql_query($qryr);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
        {
            $path="uploads/".$rr['akey']."/".$rr["agencydp"];
            $rr['pathpic']=$path;  
            $arr[]=$rr;
        }
        return $arr;
    }
    elseif($ar==2)
    {
        $qryrr="select * from  user  where loginid='".$id."'";
        $exe=mysql_query($qryrr);
        $ar=array();
        while($rr=mysql_fetch_array($exe))
        {
            $path="uploads/".$rr['ukey']."/".$rr["userdp"];
            $rr['pathpic']=$path;  
            $arr[]=$rr;
        }
        return $arr;
    }

}

function chat($b,$key,$did)
{
  // echo "hi";exit;

  $id=keytoid("logintable","lkey",$key);
  $d=date('Y-m-d');
  $k=uniquekey("chat","chkey");
 
  $qry="insert into chat(chkey,chat,senderid,receiverid,dateee,v)values('".$k."','".$b."','".$id."','".$did."','".$d."','1')";
  //echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    header('Refresh:1;');
    // echo "<script>alert('send successfully')</script>";
  }
  else
  {
    // echo "<script>alert('Unsuccessfully')</script>";
  }
}

/*function agencychat($b,$key,$did)
{
  // echo "hi";exit;

  $id=keytoid("logintable","lkey",$key);
  $d=date('Y-m-d');
  $k=uniquekey("chat","chkey");
 
  $qry="insert into chat(chkey,chat,senderid,receiverid,dateee)values('".$k."','".$b."','".$id."','".$did."','".$d."')";
  //echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    header('Refresh:1;');
    // echo "<script>alert('send successfully')</script>";
  }
  else
  {
    // echo "<script>alert('Unsuccessfully')</script>";
  }

}
function userchat($b,$key,$did)
{
  // echo "hi";exit;

  $id=keytoid("logintable","lkey",$key);
  $d=date('Y-m-d');
  $k=uniquekey("chat","chkey");
  // $t=gmmktime();
  $qry="insert into chat(chkey,chat,senderid,receiverid,dateee)values('".$k."','".$b."','".$id."','".$did."','".$d."')";
   //echo $qry;exit;
  $exe=mysql_query($qry);
  if($exe)
  {
    header('Refresh:1;');
    // echo "<script>alert('send successfully')</script>";
  }
  else
  {
  
    // echo "<script>alert('Unsuccessfully')</script>";
  }

}*/

function retrivemess($key,$did){
  $id=keytoid("logintable","lkey",$key);
   $qry="select * from chat where receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."') order by time ";
    //echo $qry;exit;
    $e=mysql_query($qry);
    $rr=array();
    while($k=mysql_fetch_array($e))
    {
      $rr[]=$k;
    }
    return $rr;

}



  /*function usermsg($key,$did)
  {
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from chat where receiverid='".$did."' and senderid='".$id."'";
    // echo $qry;exit;
    $e=mysql_query($qry);
    $rr=array();
    while($k=mysql_fetch_array($e))
    {
      $rr[]=$k;
    }
    return $rr;
  }
  function agencymsg($key,$did)
  {
    $id=keytoid("logintable","lkey",$key);
    $qry="select * from chat where receiverid='".$id."' and senderid='".$did."'";
    $e=mysql_query($qry);
    $rr=array();
    while($k=mysql_fetch_array($e))
    {
      $rr[]=$k;
    }
    return $rr;
  }*/
  function onlinechat1()
{
     //$id=keytoid("chat","chkey");
    $qry="select * from logintable inner join agency on agency.loginid=logintable.id where logintable.onlinestatus='1'";
    // echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;
}

  function rating($a,$key,$p,$ag,$r,$ar,$arr)//ananda

  {
    $id=keytoid("logintable","lkey",$key);
    $key1=uniquekey("rating","ratekey");
 $id2=keytoid("agency","akey",$ag);
  $id3=keytoid("packages","pkey",$p);
   $date1=date('Y-m-d');
    $qry="insert into rating (ratekey,review,loginid,packageid,agencyid,rdate,rating,arating,head) values('".$key1."','".$a."','".$id."','".$id3."','".$id2."','".$date1."','".$r."','".$ar."','".$arr."')";
    //echo $qry;exit;
$exe1=mysql_query($qry);
//package
$qrry="select sum(rating),count(rating) from rating where packageid='".$id3."' and agencyid='".$id2."'" ;

 $exe=mysql_query($qrry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar=$rr['sum(rating)'];
    $arr=$rr['count(rating)'];
}

$prating=($ar/($arr*5))*5;
// echo$prating;exit;
$qryy="update packages set rating ='".$prating."',ratecount='".$arr."' where id='".$id3."'";
$exe11=mysql_query($qryy);
// echo$qryy;exit;
//agency
$qrry1="select sum(arating),count(arating) from rating where packageid='".$id3."' and agencyid='".$id2."'" ;

 $exe111=mysql_query($qrry1);
    $ar1=array();
    while($rr1=mysql_fetch_array($exe111))
{
    $ar1=$rr1['sum(arating)'];
    $arr1=$rr1['count(arating)'];
}

$arating=($ar1/($arr1*5))*5;
// echo$prating;exit;
$qryy1="update agency set arating ='".$arating."' ,aratecount='".$arr1."' where id='".$id2."'";
$exe111=mysql_query($qryy1);







if($exe1)
{
echo"<script> alert('rated successfull')</script>";
header('location:userbookingview.php');
}
else
{
  echo"<script> alert('rating unsuccessfull')</script>";
}
//header('Refresh:1; URL=login.php');
  }

function updaterating($a,$key,$p,$ag,$r,$ar,$arr){

    $id=keytoid("logintable","lkey",$key);
    $key1=uniquekey("rating","ratekey");
    $id2=keytoid("agency","akey",$ag);
    $id3=keytoid("packages","pkey",$p);
    // $date1=date('Y-m-d');
    $qry="update rating set review='".$a."',rating='".$r."',arating='".$ar."',head='".$arr."' where loginid='".$id."' and packageid='".$id3."' and agencyid='".$id2."'";
    //echo $qry;exit;
  $exe1=mysql_query($qry);
  //package
  $qrry="select sum(rating),count(rating) from rating where packageid='".$id3."' and agencyid='".$id2."'" ;

 $exe=mysql_query($qrry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar=$rr['sum(rating)'];
    $arr=$rr['count(rating)'];
}

$prating=($ar/($arr*5))*5;
// echo$prating;exit;
$qryy="update packages set rating ='".$prating."',ratecount='".$arr."' where id='".$id3."'";
$exe11=mysql_query($qryy);
// echo$qryy;exit;
//agency
$qrry1="select sum(arating),count(arating) from rating where packageid='".$id3."' and agencyid='".$id2."'" ;

 $exe111=mysql_query($qrry1);
    $ar1=array();
    while($rr1=mysql_fetch_array($exe111))
{
    $ar1=$rr1['sum(arating)'];
    $arr1=$rr1['count(arating)'];
}

$arating=($ar1/($arr1*5))*5;
// echo$prating;exit;
$qryy1="update agency set arating ='".$arating."' ,aratecount='".$arr1."' where id='".$id2."'";
$exe111=mysql_query($qryy1);







if($exe1)
{
echo"<script> alert('rated successfull')</script>";
header('location:userbookingview.php');
}
else
{
  echo"<script> alert('rating unsuccessfull')</script>";
}
//header('Refresh:1; URL=login.php');

}








function agencypackagereview($key)
{
  $id=keytoid("logintable","lkey",$key);
  $qry="select * from rating inner join user on user.loginid=rating.loginid inner join agency on rating.agencyid=agency.id inner join packages on rating.packageid=packages.id where agency.loginid='".$id."'";
// echo $qry;exit;
  $exe=mysql_query($qry);
    $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
// print_r($ar);
return $ar;


}


function viewrateing($key,$p,$ag){
   $id=keytoid("logintable","lkey",$key);
   $id2=keytoid("agency","akey",$ag);
    $id3=keytoid("packages","pkey",$p);
   $qry="select * from rating where loginid='".$id."' and packageid='".$id3."' and  agencyid='".$id2."'";
  $exe=mysql_query($qry);


   $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;

}

function usermainheader($key){//unfinished
    $r=keytoid("logintable","lkey",$key);
  $qry="select id, count(vie) from notification where reciever='".$r."' and vie='0'";
  $exe=mysql_query($qry);
   $ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;
   
    
}

function usedcards($key){
$id=keytoid("logintable","lkey",$key);

$qry="select distinct(cardno),currentdate,nameholder from card where loginid='".$id."'";
// echo$qry;exit;
 $exe=mysql_query($qry);
$ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;



}

function orderhistory($key){

$id=keytoid("logintable","lkey",$key);

$qry="select * from bookings inner join packages on packages.id=bookings.packageid where bookings.loginid='".$id."' and bookings.progress='2'";
 //echo$qry;exit;
 $exe=mysql_query($qry);
$ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;

}

function tracker($key){

$id=keytoid("logintable","lkey",$key);
$qry="select * from bookings inner join packages on bookings.packageid=packages.id  inner join user on user.loginid=bookings.loginid where packages.loginid='".$id."' and bookings.paymentstatus='1'";
//echo$qry;exit;
$exe=mysql_query($qry);
$ar=array();
    while($rr=mysql_fetch_array($exe))
{
    $ar[]=$rr;
}
return $ar;

}

function bookingstatus($d,$de){

$qry="update bookings set progress='".$de."' where bkey='".$d."'";
//echo$qry;exit;
$exe=mysql_query($qry);


$qryy="select loginid,packageid from bookings where bkey='".$d."' ";
$exee=mysql_query($qryy);
$ar=array();
    while($rr=mysql_fetch_array($exee))
{
    $ar=$rr['loginid'];
    $aa=$rr['packageid'];
}

$qr="select packagename,ph from packages  inner join agency on packages.loginid=agency.loginid where packages.id='".$aa."'";
$exx=mysql_query($qr);
//echo$qr;exit;
    while($rrr=mysql_fetch_array($exx))
{
    
    $arr2=$rrr['packagename'];
    $arr3=$rrr['ph'];
}

$qrq="select loginid from packages where id='".$aa."' ";

$exqx=mysql_query($qrq);
//echo$qr;exit;
    while($rrr1=mysql_fetch_array($exqx))
{
    
    $arr=$rrr1['loginid'];
    
}


$key1=uniquekey("notification","nkey");

if($de==-1)
  {
    $a="The Package ".$arr2."  has been suspended ,for more information Contact  ".$arr3."  ";
  }
  else if($de==0)
  {
    $a="Your Package ".$arr2." will start soon ,for more information Contact  ".$arr3."";
  }
  elseif ($de==1) {
    $a="Your Package ".$arr2." has been Started";
    //echo$a;exit;
  }
  elseif ($de==2) {
    $a="You have finished Your Journey,Rate Your Review by Clicking on Write a Review on Your Cart.See you soon -Imperials";
  }


$qryq="insert into notification(nkey,notifi,loginid,reciever,vie) values('".$key1."','".$a."','".$arr."','".$ar."','1')";
              $e2=mysql_query($qryq);
//echo$qryq;exit;


if ($exe) {
 
echo"<script> alert('Status updated')</script>";
header('location:agencytracker.php');
}
else
{

echo"<script> alert('Status updation failed')</script>";
header('Refresh:1; URL=agencytracker.php');
}



}

function publicreviewview($key){

$id=keytoid("packages","pkey",$key);

$qry="select * from rating inner join user on rating.loginid=user.loginid where packageid='".$id."'";
// echo$qry;exit;
$exe=mysql_query($qry);
$a=array();
$path=0;
  while ($rr=mysql_fetch_array($exe)) 
{
   $path="uploads/".$rr['ukey']."/".$rr["userdp"];
        $rr['pathpic']=$path;
   $a[]=$rr;

}
return  $a;
}

//mail//bug
function sendsub($sub,$con)
{

$qry="select mail from subscription";
$exe=mysql_query($qry);
$ar="adminak@imperial.com";
while($r=mysql_fetch_array($exe)) {
  
  $arr=$r['mail'];
  $ar="".$ar.",".$arr."";
}
  // echo$con;exit;

$s=mail($ar,$sub,$con,"from:imperial.ak.livetotravel@gmail.com");
if($s){
  echo "<script>alert('success')</script>";
  /*print_r(error_get_last());*/
}
else{
echo "<script>alert('failed')</script>";
/*print_r(error_get_last());*/
}

/*print_r(error_get_last());*/



}

function sendsub1($sub,$con,$mail)
{

$ar=$mail;
/* echo$ar,$sub,$con;exit;*/

$s=mail($ar,$sub,$con,"from:imperial.ak.livetotravel@gmail.com");
if($s){
  echo "<script>alert('success')</script>";
/*  print_r(error_get_last());*/
}
else{
echo "<script>alert('failed')</script>";
/*print_r(error_get_last());*/
}
/*
print_r(error_get_last());*/



}

function homeblogtravel($l){

$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='travel' and blog.status='1 'order  by likes asc limit ".$l."";
// echo$qry;exit;
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;
}



function homeblogtech($l)
{


$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='Tech' and blog.status='1' order  by likes asc limit ".$l."";
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry1;exit;
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;


}

function rev1(){


$qry="select distinct(date),comkey from comissions order by date desc";
$exe=mysql_query($qry);
$ca=array();
while($rr=mysql_fetch_array($exe))
{
  $arr=$rr['comkey'];
  $ar=$rr['date'];

  if(date("m", strtotime($ar)) == date("m"))
{
    $qry2="select * from comissions inner join user on comissions.userloginid=user.loginid inner join agency on comissions.agencyloginid=agency.loginid where date='".$ar."' and comkey='".$arr."'";
    $exe2=mysql_query($qry2);
    while($rr2=mysql_fetch_array($exe2))
    {
      $ar2[]=$rr2;
    }
    $ca=array_merge($ca,$ar2);
    unset($ar2);
    
}


}
if($ca==null)
{

    $ar2[]=-1;
    
    return $ar2;
}

else
{
  return $ca;

}


}



function rev2(){


$qry="select distinct(date),comkey from comissions order by date desc";
$exe=mysql_query($qry);
$ar2=array();
$ca=array();
// date("m", strtotime("previous month"));

while($rr=mysql_fetch_array($exe))
{

  $arr=$rr['comkey'];
  $ar=$rr['date'];

  if(date("m", strtotime($ar)) == (date("m", strtotime("previous month"))))
{
    $qry2="select * from comissions inner join user on comissions.userloginid=user.loginid inner join agency on comissions.agencyloginid=agency.loginid where date='".$ar."' and comkey='".$arr."'";
    // echo$qry2;exit;
     $exe2=mysql_query($qry2);
    while($rri=mysql_fetch_array($exe2))
    {
      $ar2[]=$rri;
      
    }
    // print_r($ar2);
    $ca=array_merge($ca,$ar2);
    
    
}

unset($ar2);
}
if($ca==null)
{

    $ar2[]=-1;
    
    return $ar2;
}

else
{
  return $ca;

}


}



function blogcatview($cat){

if($cat=='user')
{

$query="select *from blog inner join logintable on logintable.id=blog.loginid inner join user on blog.loginid=user.loginid where logintable.usertype='2' and blog.status='1' order by date desc limit 6";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;


}
elseif ($cat=='agency') {
  
$query="select *from blog inner join logintable on logintable.id=blog.loginid inner join agency on blog.loginid=agency.loginid where logintable.usertype='1' and blog.status='1' order by date desc limit 6";
      //echo $query;exit;
      $exe=mysql_query($query);
      $ar = array();
      $path=0;
      while($x=mysql_fetch_array($exe))
       {
        $path="uploads/".$x['blogkey']."/".$x["bimage"];
        $x['pathpic']=$path;
        $ar[]=$x;# code...
      }
      return $ar;


}
else{




$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='".$cat."' and blog.status='1 'order  by likes asc limit 8";
// echo$qry;exit;
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;
}
}



function homeblogfood($l){


$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='Food' and blog.status='1' order  by likes asc limit ".$l."  ";
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry1;exit;
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;


}


function homeblogcr($l){


$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='creative' and blog.status='1' order  by likes asc limit ".$l."";
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry1;exit;
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;


}


function homeblognew($l){


$qry="select usertype,blogkey from blog inner join logintable on blog.loginid=logintable.id where category='news' and blog.status='1' order  by likes asc limit ".$l."";
$exe=mysql_query($qry);
$ca=array();

while($r=mysql_fetch_array($exe)) 
{
  $arr1=$r['blogkey'];
  $arr=$r['usertype'];
  
  if ($arr==1) {
    $qry1="select * from blog inner join agency on agency.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry1;exit;
    $exe1=mysql_query($qry1);

while($r1=mysql_fetch_array($exe1)) 
{

  if(strlen($r1['content'])>125)
                    {
                      $rry=$r1['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r1['content']=$rest['content'];
                    } 
  $path="uploads/".$r1['blogkey']."/".$r1["bimage"];
  $r1['pathpic']=$path;
  $arr11[]=$r1;
  }

$ca=array_merge($ca,$arr11);
unset($arr11);
}
elseif ($arr==2) {
    $qry2="select * from blog inner join user on user.loginid=blog.loginid where blog.blogkey='".$arr1."' and blog.status='1' ";
    // echo$qry2;
    $exe2=mysql_query($qry2);

while($r2=mysql_fetch_array($exe2)) 
{
  if(strlen($r2['content'])>40)
                    {
                      $rry=$r2['content'];

                      $rest['content'] = substr($rry, 0, 125); 
                      $rest['content'] = "".$rest['content']."...";
                      $r2['content']=$rest['content'];
                    } 
  $path="uploads/".$r2['blogkey']."/".$r2["bimage"];
  $r2['pathpic']=$path;
  $arr12[]=$r2;
  }

$ca=array_merge($ca,$arr12);
unset($arr12);
}

}
// print_r($ca);exit;
return$ca;


}


function selectlatestpackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}




function selectholidaypackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.category='holidays' order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}


function selectsummerpackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.category='holiday' order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}

function selectcruisepackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.category='cruise' order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}

function selectfamilypackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.category='family' order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}

function selectluxurypackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.packageamount>=500000 order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}

function selectadventurepackageviewx1()
{
$qry="select * from packages inner join agency on packages.loginid=agency.loginid where packages.category='adventure' order by date desc limit 6" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
      $path="uploads/".$rr['pkey']."/".$rr["pimage"];
        $rr['pathpic']=$path;
        $ar[]=$rr;

    }
    return $ar;

}
/**/
function contactview()
{
$qry="select * from subscription" ;
    //echo $qry;exit;
    $exe=mysql_query($qry);
    $ar=array();
    $path=0;
    while($rr=mysql_fetch_array($exe))
    {
      
     
        $ar[]=$rr;

    }
    return $ar;

}

////////////////////////////////////////////// 

function revn($key,$k,$p){

//overhere
 $id=keytoid("logintable","lkey",$key);
 #p->year
 #k->month
 $s=$p."-".$k;
 //echo$s;exit;
$qry="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and paymentstatus='1' ";
// echo$qry;exit;
$exe=mysql_query($qry);
    $ar;

    while($rr=mysql_fetch_array($exe))
    {
      
   
        $ar=$rr['count(packages.id)'];

       // echo$ar;exit;

    }
// 
    $qry1="select count(progress) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and progress='2' " ;
// echo$qry;exit;
$exe1=mysql_query($qry1);
 

    while($rr1=mysql_fetch_array($exe1))
    {
      
   
        $ar1=$rr1['count(progress)'];
        // echo$ar1;exit;

    }
//
    $qry2="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and cancelstatus='1' ";
// echo$qry;exit;
$exe2=mysql_query($qry2);
   
    $path=0;
    while($rr2=mysql_fetch_array($exe2))
    {
      
   
        $ar2=$rr2['count(packages.id)'];

    }
//
    $qry3="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%'  and progress='1'   ";
// echo$qry;exit;
$exe3=mysql_query($qry3);
   
    while($rr3=mysql_fetch_array($exe3))
    {
      
   
        $ar3=$rr3['count(packages.id)'];

    }
//
    $qry4="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and progress='-1'  ";
// echo$qry;exit;
$exe4=mysql_query($qry4);
   
    while($rr4=mysql_fetch_array($exe4))
    {
      
   
        $ar4=$rr4['count(packages.id)'];

    }

//
    $qry5="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and bookings.paymentstatus='1' ";
// echo$qry5;exit;
$exe5=mysql_query($qry5);
   
    while($rr5=mysql_fetch_array($exe5))
    {
      
   
        $ar5=$rr5['sum(packageamount)'];
// echo$ar5;exit;
    }

//
    if ($k>1) {
      # code...
    
    $rt=$k-1;
    $sp=$p."-".$rt;
  }
  else{

$rt=12;
$po=$p-1;
$sp=$po."-".$rt;
  }
    $qry6="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$sp."%' and bookings.paymentstatus='1' ";
  
 // echo$qry6;exit;
$exe6=mysql_query($qry6);
  
    while($rr6=mysql_fetch_array($exe6))
    {
      
   
        $ar6=$rr6['sum(packageamount)'];

    }

// print_r($ar);exit;
    if (!$ar5) {
      $ar5=0;
    }
     if (!$ar6) {
      $ar6=0;
    }
    $ar7=$ar5-$ar6;
   $arrt=array($ar,$ar1,$ar2,$ar3,$ar4,$ar5,$ar6,$ar7);

    // print_r($arrt);
    return $arrt;
}

////////////////////////

function revn2($key,$p){

//overhere
 $id=keytoid("logintable","lkey",$key);
 #p->year
 #k->month
 $s=$p;
 //echo$s;exit;
$qry="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and paymentstatus='1' ";
// echo$qry;exit;
$exe=mysql_query($qry);
    $ar;

    while($rr=mysql_fetch_array($exe))
    {
      
   
        $ar=$rr['count(packages.id)'];

       // echo$ar;exit;

    }
// 
    $qry1="select count(progress) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and progress='2' " ;
// echo$qry;exit;
$exe1=mysql_query($qry1);
 

    while($rr1=mysql_fetch_array($exe1))
    {
      
   
        $ar1=$rr1['count(progress)'];
        // echo$ar1;exit;

    }
//
    $qry2="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and cancelstatus='1' ";
// echo$qry;exit;
$exe2=mysql_query($qry2);
   
    $path=0;
    while($rr2=mysql_fetch_array($exe2))
    {
      
   
        $ar2=$rr2['count(packages.id)'];

    }
//
    $qry3="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%'  and progress='1'   ";
// echo$qry;exit;
$exe3=mysql_query($qry3);
   
    while($rr3=mysql_fetch_array($exe3))
    {
      
   
        $ar3=$rr3['count(packages.id)'];

    }
//
    $qry4="select count(packages.id) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and progress='-1'  ";
// echo$qry;exit;
$exe4=mysql_query($qry4);
   
    while($rr4=mysql_fetch_array($exe4))
    {
      
   
        $ar4=$rr4['count(packages.id)'];

    }

//
    $qry5="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$s."%' and bookings.paymentstatus='1' ";
// echo$qry5;exit;
$exe5=mysql_query($qry5);
   
    while($rr5=mysql_fetch_array($exe5))
    {
      
   
        $ar5=$rr5['sum(packageamount)'];
// echo$ar5;exit;
    }

//
    
$sp=$p-1;
  
    $qry6="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where packages.loginid='".$id."' and bdate like '%".$sp."%' and bookings.paymentstatus='1' ";
  
 // echo$qry6;exit;
$exe6=mysql_query($qry6);
  
    while($rr6=mysql_fetch_array($exe6))
    {
      
   
        $ar6=$rr6['sum(packageamount)'];

    }

// print_r($ar);exit;
    if (!$ar5) {
      $ar5=0;
    }
     if (!$ar6) {
      $ar6=0;
    }
    $ar7=$ar5-$ar6;
    // echo$ar6;exit;
   $arrt=array($ar,$ar1,$ar2,$ar3,$ar4,$ar5,$ar6,$ar7);

    // print_r($arrt);
    return $arrt;
}

////////////

function arevn($k,$p){

//overhere
 
 #p->year
 #k->month
 $s=$p."-".$k;
 //echo$s;exit;
$qry="select count(id) from bookings where bdate like '%".$s."%' and paymentstatus='1' ";
// echo$qry;exit;
$exe=mysql_query($qry);
    $ar;

    while($rr=mysql_fetch_array($exe))
    {
      
   
        $ar=$rr['count(id)'];

       // echo$ar;exit;

    }
// 
    $qry1="select count(progress) from  bookings  where  bdate like '%".$s."%' and progress='2' " ;
// echo$qry;exit;
$exe1=mysql_query($qry1);
 

    while($rr1=mysql_fetch_array($exe1))
    {
      
   
        $ar1=$rr1['count(progress)'];
        // echo$ar1;exit;

    }
//
    $qry2="select count(id) from bookings  where bdate like '%".$s."%' and cancelstatus='1' ";
 // echo$qry2;exit;
$exe2=mysql_query($qry2);
   
    $path=0;
    while($rr2=mysql_fetch_array($exe2))
    {
      
   
        $ar2=$rr2['count(id)'];

    }
//
    $qry3="select count(id)  from bookings where bdate like '%".$s."%'  and progress='1'   ";
// echo$qry;exit;
$exe3=mysql_query($qry3);
   
    while($rr3=mysql_fetch_array($exe3))
    {
      
   
        $ar3=$rr3['count(id)'];

    }
//
    $qry4="select count(id) from bookings where bdate like '%".$s."%' and progress='-1'  ";
// echo$qry;exit;
$exe4=mysql_query($qry4);
   
    while($rr4=mysql_fetch_array($exe4))
    {
      
   
        $ar4=$rr4['count(id)'];

    }

//
    $qry5="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where  bookings.bdate like '%".$s."%' and bookings.paymentstatus='1' ";
// echo$qry5;exit;
$exe5=mysql_query($qry5);
   
    while($rr5=mysql_fetch_array($exe5))
    {
      
   
        $ar5=$rr5['sum(packageamount)'];
// echo$ar5;exit;
    }

//
    if ($k>1) {
      # code...
    
    $rt=$k-1;
    $sp=$p."-".$rt;
  }
  else{

$rt=12;
$po=$p-1;
$sp=$po."-".$rt;
  }
    $qry6="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where  bookings.bdate like '%".$sp."%' and bookings.paymentstatus='1' ";
  
 // echo$qry6;exit;
$exe6=mysql_query($qry6);
  
    while($rr6=mysql_fetch_array($exe6))
    {
      
   
        $ar6=$rr6['sum(packageamount)'];

    }

// print_r($ar);exit;
    if (!$ar5) {
      $ar5=0;
    }
     if (!$ar6) {
      $ar6=0;
    }
    $ar7=$ar5-$ar6;
   $arrt=array($ar,$ar1,$ar2,$ar3,$ar4,$ar5,$ar6,$ar7);

    // print_r($arrt);
    return $arrt;
}

////////////////////////

function arevn2($p){

//overhere
 
 #p->year
 #k->month
 $s=$p;
 //echo$s;exit;
$qry="select count(id) from bookings where bdate like '%".$s."%' and paymentstatus='1' ";
// echo$qry;exit;
$exe=mysql_query($qry);
    $ar;

    while($rr=mysql_fetch_array($exe))
    {
      
   
        $ar=$rr['count(id)'];

       // echo$ar;exit;

    }
// 
    $qry1="select count(progress) from  bookings  where  bdate like '%".$s."%' and progress='2' " ;
// echo$qry;exit;
$exe1=mysql_query($qry1);
 

    while($rr1=mysql_fetch_array($exe1))
    {
      
   
        $ar1=$rr1['count(progress)'];
        // echo$ar1;exit;

    }
//
    $qry2="select count(id) from bookings  where bdate like '%".$s."%' and cancelstatus='1' ";
// echo$qry;exit;
$exe2=mysql_query($qry2);
   
    $path=0;
    while($rr2=mysql_fetch_array($exe2))
    {
      
   
        $ar2=$rr2['count(id)'];

    }
//
    $qry3="select count(id) from  bookings where bdate like '%".$s."%'  and progress='1'   ";
// echo$qry;exit;
$exe3=mysql_query($qry3);
   
    while($rr3=mysql_fetch_array($exe3))
    {
      
   
        $ar3=$rr3['count(id)'];

    }
//
    $qry4="select count(id) from bookings where bdate like '%".$s."%' and progress='-1'  ";
// echo$qry;exit;
$exe4=mysql_query($qry4);
   
    while($rr4=mysql_fetch_array($exe4))
    {
      
   
        $ar4=$rr4['count(id)'];

    }

//
    $qry5="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where bookings.bdate like '%".$s."%' and bookings.paymentstatus='1' ";
// echo$qry5;exit;
$exe5=mysql_query($qry5);
   
    while($rr5=mysql_fetch_array($exe5))
    {
      
   
        $ar5=$rr5['sum(packageamount)'];
// echo$ar5;exit;
    }

//
    
$sp=$p-1;
  
    $qry6="select sum(packageamount) from packages inner join bookings on packages.id=bookings.packageid where  bookings.bdate like '%".$sp."%' and bookings.paymentstatus='1' ";
  
 // echo$qry6;exit;
$exe6=mysql_query($qry6);
  
    while($rr6=mysql_fetch_array($exe6))
    {
      
   
        $ar6=$rr6['sum(packageamount)'];

    }

// print_r($ar);exit;
    if (!$ar5) {
      $ar5=0;
    }
     if (!$ar6) {
      $ar6=0;
    }
    $ar7=$ar5-$ar6;
   $arrt=array($ar,$ar1,$ar2,$ar3,$ar4,$ar5,$ar6,$ar7);

    // print_r($arrt);
    return $arrt;
}



function tilechange($k,$file=null){

$newfilename='hero_'.$k.'.jpg';
unlink("web/images/$newfilename");
$s="web/images";
    move_uploaded_file($file["tmp_name"],$s."/".$newfilename);

$po=move_uploaded_file($file["tmp_name"],"web/images/".$newfilename);
 
header("location:adminhome.php");
}

}

?>