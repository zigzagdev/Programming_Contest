<?php
fscanf(STDIN, "%d%d%d", $a, $b, $c);

$array = [$a + $b, $a + $c, $b + $c];

echo min($array);

?>