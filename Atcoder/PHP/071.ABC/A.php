<?php
fscanf(STDIN, "%d%d%d",$kes,$mori,$yama);

if(abs($mori-$kes)>abs($yama-$kes)){
  echo "B";} else {
  echo "A";}