<?php
fscanf(STDIN, "%d", $kes);

for($i = 0; $i < $kes; $i++) {
  $fuji[] = trim(fgets(STDIN));
}

for($i = 0; $i < $kes -1; $i++) {
  if(substr($fuji[$i], -1) !== substr($fuji[$i+1], 0, 1)) {
    echo substr($fuji[$i], -1), " ", substr($fuji[$i+1], 0, 1);
    exit;
  }
}
echo 'Yes';
?>