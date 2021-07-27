<?php
fscanf(STDIN, "%d%d", $a,$b);

if($a%$b==0) {
    echo $a/$b ;} else {
    echo floor($a/$b+1) ;}
?>
