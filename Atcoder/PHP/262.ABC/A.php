<?php
fscanf(STDIN, "%d", $n);

if ($n % 4 === 1) {
    echo $n + 1;
} elseif ($n % 4 === 3) {
    echo $n + 3;
} elseif ($n % 4 === 0) {
    echo $n + 2;
} else {
    echo $n;
}