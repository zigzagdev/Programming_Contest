<?php
fscanf(STDIN, "%d%d%d%d", $mori, $yama, $moriyama, $fuji);

$kes = $moriyama - ($fuji - $yama);
$evija = $fuji + ($moriyama - $mori);
$evisjap = $kes - ($evija - $fuji);
$taku = $evija + ($kes - $moriyama);

echo $kes, " ", $evija, " ", $evisjap, " ", $taku;