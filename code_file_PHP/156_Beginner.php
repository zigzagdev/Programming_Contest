<?php
fscanf((STDIN),"%d%d",$n,$r);

$result=100*(10-$n);

if ($n<10){
  echo $r+$result;}
else{
  echo $r;}