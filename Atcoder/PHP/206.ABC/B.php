<?php
fscanf(STDIN, "%d", $evis);

$jap = 0;
for($i=0;$i<1000000000;$i++){
  if($jap < $evis){
    $jap += $i ;}
  elseif($jap >= $evis){
    echo $i-1;
      exit;}
}