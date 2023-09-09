<?php
fscanf(STDIN, "%s", $mori);
$kes = str_split($mori);

if ($kes[0] == $kes[1] && $kes[1] == $kes[2] && $kes[2] == $kes[3]) {
    echo 'Weak';
} elseif ($kes[1] == ($kes[0] + 1) % 10 && $kes[2] == ($kes[1] + 1) % 10 && $kes[3] == ($kes[2] + 1) % 10) {
    echo 'Weak';
} else {
    echo 'Strong';
}