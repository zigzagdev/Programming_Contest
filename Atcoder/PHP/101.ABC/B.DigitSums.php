<?php
fscanf(STDIN, "%d", $m);

preg_match_all("([0-9])", $m, $result);
$denominator=array_sum($result[0]);
if($m%$denominator==0){
    echo "Yes";} else {
    echo "No";}
?>


