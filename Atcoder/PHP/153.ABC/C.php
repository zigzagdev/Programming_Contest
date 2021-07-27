<?php
fscanf(STDIN,"%d%d",$mori,$yama);
$evis = explode(" ", trim(fgets(STDIN)));
$jap2 = [];
foreach ($evis as $evisjap) {
    $jap2[] = (int) $evisjap;
}
sort($jap2);

for($fuji=1;$fuji<=$yama;$fuji++){
   array_pop($jap2);
}
echo array_sum($jap2);