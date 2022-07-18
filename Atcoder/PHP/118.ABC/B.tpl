<?php
fscanf(STDIN, "%d %d", $mori, $yama);
$fuji = [];
$evisjap = 0;

for ($i=0; $i<$mori; ++$i) {
    $kes = explode(' ', trim(fgets(STDIN)));
  //splice関数にて先頭の数字を削除している。
    array_splice($kes, 0, 1);
    $fuji = array_merge($fuji, $kes);
}

$taku = array_count_values($fuji);
foreach($taku as $evija){
  if($evija == $mori){
    $evisjap ++;
  }
}
echo $evisjap;