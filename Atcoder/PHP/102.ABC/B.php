<?php
fscanf(STDIN, "%d", $n);
$array = explode(" ", trim(fgets(STDIN)));

$max = max($array);
$min = min($array);

echo $max - $min;
?>
