<?php

fscanf(STDIN, "%d%d%d", $a, $b, $w);

$w *= 1000;

$min = ceil($w / $b);
$max = floor($w / $a);

if ($max < $min) {
    echo "UNSATISFIABLE";
} else {
    echo $min . " " . $max;
}