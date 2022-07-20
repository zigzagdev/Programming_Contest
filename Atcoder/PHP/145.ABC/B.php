<?php
fscanf(STDIN, "%d", $kes);
$mori = trim(fgets(STDIN));
$mori1 = str_split($mori);
$yama = array_slice($mori1, 0, $kes/2);
$yama1 = implode("", $yama);
$taku = $yama1.$yama1;

if($kes%2 != 0){
  echo 'No';
}elseif($kes%2 == 0 && $mori != $taku){
  echo 'No';
}else{
  echo 'Yes';
}