<?php
fscanf(STDIN, '%s', $string);
fscanf(STDIN, '%d', $times);

$split = str_split($string);


for ($i = 0; $i < $times; $i++) {
    fscanf(STDIN, '%d%d', $first, $second);
    $range = array_slice($split, $first - 1, $second - $first + 1);
    $change = array_reverse($range);
    array_splice($split, $first - 1, $second - $first + 1, $change);
}

echo (implode("", $split)) . "\n";