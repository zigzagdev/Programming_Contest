<?php
fscanf(STDIN,"%d%d",$moriyama,$kes);

if($moriyama*6<$kes || $moriyama>$kes ){
  echo "No"."\n";} else {
  echo "Yes"."\n";}