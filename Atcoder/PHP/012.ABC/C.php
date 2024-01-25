<?php
fscanf(STDIN, '%d', $num);

$short = 2025 - $num;

$even = [];
for ($i = 1; $i <= $short; $i++) {
    for ($j = 1; $j <= $short; $j++) {
        if ($i * $j == $short && $j <= 9 && $i <= 9) {
            echo $i . " x " . $j;
            echo PHP_EOL;
        }
    }
}
echo PHP_EOL;