<?php
fscanf(STDIN, "%d", $mori);
$evis = explode(" ", trim(fgets(STDIN)));
$jap2 = [];
foreach ($evis as $evisjap) {
    $jap2[] = (int)$evisjap;
}
sort($jap2);

$kes = range(1, $mori);

if ($jap2 == $kes) {
    echo 'Yes';
} else {
    echo 'No';
}