<?php
fscanf(STDIN, "%d%d", $x, $y);

if ($x >= $y) {
    echo 0;
} elseif (($y - $x) % 10 == 0) {
    echo ($y - $x) / 10;
} else {
    echo floor(($y - $x) / 10) + 1;
}