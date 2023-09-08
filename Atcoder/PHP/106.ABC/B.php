<?php
fscanf(STDIN, "%d", $a);

$sum = 0;
for ($i = 1; $i <= $a; $i++) {
    $count = 0;
    if ($i % 2 == 0) {
        continue;
    }
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $count += 1;
        }
    }
    if ($count == 8) {
        $sum += 1;
    }
}
echo $sum;

