<?php
fscanf(STDIN, "%d%d%d%d", $kes, $mori, $yama, $moriyama);
$evija = explode(" ",trim(fgets(STDIN)));
$evis = explode(" ",trim(fgets(STDIN)));
arsort($evija);
sort($evis);


for($i=$yama+1;$i<=$moriyama;$i++){
  if( max(max($evija), $yama) < min(min($evis), $moriyama) ){
    echo 'No War';
    exit;
  }
}
 echo 'War';