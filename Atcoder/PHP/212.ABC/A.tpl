
<?php
fscanf(STDIN, "%d%d", $evis,$jap);

if($evis >= 0 && $jap == 0){
  echo "Gold";} elseif($evis == 0 && $jap >= 0){
  echo "Silver";} else {
  echo "Alloy";}