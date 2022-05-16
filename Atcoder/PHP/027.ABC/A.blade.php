<?php
$evis = trim(fgets(STDIN));

$jap = explode(" ",$evis);

sort($jap);
if($jap[0] == $jap[1]){
  echo $jap[2]."\n";} else{
  echo $jap[0]."\n";}