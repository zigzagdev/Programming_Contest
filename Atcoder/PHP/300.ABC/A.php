<?php

fscanf(STDIN, "%d %d %d", $N, $K, $X);
$A = array_map('intval', preg_split('/\s+/', trim(fgets(STDIN))));

$sum = $K + $X;

for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] === $sum) {
        echo $i + 1;
        exit;
    }
}