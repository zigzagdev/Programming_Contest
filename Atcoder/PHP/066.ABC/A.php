<?php
fscanf(STDIN, "%d%d%d", $n, $a, $b);

$first = ($n + $a);
$second = ($a + $b);
$third = ($n + $b);

$array = array($first, $second, $third);

echo min($array);
