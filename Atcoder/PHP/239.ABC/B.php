<?php
fscanf(STDIN, "%d", $kes);

if($kes/10 < 0 && $kes % 10 != 0){
  echo intdiv($kes, 10)-1;}else{
  echo intdiv($kes, 10);
}