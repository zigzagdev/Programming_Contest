<?php
fscanf(STDIN, "%d%d", $l, $h);
fscanf(STDIN, "%d", $n);

$array = [];
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, '%d', $score);
    array_push($array, $score);
}

foreach ($array as $key => $value) {
    if ($value < $l) {
        echo $l - $value . "\n";
    } elseif ($l <= $value && $value <= $h) {
        echo 0 . "\n";
    } else {
        echo -1 . "\n";
    }
}