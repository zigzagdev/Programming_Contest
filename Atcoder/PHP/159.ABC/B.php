<?php
fscanf(STDIN, '%s', $string);
$leng = strlen($string);

if ($leng % 2 == 0 || $leng < 3 || 99 < $leng) {
    echo "No";
    exit;
}
$first = substr($string, 0, ($leng - 1) / 2);
$last = substr($string, ($leng + 3) / 2 - 1, $leng);

if ($first != $last) {
    echo "No";
    exit;
}

echo "Yes";