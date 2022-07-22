<?php
fscanf(STDIN, "%d", $kes);
$evis = [];
for($i=0;$i<$kes;$i++){
  fscanf(STDIN, "%d%d%d", $mori, $yama, $moriyama);
  if($moriyama> $mori){
    array_push($evis, $yama);
  }
}
sort($evis);
if(count($evis)!=0){
echo $evis[0];}else{
echo '-1';}