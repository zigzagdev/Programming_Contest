<?php
fscanf(STDIN, "%s", $fuji);

$kes = strrev($fuji);
$evisjap = 0;
for($i=0;$i<strlen($fuji);$i++){
  if($fuji[$i] != $kes[$i]){
    $evisjap++;
  }
}
echo $evisjap/2;

?>