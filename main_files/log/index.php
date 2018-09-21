<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}


table tbody {
   
    overflow-y: scroll;
    
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<title>LOG VIEWER</title>
<body>

<center><h2>SEM 7-VISITOR'S LOG DATA </h2>

<table align="center">
  <tr>
    <th>S.NO</th>
    <th>NAME</th>
    <th>I/P ADDR</th>
    <th>LAB</th>
    <th>FILE_NAME</th>
    <th>DEVICE</th>
    <th>DATE</th>
    <th>DAY</th>
    <th>TIME</th>
    <th>MODE</th>
  </tr>
 

<?php
$tab="&nbsp;&nbsp;&nbsp;&nbsp;";
$fp=fopen('../log.txt',"r");
$i=0;
while($p=fgets($fp))
$arr[$i++]=$p;
$arr=array_reverse($arr);
for($j=0;$j<$i;$j++)
  {
    $t=explode("#",$arr[$j]);
    echo '<tr>';
    $q=0;
    foreach($t as $f)
    {
        if($q===0)
        $q++;
        else   
        echo "<td>$f</td>"; 
      
    }
   echo '</tr>';

}
echo '</center></table>

</body>
</html>';

include_once('../../banner_remover.php');

?>