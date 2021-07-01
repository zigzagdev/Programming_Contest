<?php
fscanf(STDIN, "%d%d", $x,$y);

 if($y%$x != 0){
   echo floor($y/$x+1);} else {
   echo ($y/$x);}