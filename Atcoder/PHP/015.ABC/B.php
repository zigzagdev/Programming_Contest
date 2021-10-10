<?php
fscanf(STDIN, "%d", $mori);
$kes =explode(" ",trim(fgets(STDIN)));

$yama = 0 ;
$moriyama = 0 ;
for($i=0;$i<$mori;$i++){
  if ($kes[$i] != 0) {
   $moriyama += $kes[$i];
   $yama += 1 ;
  }
}
echo ceil($moriyama/$yama);