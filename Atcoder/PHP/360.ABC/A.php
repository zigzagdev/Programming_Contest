<?php

$n = trim(fgets(STDIN));
$arrayN = str_split($n);

if ($arrayN[0] === 'R' || $arrayN[1] === 'R' && $arrayN[2] === 'M') {
    echo 'Yes';
} else {
    echo 'No';
}