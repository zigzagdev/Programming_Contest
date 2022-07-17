<?php

$kes = fgets(STDIN);
$moriyama = explode(" ",fgets(STDIN));

$fuji = array_sum($moriyama);
$taku = round($fuji/$kes);

$evisjap = 0;
foreach($moriyama as $evija){
  $evisjap += ($evija - $taku)**2;
}
echo $evisjap;