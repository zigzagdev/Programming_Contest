<?php

$num = trim(fgets(STDIN));
$a = str_split($num);

if ($num < 10) {
    echo "Yes";
    exit;
}

for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] <= $a[$i + 1]) {
        echo "No";
        exit;
    }
}
echo "Yes";