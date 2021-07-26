<?php
fscanf(STDIN,"%d%d%d",$moriyama,$kes,$fuji);

if ($moriyama - $kes == $fuji && $moriyama + $kes == $fuji){
  echo "?"."\n";} elseif($moriyama + $kes == $fuji){
  echo "+"."\n";} elseif($moriyama - $kes == $fuji){
  echo "-"."\n";} else{
  echo "!"."\n";}