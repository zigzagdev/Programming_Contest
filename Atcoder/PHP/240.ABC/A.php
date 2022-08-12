<?php
fscanf(STDIN, "%d%d", $kes, $mori);
$evisjap = abs($mori-$kes);


if($evisjap == 1 || $mori - $kes == 9){
  echo 'Yes';}else{
  echo 'No';
        }