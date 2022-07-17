<?php
fscanf(STDIN, "%d", $fuji);
$kes = [];
for($i=0; $i<=$fuji-1; $i++) {
    array_push($kes, trim(fgets(STDIN)));
}
sort($kes);
$taku = end($kes);
$taku = $taku/2;
array_pop($kes);
array_push($kes, $taku);

echo array_sum($kes);