<?php
$a= trim(fgets(STDIN));

if(preg_match('/RRR/',$a)){
    echo 3;} elseif (preg_match('/RR/',$a)) {
    echo 2;} elseif (preg_match('/R/',$a)) {
    echo 1;} else{
    echo 0;}
?>