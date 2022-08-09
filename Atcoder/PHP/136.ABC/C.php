<?php
fscanf(STDIN, "%d", $kes);
$mori = explode(' ', trim(fgets(STDIN)));

$taku = 0;
for($i=0;$i<$kes-1;$i++){
  if(($mori[$i]-$mori[$i+1])>2){
    echo "No";
    exit;
  }
  if($taku<$mori[$i]){
    $taku = $mori[$i];
  }
  if($taku-$mori[$i+1]>=2){
    echo 'No';
    exit;
  }
}
echo "Yes";
