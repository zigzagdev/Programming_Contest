<?php
fscanf(STDIN, "%s", $string);
fscanf(STDIN, "%d%d", $first, $second);

$split = str_split($string);

$change1 = $split[$first - 1];
$change2 = $split[$second - 1];

$split[$first - 1] = $change2;
$split[$second - 1] = $change1;

foreach ($split as $str) {
    echo $str;
}