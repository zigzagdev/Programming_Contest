<?php
fscanf(STDIN, "%d%d%d", $a,$b,$x);

$rajah=array($a,$b,$x);
rsort($rajah);

if($rajah[0]==$rajah[1]+$rajah[2]){
  echo "Yes";} else {
  echo "No";}