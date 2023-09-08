<?php
fscanf(STDIN, '%d', $time);
$tako = explode(' ', trim(fgets(STDIN)));

$total = 0;

for ($i = 0; $i < $time - 1; $i++) {
    for ($j = $i + 1; $j < $time; $j++) {
        $total += $tako[$i] * $tako[$j];
    }
}
echo $total;