<?php
fscanf(STDIN, "%d", $a);
$b=explode(" ",trim(fgets(STDIN)));
$c=explode(" ",trim(fgets(STDIN)));

$result=0;
 for($i=0;$i<$a;$i++){
   if($b[$i]>$c[$i]){
    $result+= $b[$i]-$c[$i];}
 }
echo $result;