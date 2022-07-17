<?php
fscanf(STDIN, "%d", $kes);
$moriyama = explode(" ", trim(fgets(STDIN)));

$evisjap = 0;
$fuji = 0;
for($i=0;$i<$kes-1;$i++){
  if($moriyama[$i]>=$moriyama[$i+1]){
    $evisjap ++;
  }else{
    $evisjap = 0;
  }
  $fuji = max($evisjap, $fuji);
}
echo $fuji;