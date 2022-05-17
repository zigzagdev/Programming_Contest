<?php
fscanf(STDIN,"%d",$moriyama);
$kes = [];
for ($i=1; $i<=$moriyama; $i++) {
    array_push($kes, trim(fgets(STDIN)));
}

$newkes = $kes;
sort($newkes);
$fuji = max($newkes);
$evisjap = $newkes[$moriyama - 2 ];

for($j=0;$j<$moriyama;$j++){
  if($kes[$j]==$fuji){
    echo $evisjap."\n";} else {
    echo $fuji."\n";}
}