<?php
fscanf(STDIN, "%d", $a);

$first=floor($a/500)*1000;
$surplus=($a%500);
$second=floor($surplus/5)*5;

echo $first+$second;
?>

