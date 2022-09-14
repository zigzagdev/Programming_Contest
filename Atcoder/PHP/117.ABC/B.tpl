<?php
fscanf(STDIN, "%d", $a);
$b =explode(" ",trim(fgets(STDIN)));

sort($b);
$avicii=array_pop($b);

if(array_sum($b)>$avicii){
  echo "Yes";}else{
  echo "No";}