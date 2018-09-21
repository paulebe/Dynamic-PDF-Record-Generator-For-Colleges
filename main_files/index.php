<!DOCTYPE html>
<html>
<title>GCC LAB IV-CSE</title>
<link rel="icon" href="..\favicon.ico">
<!-- Mirrored from www.w3schools.com/w3css/demo_template_webpage.htm by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:04:53 GMT -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#009933">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#009933">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#009933">
<link rel="stylesheet" href="../w3.css">
<style>
/* Set the height of the grid so that left and right col can be 100% (adjust as needed) */
.w3-row {height: 500px}
    
/* Set a 100% height to left and right col */
.w3-col.m2, w3-col.m2 {heignht: 100%;}
    
/* On small screens, set grid height to 'auto' */
@media screen and (max-width: 601px) {
  .w3-row {height:auto;} 
}
.auto-style1 {
	font-size: x-large;
	
}
	.auto-style111 {
	font-size: xx-large;
	
}
.auto-style3 {
	font-size: large;
	color: #FF00FF;
}
.auto-style4 {
	font-size: x-large;
	font-weight: bold;
	color: #FF00FF;
}
.auto-style5 {
	font-size: x-large;
	color: #FF00FF;
}
.auto-style6 {
	color: #FF00FF
}
.auto-style7 {
	font-size: xx-large;
}
.auto-style8 {
	font-weight: bold;
}
.auto-style9 {
	color: #ff5722;
	font-size: large;
}
</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2734416081133608",
    enable_page_level_ads: true
  });
</script>

<script>
    
    
    // get location
var geodata;
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition,showError);
    } else {
        geodata="NOT SUPPORTED";
    }
}
function showPosition(position) {
     var latlon = position.coords.latitude + "," + position.coords.longitude;
     geodata="https://www.google.com/maps/search/?api=1&query="+latlon;     
   
}
function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            geodata = "User denied"
            break;
        case error.POSITION_UNAVAILABLE:
            geodata = "Unavailable."
            break;
        case error.TIMEOUT:
            geodata = "Timed out."
            break;
        case error.UNKNOWN_ERROR:
            geodata = "error occurred."
            break;
    }
}
    getLocation();
    console.log("Geodata="+geodata);
    
    
    
    
    
</script>









<script language="JavaScript">

//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////


//Disable right click script 
//visit http://www.rainbow.arch.scriptmania.com/scripts/ 
var message="Sorry, right-click has been disabled"; 
/////////////////////////////////// 
function clickIE() {if (document.all) {(message);return false;}} 
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) {(message);return false;}}} 
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;} 
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;} 
document.oncontextmenu=new Function("return false") 
// 
function disableCtrlKeyCombination(e)
{
//list all CTRL + key combinations you want to disable
var forbiddenKeys = new Array('a', 'n', 'c', 'x', 'v', 'j' , 'w','s','b','d','e','f','g','h','i','k','l','m','n','o','p','q','r','s','t','u');
var key;
var isCtrl;
if(window.event)
{
key = window.event.keyCode;     //IE
if(window.event.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
else
{
key = e.which;     //firefox
if(e.ctrlKey)
isCtrl = true;
else
isCtrl = false;
}
//if ctrl is pressed check if other key is in forbidenKeys array
if(isCtrl)
{
for(i=0; i<forbiddenKeys.length; i++)
{
//case-insensitive comparation
if(forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase())
{
//alert('Key combination CTRL + '+String.fromCharCode(key) +' has been disabled.');
return false;
}
}
}
return true;
}
</script>







<body onkeypress="return disableCtrlKeyCombination(event);" onkeydown="return disableCtrlKeyCombination(event);">
<div class="w3-topnav w3-large w3-green" style="text-align: center">
    &nbsp; 
  <button class="w3-btn w3-green w3-border w3-border-white w3-text-aqua w3-round-large" onClick="window.location.href='sec/' ">SEC-LAB</button>&nbsp;
                       <!-- <button class="w3-btn w3-green w3-border w3-border-white w3-text-orange w3-round-large" onClick="window.location.href='casetools/'">SOFT_SKILLS LAB</button>  -->
 
  &nbsp;<span class="auto-style7" style="text-transform:uppercase">&nbsp;CS6712-Grid and Cloud Computing Laboratory-IV CSE</span><span class="auto-style1">&nbsp;</span></div>

<div class="w3-center">    
  <div class="w3-row">
    <div class="w3-col m2 w3-light-grey" style="height: 100%">
      <p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><span class="auto-style1">
		<em><strong>
		<a href="">CLICK HERE TO GOTO </strong></em>
		<span class="auto-style8">
		HOME</a></span></span></p>
    </div>
    <div class="w3-col m8 w3-container"> 
      <h1>Welcome <?php
if(isset($_COOKIE["name"]))
echo $_COOKIE['name'];
?>!</h1>
		<p class="w3-justify">&nbsp;</p>
		<hr><form action="pdf.asp" method="post">

		<h3 style="height: 15px">&nbsp;</h3>
			<h2><span class="auto-style6">&nbsp;</span><span class="auto-style8">Select 
	Ex.No:</span><span class="auto-style6"> </span>
	<select class="auto-style7" name="exno" style="width: 317px; height: 48px" id="get_ex_no">
	<?php require_once("list.php");
        echo $select;
        
        if(strlen($select)<2)
         $disabled=true;
        
	?>
	</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
			<p style="height: 9px">&nbsp;</p>
			<h3><span class="auto-style10">&nbsp;&nbsp;
	<span class="auto-style16">
	<input name="pdf" type="button" id="down" value="Download as PDF" onclick="pdfsubmit()"class="w3-btn w3-green w3-large" style="width: 195px" </button>
&nbsp;&nbsp;

</span><span class="auto-style20"><strong><br>
			</strong>
	</span></span></h3>
    </div>
    <div class="w3-col m2 w3-light-grey w3-padding">
      <div class="auto-style3">
          <em>NOTICE</em></div><br>
      <div class="w3-left-align" style="height: 427px">
          <strong><em>
          <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="3" style="height: 418px" scrolldelay="100"><?php require_once('notice_common.php');echo "<center>--GCC--</center>".$gcc."<center>---SEC---</center>".$sec; ?></marquee></em></strong></div>
    </div>
  </div>
</div>

<footer class="w3-container w3-green">
  <p class="w3-center"><a href="http://csein.ml"><u>csein.ml</u></a></p>
<div class="w3-center">
</footer>
<div id="id01" class="w3-modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-16 w3-display-topright"></span>
  <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px; left: 9px; top: -83px;">
  
    <div class="w3-center" ><br><b><i><span class="auto-style9" id="hi">Hi,
    	</span>
    </div><br>
        <div class="w3-center"  id="put_ex_no" name="put_ex_no" value="123"> Ex_no</div></i></b>
    <div class="w3-container">
      <div class="w3-section">
        <label><b>You'r Redg.No:</b></label><div class="w3-input"><b><span class="auto-style12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="auto-style5">&nbsp;4116151040</span><strong><select id="rn" name="r_no" onchange="onse();"style="width: 66px; height: 35px"  class="auto-style4">
	<option selected="selected">00</option>
	<option>01</option>
	<option>02</option>
	<option>03</option><option>
	04</option><option>05</option><option>06</option><option>07</option><option>
	08</option><option>09</option><option>10</option><option>11</option><option>
	12</option><option>13</option> <option>14</option><option>15</option><option>
	16</option><option
>17</option><option>18</option><option>19</option><option>20</option><option>
	22</option><option>23</option><option>27</option><option>28</option><option>29</option>
<option>30</option><option>31</option><option>32</option><option>33</option><option>
	34</option><option>35</option><option>36</option><option>37</option><option>
	38</option><option>39</option><option>40</option><option>41</option><option>43</option><option>44</option><option>45</option><option>
	46</option><option>47</option><option>48</option><option>49</option><option>
	50</option> </select></strong> </div></b>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button name="view" class="w3-btn  w3-green" id="11">View File</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button name="download" class="w3-btn  w3-blue" id="12">Download File</button>
        
      </div>
    </div> <id="name" value="gd">

    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
      <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
     
    </div>

  </div>
</div><input id="file_ex" style="visibility: hidden" name="put_ex_no"/>
<input id="sname" style="visibility: hidden" name="sname"/>
</form>	
</div>
</body>
<script>
function pdfsubmit()
{
  var x=document.getElementById('get_ex_no').value;
  var y=x.toUpperCase();
 document.getElementById('id01').style.display='block';
 document.getElementById('put_ex_no').innerHTML=y;
  document.getElementById('file_ex').value=x;
}
</script>
<script>
var s,n;
function onse()
{
 s=document.getElementById("rn").value;
switch(s)
  {
 case '00':n="MAD LABORATORY"; break;
 case '01':n="AKSHAYA I"; break;
case '02':n="AKSHITH SIMHA K"; break;
case '03':n="ARAVINTH S"; break;
case '04':n="BHARATH KUMAR G"; break;
case '05':n="DEDEEPYASAI LAKSHMI D"; break;
case '06':n="DEVI M K"; break;
case '07':n="EBENEZER PAUL S"; break;
case '08':n="GAYATHRI V"; break;
case '09':n="GEETHA LAKSHMI S"; break;
case '10':n="GIRIJA C"; break;
case '11':n="GOPAL D"; break;
case '12':n="HARI KRISHNAN K M"; break;
case '13':n="HARINI B"; break;
case '14':n="ISWARIYA M S"; break;
case '15':n="JAGADISH M"; break;
case '16':n="KARTHICK V"; break;
case '17':n="KEERTHIKA P"; break;
case '18':n="KIRUTHIKA A"; break;
case '19':n="KOWSALYA S"; break;
case '20':n="KRITHIKA M"; break;
case '22':n="LOKESH S"; break;
case '23':n="MANIMOZHI P"; break;
case '27':n="NITHYA K"; break;
case '28':n="NIVEDHA D"; break;
case '29':n="PADMARATHIKA P C"; break;
case '30':n="PADMAVATHY K"; break;
case '31':n="POOJA M"; break;
case '32':n="POOJA SREE S"; break;
case '33':n="PRASANTH R"; break;
case '34':n="PRIYANKA M"; break;
case '35':n="RACHANA R"; break;
case '36':n="SAGITHYA N"; break;
case '37':n="SAJEETHA N G"; break;
case '38':n="SHANTHI S"; break;
case '39':n="SARGUNAN V"; break;
case '40':n="SEBASTAN DAVID D"; break;
case '41':n="SHAIVE"; break;
case '43':n="SMRUTHI RAVICHANDRAN"; break;
case '44':n="SUBHASHREE S"; break;
case '45':n="SUMITHA P"; break;
case '46':n="VELMURUGAN P"; break;
case '47':n="VINITHA R"; break;
case '48':n="VISHAK K"; break;
case '49':n="YAMIKA P"; break;
case '50':n="YUVARAJ B"; break; 
  }
  document.getElementById('hi').innerHTML="Hi, "+n;
  document.getElementById('sname').value=n;
  
}
  function disableContextMenu()
  {
    window.frames["myf"].document.oncontextmenu = function(){alert("No way!"); return false;};
    // Or use this
    // document.getElementById("fraDisabled").contentWindow.document.oncontextmenu = function(){alert("No way!"); return false;};;
  }
</script> 

    </div>


</html>

<?php
if(isset($disabled))
{
 echo '<script>
 document.getElementById(\'down\').disabled=true;
   </script>';
}


include_once('../Mobile_Detect.php');
$detect=new Mobile_Detect;
 if($detect->ismobile())
 echo '<script>
  document.getElementById("11").innerText="Download File";
  document.getElementById("12").style.display = "none";
 
 </script>';


?>

