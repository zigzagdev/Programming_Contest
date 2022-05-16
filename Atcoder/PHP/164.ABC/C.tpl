<?php
fscanf(STDIN,"%d",$moriyama);
$kes = [];
for ($i=1; $i<=$moriyama; $i++) {
    array_push($kes, trim(fgets(STDIN)));
}

$evisjap = array_unique($kes);

echo count($evisjap);