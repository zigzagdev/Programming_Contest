<?php
fscanf(STDIN, "%d%d", $a,$b);
$a1=str_split($a);
$b1=str_split($b);

$a2=$a1[0]+$a1[1]+$a1[2];
$b2=$b1[0]+$b1[1]+$b1[2];
if($a2>=$b2){
    echo $a2;} else {
    echo $b2;}
?>
