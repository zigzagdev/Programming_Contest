<?php
fscanf(STDIN, "%d%d", $a,$b);

$aa=strval($a);
$bb=strval($b);

if (str_repeat($aa,$b)>= str_repeat($bb,$a)) {
    echo str_repeat($aa,$b) ;} else {
    echo str_repeat($bb,$a) ;}
?>
