<?php
fscanf(STDIN, "%d", $kes);
$moriyama = explode(" ",fgets(STDIN));

// these variables imply  basic definision.
$fuji = 1;
$evisjap = $moriyama[0];

for($evis=0;$evis<$kes;$evis++){
  if($evisjap>$moriyama[$evis]){
    $fuji += 1;
// $evisjap variable substitues the smallest number .
    $evisjap = $moriyama[$evis];
  }
}
echo $fuji;