<?php
fscanf(STDIN,"%d",$moriyama);
$kes = explode(" ",trim(fgets(STDIN)));

$evis = 0;
for($fuji=0;$fuji<$moriyama;$fuji++){
 if($kes[$fuji] < $kes[$fuji-1]){
    $evis += $kes[$fuji-1] - $kes[$fuji];
    $kes[$fuji] = $kes[$fuji-1]; }else{
   $evis += 0;
 }
}
echo $evis;