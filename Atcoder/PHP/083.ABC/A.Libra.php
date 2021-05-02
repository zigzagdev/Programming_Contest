<?php
fscanf(STDIN, "%d%d%d%d", $a,$b,$c,$d);

if($a+$b>$c+$d) {
    echo 'Left'; } elseif($a+$b<$c+$d){
    echo 'Right';} else{
    echo 'Balanced';}