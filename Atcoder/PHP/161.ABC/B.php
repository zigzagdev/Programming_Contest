<?php
fscanf(STDIN, "%d%d", $kes,$fuji);
$evis = trim(fgets(STDIN));

$jap = explode(" ",$evis);
rsort($jap);
$evisjap = array_sum($jap);

$count = 0;

for($moriyama=0;$moriyama<$kes;$moriyama++) {
  if($jap[$moriyama]>= 1/(4*$fuji)*$evisjap){
    $count += 1;}
}
if($count>=$fuji){
    echo 'Yes';} else{
    echo 'No';}
