<?php
fscanf(STDIN, "%d%d%d", $kes, $mori, $fuji);

for($evija=$kes;$evija<=$mori;$evija++){
  if($evija%$fuji == 0){
    echo $evija;
    exit;
  }
}
echo '-1';