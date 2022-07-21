<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));

$evis = [];
$fuji = [];
for($i=0;$i<$kes;$i++){
  for($j=2;$j<$mori[$i]+1;$j++){
    if($mori[$i]%$j == 0){
      array_push($evis, $j);
    }
  }
}
$taku = array_count_values($evis);
arsort($taku);
foreach($taku as  $evisjap => $evija){
  array_push($fuji, $evisjap);
}
echo $fuji[0];