<?php
$kes = explode(" ", trim(fgets(STDIN)));

$mori = (int)$kes[0];
$yama = (int)$kes[1];

echo $yama * pow($yama - 1, $mori - 1);