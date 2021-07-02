<?php
fscanf(STDIN, "%d%d", $kes,$moriyama);

if(($kes+1)*$moriyama>=($moriyama+1)*$kes) {
  echo ($kes+1)*$moriyama."\n";} else{
  echo ($moriyama+1)*$kes."\n";}
