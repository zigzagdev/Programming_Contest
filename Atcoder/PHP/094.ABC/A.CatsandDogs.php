<?php
fscanf(STDIN, "%d%d%d", $a,$b,$x);

if($x<=$a+$b && $a<=$x){
    echo "YES";} else {
    echo "NO";}
?>