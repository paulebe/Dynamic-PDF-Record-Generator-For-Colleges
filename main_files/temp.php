<?php
date_default_timezone_set('Asia/Kolkata');
  $i=0;
  print "<br><h2> TIME NOW: ".date("h:i:s a") . "</h2><br><h1> THE FILES IN IP,TEMP FOLDER ARE...</h1>";
  $path=getcwd()."/temp/";
 $ch=opendir($path);
 while(($file=readdir($ch)) !== false)
{
  if($file == '.' || $file == '..')
  continue;
  $i++;
  echo "<br> FILE NAME: $file <br>";
}
echo "<br>TOTAL: $i FILES";
$i=0;
  print "<br><h2> TIME NOW: ".date("h:i:s") . "</h2><br><h1> THE FILES IN CG TEMP FOLDER ARE...</h1>";
  $path=getcwd()."/cg/temp/";
 $ch=opendir($path);
 while(($file=readdir($ch)) !== false)
{
  if($file == '.' || $file == '..')
  continue;
  $i++;
  echo "<br> FILE NAME: $file <br>";
}
echo "<br>TOTAL: $i FILES";
$i=0;
  print "<br><h2> TIME NOW: ".date("h:i:s") . "</h2><br><h1> THE FILES IN CASE TOOLS LAB TEMP FOLDER ARE...</h1>";
  $path=getcwd()."/casetools/temp/";
 $ch=opendir($path);
 while(($file=readdir($ch)) !== false)
{
  if($file == '.' || $file == '..')
  continue;
  $i++;
  echo "<br> FILE NAME: $file <br>";
}
echo "<br>TOTAL: $i FILES";
?>