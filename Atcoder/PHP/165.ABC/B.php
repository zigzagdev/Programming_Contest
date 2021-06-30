<?php

fscanf(STDIN, "%d", $kes);

$mori = 100;
$evis = 0;


while($kes>=$mori){
 $mori = $mori+intdiv($mori,100);
   $evis +=1;
 if($kes<=$mori)
   break;
}
echo $evis;