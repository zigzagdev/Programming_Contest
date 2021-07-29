<?php
fscanf(STDIN, "%d",$kes);
fscanf(STDIN, "%d",$fuji);
fscanf(STDIN, "%d",$mori);
fscanf(STDIN, "%d",$yama);

$evisjap = 0;

for($i=0;$i<=$kes;$i++){
 for($j=0;$j<=$fuji;$j++){
  for($k=0;$k<=$mori;$k++){
 if(500*$i + 100*$j + 50*$k == $yama)
   $evisjap += 1;
  }
 }
}
echo $evisjap;