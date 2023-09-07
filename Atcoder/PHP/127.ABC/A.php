<?php
fscanf(STDIN, "%d%d", $a, $b);
if ($a >= 13) {
    echo $b;
} elseif ($a >= 6 && $a <= 12) {
    echo $b / 2;
} else {
    echo 0;
}