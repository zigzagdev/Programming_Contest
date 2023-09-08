<?php
fscanf(STDIN, "%d%d%d", $a, $b, $c);

$m = min(array($a, $b, $c));
$n = max(array($a, $b, $c));

echo $n - $m;
?>