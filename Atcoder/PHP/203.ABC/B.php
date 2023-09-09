<?php
fscanf(STDIN, "%d%d", $mori, $yama);
$evisjap = 0;

for ($i = 1; $i < $mori + 1; $i++) {
    for ($j = 1; $j < $yama + 1; $j++) {
        $evisjap += $i * 100 + $j;
    }
}
echo $evisjap;