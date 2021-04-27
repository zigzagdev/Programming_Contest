<?php
$total = trim(fgets(STDIN));

$top=substr_count($total,"o");
$No=substr_count($total,"x");

echo ($top*100)+700 ;
?>
