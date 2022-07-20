<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));

$evisjap = 0;
for($i=0;$i<$kes;$i++){
  $evisjap += 1/$mori[$i];
}
echo 1/$evisjap;