<?php
fscanf(STDIN,"%d%d",$a,$b);

if($a>9 || $b>9) {
    echo '-1';} else {
    echo $a*$b ;}
?>