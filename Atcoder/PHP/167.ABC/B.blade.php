<?php
fscanf(STDIN, "%d%d%d%d", $w,$x,$y,$z);

 if($w>=$z){
   echo $z;} elseif($w+$x>=$z){
   echo $w;} else {
   echo ($w-($z-$w-$x));}