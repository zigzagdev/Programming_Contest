<?php
fscanf(STDIN,"%d%d%d",$kes,$fuji,$moriyama);

$jap =[];
for($evis=1;$evis<11;$evis++){
  $moriyama = $kes*$moriyama-$fuji;
  $jap[] = $moriyama;
}
echo implode($jap,"\n");
