<?php
fscanf(STDIN, "%d%d", $mori, $yama);

if(0<$mori&&$yama == 0){
  echo 'Gold';}elseif(0<$yama&&$mori == 0){
  echo 'Silver';}else{
  echo 'Alloy';}