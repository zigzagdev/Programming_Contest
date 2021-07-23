<?php
$kes = trim(fgets(STDIN));

$moriyama = str_split($kes);
sort($moriyama);

if($moriyama[0] == $moriyama[1] && $moriyama[2] == $moriyama[3] && $moriyama[1] != $moriyama[2]){
  echo "Yes";} else {
  echo "No";}
