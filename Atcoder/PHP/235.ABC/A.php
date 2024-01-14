<?php
fscanf(STDIN, "%s%s%s", $x, $y, $z);

$first = $x[0] . $x[1] . $x[2];
$second = $x[1] . $x[2] . $x[0];
$third = $x[2] . $x[0] . $x[1];

echo intval($first) + intval($second) + intval($third);
