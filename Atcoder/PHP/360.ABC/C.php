<?php

$n = trim(fgets(STDIN));

$s = explode(" ", trim(fgets(STDIN)));
$t = explode(" ", trim(fgets(STDIN)));

$empty_boxes = 0;
for ($i = 0; $i <= $n; $i++) {
    if (!isset($box_count[$i])) $empty_boxes++;
}

$extra_weights = [];
$box_map = [];

for ($i = 0; $i < $n; $i++) {
    $box_map[$s[$i]][] = $t[$i];
}

foreach ($box_map as $weights) {
    if (count($weights) > 1) {
        sort($weights);
        for ($i = 0; $i < count($weights) - 1; $i++) {
            $extra_weights[] = $weights[$i];
        }
    }
}

sort($extra_weights);
$cost = array_sum(array_slice($extra_weights, 0, $empty_boxes));

echo $cost;