<?php
fscanf(STDIN, "%d", $kes);

for($i=0;$i<25;$i++){
  for($j=0;$j<15;$j++){
    if(4*$i+7*$j==$kes){
      echo "Yes";
      exit;
    }
  }
}
echo "No";