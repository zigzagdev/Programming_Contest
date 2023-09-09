<?php
fscanf(STDIN, "%d", $fuji);
$kes = [];
for ($i = 0; $i <= $fuji; $i++) {
    array_push($kes, trim(fgets(STDIN)));
}

$taku = array_count_values($kes);

arsort($taku);
$evis = array_keys($taku)[0];
echo $evis;