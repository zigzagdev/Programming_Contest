<?php

fscanf(STDIN, '%d %d %d', $X, $A, $B);
if ($A >= $B) {
    echo 'delicious';
} elseif ($B - $A <= $X) {
    echo 'safe';
} else {
    echo 'dangerous';
}

echo PHP_EOL;