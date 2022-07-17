<?php
fscanf(STDIN, "%d", $kes);

for($fuji=0; $fuji<$kes; $fuji++){
  fscanf(STDIN,"%s",$yama);
  if(isset($evis[$yama])){
    $evis[$yama]++;}else{
    $evis[$yama] = 1;}
}
ksort($evis);
$evija = array_keys($evis, max($evis));
$evisjap = implode( "\n", $evija);

print_r($evisjap);