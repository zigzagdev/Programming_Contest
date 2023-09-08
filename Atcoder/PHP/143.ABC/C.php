<?php
fscanf(STDIN, "%d", $kes);
fscanf(STDIN, "%s", $fuji);

$taku = str_split($fuji);
$moriyama = [];
$evisjap = 0;
for ($i = 0; $i < strlen($fuji); $i++) {
    if ($taku[$i] != $taku[$i + 1]) {
        $moriyama[] = $taku[$i + 1];
    }
}

echo count($moriyama);