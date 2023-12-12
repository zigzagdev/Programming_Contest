<?php
fscanf(STDIN, "%d", $kes);

if ($kes < 40) {
    echo 40 - $kes;
} elseif ($kes < 70) {
    echo 70 - $kes;
} elseif ($kes < 90) {
    echo 90 - $kes;
} else {
    echo 'expert';
}