<?php 
session_start();
 include_once("../Mobile_Detect.php");
 include_once("log.php");
 date_default_timezone_set('Asia/kolkata');
 
 $ip=$_SERVER['REMOTE_ADDR'];
 
 $detect=new Mobile_Detect;
 if($detect->ismobile())
          $mobile=1;
  else      
         $mobile=0;

 $pdfile=$_POST["put_ex_no"];
  $m=$mobile?"MOBILE":"PC";

 if(($pdfile=="BONAFIDE_PAGE")||($pdfile=="BATCH_1_INDEX")||($pdfile=="FRONT_PAGE")||($pdfile=="BATCH_2_INDEX"))  
{ 
        $gname=isset($_SESSION['name'])?$_SESSION['name']:'AAAA';
    logg($gname.'#'.$ip."#GCC_LAB#".$pdfile."#".$m."#".date('M d-y#l#h:i:s a')."#DOWNLOAD");
if(($pdfile=="BONAFIDE_PAGE")||($pdfile=="FRONT_PAGE"))
header("Location:../$pdfile.pdf"); 
 else
header("Location:$pdfile.pdf"); 
die();
}
else
{
	$red=$_POST['r_no'];

	$name=$_POST['sname'];
	if($red=='00')
{
	$name=". YOU'RE NAME";
	$gname='LAB';
	
}	
 $namee=strtolower($name);
 $namee=ucfirst($namee);
 $gname='';
 for($i=0;$namee[$i]!=" ";$i++)
 {
 $gname.=$namee[$i];
 }
 $cookie_name="name";
 $cookie_value=$gname;
 setcookie($cookie_name,$cookie_value,time()+(86400*90*30),"/");

 if(isset($_POST['view']))
 $mode='I';
 else
 $mode='D';
 if($mode==='I')
 $mo="VIEW";
 else
 $mo="DOWNLOAD";
 require_once('pdf_gen.php');
 $_SESSION['name']=$gname;
  logg($gname.'#'.$ip."#GCC_LAB#".$pdfile."#".$m."#".date('M d-y#l#h:i:s a')."#$mo");
 pdfgen($red,$name,$gname,$pdfile.".pdf",$mode,$mobile);
}
?>