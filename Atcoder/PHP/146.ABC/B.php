<?php
fscanf(STDIN, "%d", $kes);
$mori = trim(fgets(STDIN));
$yama = str_split($mori);

$taku = range('A', 'Z');
foreach ($yama as $evis) {
    $evisjap = array_keys($taku, $evis);
    $evisjap = ($evisjap[0] + $kes) % 26;
    echo $taku[$evisjap];
}