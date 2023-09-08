<?php
fscanf(STDIN, "%d%d%d", $m, $p, $q);

$total = 0;
$array = [];
for ($i = 1; $i <= $m; $i++) {
    $array[] = $i;
}

$int = [];
foreach ($array as $key) {
    $num_array = str_split($key);
    $num_sum = array_sum($num_array);
    if ($p <= $num_sum && $num_sum <= $q) {
        $total += $key;
    }
}
echo $total;