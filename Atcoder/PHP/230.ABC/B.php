<?php

fscanf(STDIN, '%s', $str);

$t = str_repeat('oxx', 10 ** 5);

$result = str_contains($t, $str);
if ($result === true) {
    echo "Yes";
} else {
    echo "No";
}