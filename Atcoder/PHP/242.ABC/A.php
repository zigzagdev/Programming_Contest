<?php
fscanf(STDIN, '%d%d%d%d', $a, $b, $c, $x);

if ($a >= $x) {
    echo 1;
} elseif ($a < $x && $x <= $b) {
    echo $c / ($b - $a);
} else {
    echo 0;
}