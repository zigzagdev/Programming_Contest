<?php
fscanf(STDIN, "%d", $mori);

$evisjap = 0;
do{
  $evisjap += 1;
}while(2**$evisjap<=$mori);

echo $evisjap-1;
