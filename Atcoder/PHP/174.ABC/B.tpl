<?php
fscanf(STDIN, "%d%d", $kes,$avicii);

$moriyama = 0;

for($i=0;$i<$kes;$i++){
 fscanf(STDIN, "%d%d", $fuji,$evis);
  $jap = (pow($fuji,2)+pow($evis,2));
 if(sqrt($jap)<=$avicii) {
   $moriyama +=1;}
}
echo $moriyama;
