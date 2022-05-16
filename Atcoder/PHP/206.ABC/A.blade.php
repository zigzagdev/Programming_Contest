<?php
fscanf(STDIN, "%d", $x);

if(floor($x*1.08)<206){
   echo 'Yay!';} elseif(floor($x*1.08) == 206){
   echo 'so-so';}else{
   echo ':(';}