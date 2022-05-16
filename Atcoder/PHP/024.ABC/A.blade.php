<?php
fscanf(STDIN,"%d%d%d%d",$mori,$yama,$kes,$fuji);
fscanf(STDIN, "%d%d",$evis,$jap);

if($evis+$jap>=$fuji){
  echo ($mori*$evis+$yama*$jap)-($evis+$jap)*$kes."\n";} else {
  echo ($mori*$evis+$yama*$jap)."\n";}