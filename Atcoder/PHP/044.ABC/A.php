<?php
fscanf(STDIN, "%d", $kes);
fscanf(STDIN, "%d", $fuji);
fscanf(STDIN, "%d", $evis);
fscanf(STDIN, "%d", $jap);

if ($kes > $fuji) {
    echo $fuji * $evis + ($kes - $fuji) * $jap;
} else {
    echo $kes * $evis;
}