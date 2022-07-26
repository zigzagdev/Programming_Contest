<?php
fscanf(STDIN, "%d%d%d%d", $moriyama, $kes, $mori, $yama);

$evija = $moriyama-$kes;
if($moriyama<=$kes){
  echo $moriyama*$mori;}else{
  echo $kes*$mori+$evija*$yama;
}