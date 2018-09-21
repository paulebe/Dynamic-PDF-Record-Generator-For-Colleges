<?php

  $path=getcwd()."/temp/";
   if($dh=opendir($path))
  while(($file=readdir($dh)) !==false)
    {
      if($file=='.' || $file=='..')
       continue;
      unlink($path.$file);
    }
$path=getcwd()."/sec/temp/";
   if($dh=opendir($path))
  while(($file=readdir($dh)) !==false)
    {
      if($file=='.' || $file=='..')
       continue;
      unlink($path.$file);
    }

    
    


    
?>