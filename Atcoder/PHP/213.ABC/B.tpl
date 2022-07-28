<?php
fscanf(STDIN, "%d", $mori);
$kes =explode(" ",trim(fgets(STDIN)));
$fuji = $kes;
rsort($kes);

$evisjap = [];
foreach($kes as $yama => $evis){
  if($yama==1){
    array_push($evisjap, $evis);
  }
}
$acho = ($evisjap['0']);
foreach($fuji as $taku => $evija){
  if($acho == $evija){
    echo $taku+1;
  }
}