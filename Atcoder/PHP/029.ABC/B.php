<?php
$kes = [];

$moriyama = 0;

for($evis=0;$evis<12;$evis++){
  fscanf(STDIN,"%s",$jap);
  if (preg_match('/r/',$jap)==true){
    $moriyama +=1;
  }
}
echo $moriyama."\n";