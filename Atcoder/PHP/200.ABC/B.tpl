<?php
fscanf(STDIN, "%d%d", $evis,$jap);

for($i=0;$i<$jap;$i++){
  if($evis%200 == 0){
    $evis = $evis/200 ; } else {
    $evis = $evis*1000+200;
  }
}
echo $evis;