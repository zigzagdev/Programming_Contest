<?php
fscanf(STDIN, "%d", $kes);
fscanf(STDIN, "%d", $mori);

$evisjap = abs($kes - $mori);

if (5 < $evisjap) {
    echo 10 - abs($kes - $mori);
    echo PHP_EOL;
} else {
    echo abs($kes - $mori);
    echo PHP_EOL;
}