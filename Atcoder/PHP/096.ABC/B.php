<?php
fscanf(STDIN, "%d%d%d", $a, $b, $c);
fscanf(STDIN, "%d", $x);
$sort = [$a, $b, $c];
sort($sort);

echo $sort[0] + $sort[1] + $sort[2] * 2 ** $x;
?>
