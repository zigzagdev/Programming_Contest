<?php
fscanf(STDIN, "%d%d%d", $mori, $yama, $kes);

if ($kes % 2 == 0) {
    if (abs($mori) > abs($yama)) {
        echo '>';
    } elseif (abs($mori) < abs($yama)) {
        echo '<';
    } else {
        echo '=';
    }
} else {
    if ($mori > $yama) {
        echo '>';
    } elseif ($mori < $yama) {
        echo '<';
    } else {
        echo '=';
    }
}
