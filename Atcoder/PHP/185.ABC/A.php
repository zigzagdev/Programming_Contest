<?php
fscanf(STDIN, "%d%d%d%d", $a, $b, $c, $d);

$array = [$a, $b, $c, $d];
$s = min($array);

echo $s;
?>