<?php

function logg($data)
{
$len=leng();
if($len==1)
$f=fopen("log.txt","w");
else
$f=fopen("log.txt","a");
fputs($f,"#$len#".$data."\n");
fclose($f);
}
function leng()
{
    $f=fopen("log.txt","r");
    $i=0;
    while($c=fgets($f))
    $i++;
    fclose($f);
    
    return $i+1;
}


?>