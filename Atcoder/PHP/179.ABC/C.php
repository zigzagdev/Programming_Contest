<?php
fscanf(STDIN, "%d", $evisjap);

$tevez = 0;
for($mori=1;$mori<$evisjap;$mori++){
  for($yama=1;$yama*$mori<$evisjap;$yama++){
   if ($evisjap - $yama*$mori>0){
     $tevez +=1;
    }
  }
}
echo $tevez;