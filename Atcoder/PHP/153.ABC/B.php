<?php
fscanf(STDIN, "%d%d", $a,$b);
$h_arr = explode(" ", trim(fgets(STDIN)));

$sum = 0;
for($i =0;$i<$b; $i++) {
    $sum+=$h_arr[$i]; }
if ($sum>($a-1)){
    echo "Yes";} else {
    echo "No"; }
?>
