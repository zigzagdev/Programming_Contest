<?php
  fscanf(STDIN, "%d", $a);
  fscanf(STDIN, "%d", $b);
  fscanf(STDIN, "%d", $n);
  while(($n % $a !== 0) || ($n % $b !== 0)){
      $n++;
  }
  echo $n;
  echo "\n";
?>