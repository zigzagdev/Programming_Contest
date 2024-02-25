<?php
fscanf(STDIN, "%d%d%d%d", $l1, $r1, $l2, $r2);

$max = max($l1, $l2);
$min = min($r1, $r2);

if ($min > $max) {
    echo $min - $max;
} else {
    echo 0;
}