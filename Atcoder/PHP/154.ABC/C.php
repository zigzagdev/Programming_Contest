<?php
fscanf(STDIN, "%d", $evisjap);
$kes=explode(" ", trim(fgets(STDIN)));

$mori = array_map(function($value) { return (int)$value; },$kes);
$yama = array_unique($mori);



if($yama == $mori){
  echo "YES"; } else {
  echo "NO";}


