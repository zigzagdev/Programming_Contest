<?php
fscanf(STDIN, "%d%s%d", $x, $y, $z);
if ($y == '+') {
    echo $x + $z;
} else {
    echo $x - $z;
}