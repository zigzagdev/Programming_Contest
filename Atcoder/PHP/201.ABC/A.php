<?php
fscanf(STDIN, "%d%d%d", $kes, $mori, $yama);
$evis = [$kes, $mori, $yama];
asort($evis);
$evisjap = [];
foreach ($evis as $evija => $taku) {
    array_push($evisjap, $taku);
}
if ($evisjap[2] - $evisjap[1] != $evisjap[1] - $evisjap[0]) {
    echo 'No';
} else {
    echo 'Yes';
}