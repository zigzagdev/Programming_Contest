<?php
fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);

if ($a % $b == 0) {
    echo 0 . "\n";
} elseif ($a < $b) {
    echo $b - $a . "\n";
} else {
    echo $b - ($a % $b) . "\n";
}