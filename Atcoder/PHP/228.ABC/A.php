<?php

fscanf(STDIN, '%d%d%d', $s, $f, $x);

if ($s <= $f) {
    if ($x <= $f) {
        echo "Yes";
    } else {
        echo "No";
    }
} else {
    if ($x < $f || $s <= $x) {
        echo "Yes";
    } else {
        echo "No";
    }
}