<?php

fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $days);

$arrDays = str_split($days);

if ($arrDays[$n - 1] === 'o') {
    echo "Yes";
    exit;
} else {
    echo "No";
    exit;
}
