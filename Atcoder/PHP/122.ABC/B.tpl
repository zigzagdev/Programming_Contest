<?php
$s= trim(fgets(STDIN));

$oh=str_split($s);
$cnt = count($oh);

$torres=0;
$max=0;
 for($i=0;$i<$cnt;$i++){
   if($oh[$i]== 'A'||$oh[$i]== 'C'||$oh[$i]== 'G'||$oh[$i]== 'T'){
     $torres +=1;} else{
     $torres =0;}

$max=max($max,$torres);
}
