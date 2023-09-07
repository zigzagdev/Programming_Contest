<?php
fscanf(STDIN, "%d%d%d", $m, $p, $q);

$pt1 = $p * 0.01;
$pt2 = $q * 0.01;

$sold1 = $m * 1000 * $pt1;
$rest = $m * 1000 - $sold1;

$sold2 = $rest * $pt2;

echo ($rest - $sold2) * 0.001;