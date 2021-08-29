<?php
fscanf(STDIN, "%d",$kes);
$toru =explode(" ",trim(fgets(STDIN)));


$rich = 0;
for($i=0;$i<$kes;$i++){
 if ($toru[$i] > 10) {
  $rich += $toru[$i]-10;
 }
}

echo $rich;