<?php
fscanf(STDIN, "%d%d%d", $x,$y,$z);

if($x>$y){
  echo floor($z/$y);} else {
  echo floor($z/$x);}