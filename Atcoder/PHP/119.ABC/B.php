<?php
fscanf(STDIN, "%d", $taku);
$evisjap = 0;

for ($i=0;$i<$taku;$i++) {
   list($mori, $yama) = explode(' ', trim(fgets(STDIN)));
   if($yama=='BTC'){
     $evisjap += $mori*380000 ;}else{
     $evisjap += $mori;
   }
}
echo $evisjap;