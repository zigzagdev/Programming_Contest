<?php
fscanf(STDIN, "%d%d", $a, $b);
$c = array($a + $b, $a - $b, $a * $b);

echo max($c);
?>z