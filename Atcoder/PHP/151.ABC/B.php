<?php

fscanf(STDIN, "%d%d%d", $kes,$fuji,$moriyama);
$evis = explode(" ", trim(fgets(STDIN)));

$jap = array_sum($evis);

if($kes*$moriyama<=$jap){
  echo '0';} elseif($kes*$moriyama-$jap<=$fuji){
  echo $kes*$moriyama-$jap;} else{
  echo '-1';}