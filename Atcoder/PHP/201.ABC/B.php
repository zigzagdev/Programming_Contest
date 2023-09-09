<?php
fscanf(STDIN, "%d", $kes);
$evis = [];
for ($i = 0; $i < $kes; $i++) {
    fscanf(STDIN, "%s %d", $mori, $yama);
    $evis[$mori] = $yama;
}
arsort($evis);
$evisjap = [];
foreach ($evis as $taku => $evija) {
    array_push($evisjap, $taku);
}
echo $evisjap[1];