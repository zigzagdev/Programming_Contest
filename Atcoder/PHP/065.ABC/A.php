<?php
fscanf(STDIN, "%d%d%d", $base, $a, $b);

if ($a >= $b) {
    echo "delicious";
} elseif ($base + $a >= $b) {
    echo "safe";
} elseif ($base + $a < $b) {
    echo "dangerous";
}