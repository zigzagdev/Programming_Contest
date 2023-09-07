<?php
fscanf(STDIN, "%d%d%d", $a, $b, $x);

if ($a == $b && $b == $x) {
    echo "1";
} elseif ($a != $b && $b == $x) {
    echo "2";
} elseif ($a == $b && $b != $x) {
    echo "2";
} elseif ($a == $x && $b != $a) {
    echo "2";
} else {
    echo "3";
}