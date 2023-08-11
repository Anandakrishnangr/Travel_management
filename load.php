

<!-- <script type="text/javascript">
  

var chatHistory = document.getElementById("messageBody");
chatHistory.scrollTop = chatHistory.scrollHeight;

</script> -->



        
<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();

require_once('C:\xampp\htdocs\TM FINAL\TM\Smarty\libs\internals\core.smarty_include_php.php');
$r3=null;

$did=$_COOKIE['chat'];

// if ($_SESSION['rec']) {

// 	echo$_SESSION['rec'];exit;
// 	# code...
// }

$key=$_COOKIE['loginkey'];
$id=keytoid("logintable","lkey",$key);
$e=$obj->retrivemess($key,$did);


$id=trim($id);
$id=keytoid("logintable","lkey",$key);
////////////////////////////////propic///////////////////////////////////
$spqry="select usertype from logintable where id ='".$did."'";
$spexe=mysql_query($spqry);
while ($spq=mysql_fetch_array($spexe)) {
  $sp1=$spq['usertype'];
  # code...
}
// echo$sp1;exit;
if ($sp1==1) {
  #agency
  $spqry2="select akey,agencydp from agency where loginid='".$did."'";
  $spexe2=mysql_query($spqry2);
while ($spq2=mysql_fetch_array($spexe2)) {
  $sp2=$spq2['akey'];
  $sp2=$sp2."/".$spq2['agencydp'];
  $pathpic="uploads/".$sp2."";
}

}
elseif ($sp1==2) {
  # user
  $spqry2="select ukey,userdp from user where loginid='".$did."'";
  $spexe2=mysql_query($spqry2);
while ($spq2=mysql_fetch_array($spexe2)) {
  $sp2=$spq2['ukey'];
  $sp2=$sp2."/".$spq2['userdp'];
    $pathpic="uploads/".$sp2."";
}
}
// echo$pathpic;exit;
//////////////////////////////////////////////////////////////////
$qr1="select count(id)from chat where receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."') ";
//echo$qr1;exit;
$e1=mysql_query($qr1);
    $rr1=array();
while($kk=mysql_fetch_array($e1))
    {
      $rr1=$kk['count(id)'];
  }
if(!$rr1){
  return;
}
  $rg=$rr1-1;

  // limit '".$rg."' 
       

$fqry="select * from chat where receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."') order by time desc limit 1 ";
$e1q=mysql_query($fqry);
    $kq=array();
while($kq=mysql_fetch_array($e1q))
    {

      $r1q=$kq['chat'];
       $r2q=$kq['receiverid'];
       $r3q=$kq['time'];
       if($kq['senderid']==$id)
       {
       $r4q=$kq['v'];
     }
    }



     
$key=$_COOKIE['loginkey'];
$did=$_COOKIE['chat'];
$id=$_COOKIE['chatii'];

$qrytt="select count(id) from chat where  receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."')";
//echo$qryt;exit;
$exx=mysql_query($qrytt);
$r=array();
if(!$exx)
{
  echo "no";exit;
}
while($kq=mysql_fetch_array($exx))
    {
      $r=$kq['count(id)'];
    }
// echo$r;echo$_COOKIE['ccount'];exit;
if ($r>$_COOKIE['ccount']) {
   setcookie("ccount",$r);
   $cco=1;
}
else{
  $cco=0;
}









$zqry="update chat set v='0' where receiverid ='".$id."' and senderid ='".$did."' ";
// echo$zqry;
$ze=mysql_query($zqry);


   $qry="select * from chat where receiverid in ('".$did."','".$id."') and senderid in ('".$id."','".$did."') order by time limit ".$rg." ";
    //echo $qry;exit;
    $e=mysql_query($qry);
    $rr=array();
   


/*$msg=$obj->usermsg($key,$did);
$smartyObj->assign("view",$msg);
$msg1=$obj->agencymsg($key,$did);
$smartyObj->assign("view1",$msg1);*/

/*
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['name'])AND($_POST['name'])!=null)
		{
			
			$b=trim($_POST['name']);
			$obj->chat($b,$key,$did);
		}
		else
		 echo "<script>alert('add message')</script>";
}

*/

?>




            



<?php

  while($k=mysql_fetch_array($e))
    {
       
      $r1=$k['chat'];
       $r2=$k['receiverid'];
       $r3=$k['time'];

  

    if ($id==$r2)
    {

    	$rc=$r1;
    
    

?>


            <div  id="messageBody" class="incoming_msg">
              <div class="incoming_msg_img"> <img alt="propic" src="<?=$pathpic?>" style=" border-radius: 50%;height: 35px;width:35px;" alt="sunil"></div>
              <div class="received_msg">
              	
              <div class="received_withd_msg">
                 
                  <p><?=$rc?> </p>
                  
                  
              <span class="time_date"> <?=$r3?></span></div>
              </div>
            </div>
<!-- {else} -->


<?php

 }


 else
    {

    	$rs=$r1;
    

?>


            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?=$rs?></p>
                <span class="time_date"> <?=$r3?></span> </div>
            </div>

            <?php
}
 }

?>



<!--  -->
<?php
 if ($id==$r2q)
    {

    	$rcc=$r1q;
    
    

?>


            <div  id="messageBody" class="incoming_msg">
              <div class="incoming_msg_img"> <img alt="propic" src="<?=$pathpic?>" style=" border-radius: 50%;height: 35px;width:35px;" alt="sunil"></div>
              <div class="received_msg">
              	
              <div class="received_withd_msg">
                 
                  <p><?=$rcc?> </p><div id="what"></div>
                  
                  
              <span class="time_date"> <?=$r3?></span></div>
              </div>
            </div>
<!-- {else} -->


<?php

 }


 else
    {

    	$rss=$r1q;
    

?>


            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?=$rss?></p><div id="what"></div>
                <span class="time_date"><?php  if($r4q==1){  ?><img src="web/ak/icon/s.png"  style="height: 15px;width: 20px;">&nbsp; <?php }elseif ($r4q==0) {
                 
                  ?> <img src="web/ak/icon/d.png" style="height: 15px;width: 20px;">  <?php }?>     <?=$r3q?></span> </div>
            </div>

            <?php
}
 

  if($cco==1)
  {

?>


<head>
  
   <script type="text/javascript">$(document).ready(function () {
    // Handler for .ready() called.
    $('html, div').animate({
        scrollTop: $('#what').offset().top
    },'fast');
});</script> 
</head>
<?php

}

?>





 <!-- {/if}          -->

 





  </html>