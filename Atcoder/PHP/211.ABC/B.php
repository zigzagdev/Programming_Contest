<?php
fscanf(STDIN, "%s", $moriyama);
fscanf(STDIN, "%s", $mori);
fscanf(STDIN, "%s", $yama);
fscanf(STDIN, "%s", $kes);

$evija = [];
array_push($evija, $moriyama, $mori, $yama, $kes);
$evis = array_unique($evija);
$evisjap = count($evis);
if($evisjap == 4){
  echo 'Yes';}else{
  echo 'No';}