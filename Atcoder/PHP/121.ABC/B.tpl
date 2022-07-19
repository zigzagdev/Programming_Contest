<?php
fscanf(STDIN, "%d%d%d", $mori, $yama, $moriyama);
$taku = explode(" ", trim(fgets(STDIN)));
$evisjap = 0;
for($i=0;$i<$mori;$i++){
  $tanaka = explode(" ", trim(fgets(STDIN)));
  $jap = 0;
  for($j=0;$j<$yama;$j++){
    $jap += $tanaka[$j]*$taku[$j];
   }
   if($jap+$moriyama>0){
   $evisjap ++;}
}
echo $evisjap;