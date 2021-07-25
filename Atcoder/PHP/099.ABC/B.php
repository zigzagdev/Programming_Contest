<?php
fscanf(STDIN,"%d%d",$mori,$yama);

$evis = $yama-$mori;
$jap = (($evis+1)*$evis)/2;

echo $jap - $yama  ;