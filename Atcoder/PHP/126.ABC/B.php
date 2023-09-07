<?php
fscanf(STDIN, "%s", $kes);

$evis = substr($kes, 0, 2);
$jap = substr($kes, -2, 2);

$a = '03';

if ($evis > '00' && $evis < '13' && $jap > '00' && $jap < '13') {
    echo "AMBIGUOUS";
} elseif ($evis > '00' && $evis < '13') {
    echo "MMYY";
} elseif ($jap > '00' && $jap < '13') {
    echo "YYMM";
} else {
    echo "NA";
}