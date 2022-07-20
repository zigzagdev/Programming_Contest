<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));

asort($mori);

$evisjap = [];
foreach($mori as $moriyama => $a){
  array_push($evisjap, $moriyama+1);
}
echo implode(" ",$evisjap);