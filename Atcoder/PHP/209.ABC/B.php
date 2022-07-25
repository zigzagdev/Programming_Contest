<?php
fscanf(STDIN, "%d", $moriyama);
$kes =explode(" ",trim(fgets(STDIN)));

sort($kes);
$evisjap = 1;
$taku = 1000000007;
for($i=0;$i<$moriyama;$i++){
  $evisjap = ($evisjap*($kes[$i]-$i))%$taku;
}
echo $evisjap;