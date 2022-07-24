<?php
$moriyama = explode(' ', trim(fgets(STDIN)));

sort($moriyama);
if($moriyama[0] == $moriyama[1]){
  echo $moriyama[2];}elseif($moriyama[1] == $moriyama[2]){
  echo $moriyama[0];}else{
  echo '0';
}