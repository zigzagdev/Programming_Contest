<?php

fscanf(STDIN, '%d', $s);

$boder = 42;

if ($s >= $boder && 99 < $s) {
    echo "AGC" . $s + 1;
} else if ($s >= $boder && 99 > $boder) {
    echo "AGC0" . $s + 1;
} else if ($s <= $boder && 10 < $s) {
    echo "AGC0" . $s;
} else {
    echo "AGC00" . $s;
}