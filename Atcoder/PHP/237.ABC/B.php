<?php
fscanf(STDIN, "%d%d", $kes, $fuji);
$taku = [];
$mori = [];

for ($i = 0; $i < $kes; $i++) {
    $taku[$i] = explode(" ", trim(fgets(STDIN)));
    for ($j = 0; $j < $fuji; $j++) {
        $mori[$j][$i] = $taku[$i][$j];
    }
}
$evisjap = [];
for ($j = 0; $j < $fuji; $j++) {
    $evisjap = [];
    for ($i = 0; $i < $kes; $i++) {
        $evisjap[] = $mori[$j][$i];
    }
    echo implode(" ", $evisjap);
    echo PHP_EOL;
}