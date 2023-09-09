<?php
fscanf(STDIN, "%d%d", $mori, $yama);
$moriyama = explode(" ", trim(fgets(STDIN)));

$evisjap = 0;
$fuji = [];
foreach ($moriyama as $taku => $evis) {
    if ($taku % 2 != 0) {
        array_push($fuji, $evis - 1);
    } else {
        $evisjap += $evis;
    }
}
if ($evisjap + array_sum($fuji) <= $yama) {
    echo "Yes";
} else {
    echo "No";
}